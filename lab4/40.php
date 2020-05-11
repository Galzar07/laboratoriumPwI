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

    $baza -> exec("INSERT INTO rok (id, nazwa, kierunek, stopien) 
    VALUES(1, 'inf', 'Informatyka', 1), 
    (2, 'mat', 'Matematyka', 1)");
    
    $baza -> exec("INSERT INTO studenci (id,imie, nazwisko, email, id_rok_studiow) VALUES(1,'Albert', 'Kowalski', 'AK@email.com', 1), 
    (2,'Zbigniew', 'Sto', 'Sto@email.com', 2), 
    (3,'Mariusz', 'Pudzianowski', 'MP@email.com', 1)");
  
 
  
  ?>
</body>
</html>