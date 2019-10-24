<?php

session_start();
require_once('dbconnect.php');


if(isset($_SESSION['logedin']))
{
    if($_SESSION['logedin'] == 1)  header('Location: dfnpanel.php');
    
}
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        if(isset($_SESSION['logerr']))
        {
        echo $_SESSION['logerr'];  
       
        }

    ?>
        <form action="dfnpanel.php" method="post">
        <input type="text" name="login">
        <input type="password" name="password">
        <input type="submit" value="Zaloguj">
    </form>
</body>
</html>