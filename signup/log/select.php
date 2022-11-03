<?php

//SELECT * FROM `users` WHERE `email`='admin@test.it'
//SELECT * FROM `users` WHERE `email`='...' AND `password`='...'
//e la query che consente a verificare se admin@test.it esiste in dba_close
//se si -restituische 1 riga, se no-o righe

//devo usarla in php e al posto di admin@test.it usare 
//nostra variabile $email

function getAllDati($db, $email, $psw){
    //preparati ad eseguire una query come indicata
    $statement=$db->prepare("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$psw' ");
    //eseguire
    $statement->execute();
    //cattura tutte le righe di questa query
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    //conta quante righe sono e mittile in una variabile $num_row
    $num_row=$statement->rowCount();
    return $num_row;

}

function getRow($db, $email, $psw){
    //preparati ad eseguire una query come indicata
    $statement=$db->prepare("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$psw' ");
    //eseguire
    $statement->execute();
    //cattura tutte le righe di questa query
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    //in un array $row metto tutta la riga
    //le posizione del aray sono nomi delle colonne
    // $row['id'] =7
    // $row['email'] =admin@test.it
    // $row['password'] =e64b78...
    $row=$statement->fetch(PDO::FETCH_ASSOC);
    //indica id del record che ho trovato a cui applico return
    // id la chiave primaria 
    $id=$row['id'];
    return $id;


}


?>