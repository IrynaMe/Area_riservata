<?php
include('config.php');
include('DB.php');
include('lista.php');

$dbInstance= new DB;
$dbConn=$dbInstance->connect($db);
$user= new Lista();
if($_POST){
    //esegue query UPDATE
    $id=$_POST['utente'];
    $email=$_POST['email'];
    $user->update($dbConn, $id, $email);
}
if($_GET){
//esegue query DELETE
$id=$_GET['utente'];
$user->delete($dbConn, $id);
}



?>