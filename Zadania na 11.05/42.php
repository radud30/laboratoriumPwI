<?php

$conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root');

$conn->exec("DELETE FROM studenci WHERE id = 2");

    
?>