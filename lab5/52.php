<!doctype html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php

    $baza = new PDO('mysql:host=localhost;dbname=Uczelnia', 'root', '');

    $zap = 'SELECT * FROM Studenci';
    ?>

    <form action="53.php" method="GET">
        <select name="id">
            <?php
            
            foreach ($baza->query($zap) as $row) {
                echo "<option value=".$row['id'].">".$row['imie']." ".$row['nazwisko']."</option>";
            }
            ?>
        </select>
    </form>

</body>

</html>