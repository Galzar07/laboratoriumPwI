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
        echo $_SESSION["temp"];
    ?>
    <a href = "22.php">Przejdz do 22php</a>
</body>
</html>