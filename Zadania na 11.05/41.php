<?php

$conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root');

$conn->exec("UPDATE studenci SET nazwisko = 'Malinowski' WHERE id = 3");

    
?>