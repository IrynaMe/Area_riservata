<?php
class Auth{
    public function getAllDati($db, $email, $psw, $name){
        //preparati ad eseguire una query come indicata
        $this->s=$db->prepare("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$psw' AND `Username`='$name'");
        //eseguire
        $this->s->execute();
        //cattura tutte le righe di questa query
        $this->s->setFetchMode(PDO::FETCH_ASSOC);
        //conta quante righe sono e mittile in una variabile $num_row
        $num_row= $this->s->rowCount();
        return $num_row;
    
    }

    public function getRow($db, $email, $psw, $name){
        //preparati ad eseguire una query come indicata
        $this->s=$db->prepare("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$psw' AND `Username`='$name' ");
        //eseguire
        $this->s->execute();
        //cattura tutte le righe di questa query
        $this->s->setFetchMode(PDO::FETCH_ASSOC);
        //in un array $row metto tutta la riga
        //le posizione del aray sono nomi delle colonne
        // $row['id'] =7
        // $row['email'] =admin@test.it
        // $row['password'] =e64b78...
        $row= $this->s->fetch(PDO::FETCH_ASSOC);
        //indica id del record che ho trovato a cui applico return
        // id la chiave primaria 
        $id=$row['id'];
        return $id;
    
    
    }
    public function signUp($db, $email, $psw, $name){
        //definisco la query di inserimento
        $sql= "INSERT INTO `users`(`email`, `password`, `Username` ) 
        VALUES ('$email','$psw', '$name')";
        $this->s=$db->prepare($sql);
        $this->s->execute();
    }
}


?>