<?php
$conn = new PDO('mysql:host=localhost;dbname=motoryzacja', 'root');

$sql = "SELECT marka,model,pojemnosc FROM samochody WHERE id = 1 OR id = 3";
foreach ($conn->query($sql) as $row) {
    print $row['marka'] . "\t";
    print $row['model'] . "\t";
    print $row['pojemnosc'] . "<br>";
}
?>