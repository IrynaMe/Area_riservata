<?php
class Messaggi{
    public function crea_messaggio($testo){
        if(!empty($testo)){
            $_SESSION['testo']=$testo;
        }
    }
    public function messaggio(){
        echo $_SESSION['testo'];
        unset ($_SESSION['testo']);
    }
}
?>