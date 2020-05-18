<?php

$conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root');
$sql = 'INSERT INTO studenci (imie,nazwisko,email,id_rok_studiow)
VALUES
(:imie, :nazwisko, :email, :id_rok_studiow)';

$sth = $conn->prepare($sql);
$sth->execute(array('imie' => $_GET['imie'], 'nazwisko' => $_GET['nazwisko'], 'email' => $_GET['email'], 'id_rok_studiow' => $_GET['id_rok_studiow']));

?>