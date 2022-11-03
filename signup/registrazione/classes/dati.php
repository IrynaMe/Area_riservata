<?php
Class Dati {
protected $email_reg;
protected $psw_reg;
protected $name_reg;

public function __construct($email,$psw,$name) {
    //il compito del costructore e assegnare valori
    $this->email_reg=$email;
    $this->psw_reg=md5($psw);
    $this->name_reg=$name;


}
public function getEmail(){
    return $this->email_reg;
}
public function getPsw(){
    return $this->psw_reg;
}
public function getName(){
    return $this->name_reg;
}

}

