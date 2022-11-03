<!-- il file che visualizza la query descritta in lista.php
in laravel questo file= view di Model -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Lista users</title>
</head>
<body>
    <?php
include('config.php');
include('DB.php');
include('lista.php');
include('../../menu.php');

$dbInstance= new DB;
$dbConn=$dbInstance->connect($db);
$user=new Lista();
$user->mostra_user($dbConn);
?>

</body>
</html>
