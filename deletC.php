<?php

/* $pritt=$_SESSION["prixtotal"]; */
$con=new PDO("mysql:host=localhost;dbname=ordishop", 'root','');
$id=$_POST['$idclient'] ?? null;

if(!$id){
    header('localtion : client.php');
}
$sql = "DELETE FROM comande WHERE id=$id";

$con->query($sql);

  header('location: commend.php');

