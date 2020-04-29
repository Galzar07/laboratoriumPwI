<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Plik = "plik.txt";
    $Zawartosc = "Hello World";
        file_put_contents($Plik, $Zawartosc);
    ?>
</body>
</html>