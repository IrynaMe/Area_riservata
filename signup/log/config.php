<?php

session_start();
include('DB.php');
include('dati.php');
include('select.php');
include('../../Class/Messaggi.php');

//credenziali del hosting del mio db (php myadmin del server)
$db =[
    'host'=>'127.0.0.1:8889',
    'username'=>'root',
    'password'=>'root'
];

$messaggio= new Messaggi();

