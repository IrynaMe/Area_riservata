<?php

session_start();
include('classes/DB.php');
include('classes/dati.php');
include('classes/Auth.php');
include('classes/Messaggi.php');
//$dbInstance = new DB();
//$dbConn = $dbInstance->connect($db);
//credenziali del hosting del mio db (php myadmin del server)
$db =[
    'host'=>'127.0.0.1:8889',
    'username'=>'root',
    'password'=>'root'
];

$messaggio= new Messaggi();
$auth=new Auth();


