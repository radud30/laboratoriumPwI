<?php

$conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root');

$sql = "SELECT imie,nazwisko,kierunek,stopien FROM studenci,rok WHERE studenci.id_rok_studiow = rok.id";

echo "<table>";

foreach ($conn->query($sql) as $row) {
    echo "<tr>";
    echo "<td>" . $row['imie'] . "</td>";
    echo "<td>" . $row['nazwisko'] . "</td>";
    echo "<td>" . $row['kierunek'] . "</td>";
    echo "<td>" . $row['stopien'] . "</td>";
    echo "</tr>";   
}

echo "</table>";


    
?>