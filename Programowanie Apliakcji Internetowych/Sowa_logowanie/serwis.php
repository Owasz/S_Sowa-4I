<?php
session_start();

if(!isset($_SESSION['user']))
{
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serwis</title>
    <style>
        body{
            font-family: Arial;
            background-color: silver;
            
        }

        a{
            text-decoration: none;
            color: deeppink;
        }

        span{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Witaj w naszym serwisie! Miłej pracy</h2>
    <p>Jesteś zalogowany jako: <span>
    <?php
    if(isset($_SESSION['user']))
    {
        echo $_SESSION['user'];
    }
    ?>
    </span></p>
    
    <p><a href="">Wyloguj się</a></p>
</body>
</html>