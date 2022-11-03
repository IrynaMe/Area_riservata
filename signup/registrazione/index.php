<?php

include('config.php');

if (isset($_POST["email_reg"])) {
    //mi collego al DB
    $dbInstance = new DB();
    $dbConn = $dbInstance->connect($db);
    //raccolgo i dati inseriti nel form
    // e li sanitizzo
    $email_reg= trim($_POST['email_reg']);
    // echo ($email_log);
    $psw_reg= trim($_POST['psw_reg']);
    //maneggio i dati raccolti passo cioè
    //1 step istanzio la classe e creo oggetto
    // 2 step oggetto->metodo
    $name_reg= trim($_POST['name_reg']);
    $user= new Dati($email_reg, $psw_reg, $name_reg);
    // da qui in poi la psw è criptata
    $email = $user->getEmail();
    $psw = $user->getPsw();
    $name = $user->getName();

     //echo $email."<br>";
     //echo  $psw."<br>";

     $num_row=$auth->getAllDati($dbConn, $email, $psw, $name);
     //echo $num_row;
     if ($num_row >0){
         $testo="Utente gia registrato";
         $messaggio->crea_messaggio($testo);
         header('location:../../index.php');

     } else {
        //utente non registrato puio
        // -creare le session_id
        // -inserire l'utente nel DB
        $_SESSION['email_reg']=$email;
        $_SESSION['psw_reg']=$psw;
        $id_utente=$auth->getRow($dbConn, $email, $psw, $name);
        $_SESSION['id']=$id_utente;
        $_SESSION['Username']=$name;
     }

     //inserimento utente nel DB
     $insert=$auth->signUp($dbConn, $email, $psw, $name);
     //messaggio
     $testo="Registrazione efettuata";
     $messaggio->crea_messaggio($testo);
     
     //voglio che il mio utente registrato viene indserito nel email list
     //usero mailChimp;
     //header('location')
     include('mailchimp.php');
    header('location:../../contatti.php');
} else {
    header('location:../../index.php');
}
