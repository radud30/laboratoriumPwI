<?php

$conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root');

$conn->exec("INSERT INTO studenci (id,imie,nazwisko,email,id_rok_studiow)
VALUES
(1,'Pawel','Dudaryk','paweldudaryk@gmail.com',1),
(2,'Jan','Kowalski','kowalski@wp.pl',2),
(3,'Adam','Jakis','jakis@jj.pl',2)");

$conn->exec("INSERT INTO rok (id,nazwa,kierunek, stopien)
VALUES
(1,'informatyka','informatyka','I'),
(2,'stosowana','matematyka','I')");

//$conn->exec("DELETE FROM studenci");
//$conn->exec("DELETE FROM rok");
    
?>