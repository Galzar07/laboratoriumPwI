<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION["temp"]= "Ala ma kota";
    ?>
    <a href = "21.php">Przejdz do 21php</a>
</body>
</html>