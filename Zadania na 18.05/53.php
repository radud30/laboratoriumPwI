<?php
$conn = new PDO('mysql:host=localhost;dbname=uczelnia', 'root');
$sql = 'DELETE FROM studenci WHERE id = :ids';
$sth = $conn->prepare($sql);
$sth->execute(array('ids' => $_GET['ids']));
?>