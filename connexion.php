<?php
$host = 'localhost';
$dbname = 'ordishop';
$username = 'root';
$password = '';
try {
$con = new PDO("mysql:host=$host;dbname=$dbname", $username, 
$password);

}

catch (PDOException $e) {
die('Erreur : ' . $e->getMessage());

}
?>