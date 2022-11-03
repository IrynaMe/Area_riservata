<?php ob_start();
session_start();
ob_end_clean()?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <icon class="fa fa-home" style="font-size:21px;"></icon>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
      <form class="navbar-form navbar-left" action="#" method="get">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" id="search" name="search">
        </div>
        <button type="submit" class="btn btn-default">Invia</button>
      </form>

<!-- Qui voglio che compaia il nome di chi ha effettuato acesso -->
<?php
if(isset(  $_SESSION['email'])){
  echo "ciao ".$_SESSION['email'];
  ?> 
  <a style="margin-left:10px;" href="esci.php">Eschi</a>
  <a style="margin-left:10px;" href="signup/lista/listing.php">Lista</a>
<?php
}
?>

<?php
if(isset(  $_SESSION['email_reg'])){
  echo "ciao ".$_SESSION['email_reg'];
  ?> 
  <a style="margin-left:10px;" href="esci.php">Eschi</a>
  <a style="margin-left:10px;" href="signup/lista/listing.php">Lista</a>
 
<?php
}
?>



      <ul class="nav navbar-nav">
<!-- //if log mostra nome admin -->
    
      </ul>
      
      <ul class="nav navbar-nav">
      <!-- //if reg mostra nome admin -->
       
      </ul>
      
      <ul class="nav navbar-nav navbar-right">

        <li><a href="index.php">area riservata</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

