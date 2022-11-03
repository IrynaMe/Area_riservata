
<!-- in Laravel questo file si trova 
in root in .env insieme a config.php -->
<?php

//classe serve per connettersi al database
class DB {
    function connect($db)
    {
        try {
            //class pdo rappresenta la connesione del db
        $conn = new PDO ("mysql:host={$db['host']}; dbname=testsmtp", $db['username'], $db['password']);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "connessione stabilita";
       // print_r($conn);
        return $conn;
        }
        catch (PDOException $exception){
        exit($exception->getMessage());
        }
    }

}
?>
