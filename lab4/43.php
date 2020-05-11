<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php

    $baza = new PDO("mysql:host=localhost;dbname=uczelnia", "root", "");

    $zapytanie = 'SELECT imie, nazwisko, kierunek, stopien FROM studenci, rok ON rok.id=studenci.id_rok_studiow';


    echo "<table border=1>
    <tr>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Kierunek</th>
    <th>Stopien</th>
    </tr>";
    foreach ($baza->query($zapytanie) as $b) {
        echo "<tr>";
        echo "<td>" . $b['imie'] . "</td>";
        echo "<td>" . $b['nazwisko'] . "</td>";
        echo "<td>" . $b['kierunek'] . "</td>";
        echo "<td>" . $b['stopien'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>