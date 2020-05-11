  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

    $baza = new PDO("mysql:host=localhost;dbname=uczelnia", "root","");

    $baza -> exec("UPDATE studenci SET nazwisko = 'Malinowaski' WHERE id = 3");


 
  ?>
</body>
</html>