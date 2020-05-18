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
    $zap = $baza->prepare('
        INSERT INTO Studenci (imie, nazwisko, email, id_rok_studiow)
        VALUES
        (:imie, :nazwisko, :email, :rok)
');
    $zap->bindValue(':imie', $_GET['imie']);
    $zap->bindValue(':nazwisko', $_GET['nazwisko']);
    $zap->bindValue(':email', $_GET['email']);
    $zap->bindValue(':rok', $_GET['rok']);
    $zap->execute();

    ?>

</body>

</html>