<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice&funkcje</title>
</head>
<body>
    <?php
    $tablica = array();
    $suma = 0;
    $srednia = 1;

    for($i = 0; $i < 50; $i++) {

        $tablica[$i] = rand(1,100);
        echo"$tablica[$i] ";

        $suma += $tablica[$i];
        

    }

    echo"<br>", "suma: $suma";

    function srednia($tablica, $suma, $srednia) {

        $srednia = $suma/50;
        echo"srednia wynosi: $srednia";

    }

    srednia($tablica, $suma, $srednia);

        
    ?>
</body>
</html>