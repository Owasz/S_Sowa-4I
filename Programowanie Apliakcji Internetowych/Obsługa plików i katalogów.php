<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie1</title>
</head>
<body>
    <?php
    $kat = './katalog';
    $tab = scandir($kat);

    foreach($tab as $element)
    {
        echo"<div>$element</div>";
    }
    ?>
</body>
</html>