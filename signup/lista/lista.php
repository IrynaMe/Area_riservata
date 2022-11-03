<!-- il file che contiene classe e metodo per eseguire la query in DB
e mi da l'elenco di users presenti nel DB  
in Laravel questo = Model
-->
<?php
Class Lista{
    protected $smt;
    protected function esegui_query($dbConn,$q){
        $this->smt=$dbConn->prepare($q);
        $this->smt->execute();
        return $this->smt;

    }
    protected function htmlUser(){?>
        <tr>
            <td><?php echo $this->row['id']?></td>

            
            <form action="modifica.php" method="post">
                <td>
                    <input type="text" value="<?php echo $this->row['email'] ?>" name="email">
                </td>

                    <input type="hidden" value=<?php echo $this->row['id']?> name="utente">
                
                <td>
                    <button class="btn btn-success" type="submit">Modify</button>
                </td>
            </form>
            <td>
                <a href="modifica.php?utente=<?php echo $this->row['id']?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php
    }

    public function mostra_user($dbConn){
    $q="SELECT * FROM `users`";
    $this->esegui_query($dbConn,$q);

    /* se il risultato della query lo metto in una variabile row 
    array $row contiene tutte le righe del DB e le sue info per colonna 
    (multidimentional array)
    es. $row['id'] la colonna id
    while ($this->row = $this->smt->fetch(PDO::FETCH_ASSOC))
    */
    ?>
    <table class="table table-striped">
    <tr>
        <th>id</th>
        <th>email</th>
        <th>modifica</th>
        <th>cancella</th>
    </tr>
    <?php
    while ($this->row = $this->smt->fetch(PDO::FETCH_ASSOC)){
        
        
        //set di istruzioni rappresentati in un template html    

        $this->htmlUser();

    }
    ?>
    </table>
   <?php
  

}
public function update($dbConn, $id, $user){
    $q="UPDATE `users` SET `email`='$user' WHERE`id`='$id'";
    $this->esegui_query($dbConn,$q);
    header ('location: listing.php');
}
public function delete($dbConn, $id){
    $q="DELETE FROM `users` WHERE `id`='$id'";
    $this->esegui_query($dbConn,$q);
    header ('location: listing.php');
}
}
?>