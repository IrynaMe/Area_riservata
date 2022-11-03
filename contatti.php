

<?php
//entra in questa pagina solo se sono loggato  cioe se stata creata la sessione ['id']
/* if (!isset($_SESSION['email'])){
  header('location:index.php');
}
*/

include('header.php');
?>
  <div class="container"> 
 <?php
include('menu.php');


?>

    <br>


<br>
<?php
include('form.php');
?>
<br>



<br>

<?php
include('footer.php');
?>
</div>