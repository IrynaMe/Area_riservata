<?php

include('config.php');

if (isset($_POST["email_log"])) {
    //mi collego al DB
    $dbInstance = new DB();
    $dbConn = $dbInstance->connect($db);
    //raccolgo i dati inseriti nel form
    // e li sanitizzo
    $email_log= trim($_POST['email_log']);
    // echo ($email_log);
    $psw_log= trim($_POST['psw_log']);
    //maneggio i dati raccolti passo cioè
    //1 step istanzio la classe e creo oggetto
    // 2 step oggetto->metodo
    $user= new Dati($email_log, $psw_log);
    // da qui in poi la psw è criptata
    $email = $user->getEmail();
    $psw = $user->getPsw();

    // echo $email;
    // echo  $psw;

    $num_row= getAllDati($dbConn, $email, $psw);
    // echo $num_row;
    $id_utente = getRow($dbConn, $email, $psw);
    // echo $id_utente;
    // se il numero di righe > 0

    if ($num_row >0) {
        // echo "ho iserito le credenziali giuste";
        // creo le sessioni e vado alla pagina riservta
        $_SESSION['id']= $id_utente;
        $_SESSION['email']=  $email;
        $_SESSION['psw']=  $psw ;
    //  vai alla pagina riservata 
        header('location:../../contatti.php');
    } else {
        // echo "NON ho iserito le credenziali giuste";
        $testo ="Utente non riconosciuto";
        $messaggio->crea_messaggio($testo);
        header('location:../../registrati.php');
    }
} else {
    header('location:../../index.php');
}
