<?php
session_start();
$nome_mittente=$_POST['nome'];
$mail_mittente=$_POST['email'];
//$oggetto=$_POST['oggetto'];
$testo=$_POST['testo'];
$mail_destinatario='irinam7a@gmail.com';

$oggetto='richiesta di contatto';
$mail_corpo="richiesta di contatto da ".$mail_mittente." che scrive \r\n\n".$testo;
$mail_headers="From: ".$nome_mittente."< ".$mail_mittente." > \r\n";
$mail_headers .="X-mailer:PHP/".phpversion();

if(mail($mail_destinatario, $oggetto, $mail_corpo, $mail_headers)) {
    $mail=1;
    $_SESSION['mail_invio']=$mail;
    header('location:../contatti.php#invio');
}else{
    $mail=0;
    $_SESSION['mail_invio']=$mail;
    header('location:../contatti.php#invio');
}

?>