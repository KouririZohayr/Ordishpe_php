<?php
session_start();
$id= $_SESSION['idclient'];
$pritt=$_POST["prixtt"];
$_SESSION["prixtotal"]=$pritt;
$host = 'localhost';
$dbname = 'OrdiShop';
$username = 'root';
$password = '';
$con = new PDO("mysql:host=$host;dbname=$dbname", $username, 
$password);

$sql="SELECT * FROM client WHERE email_c='".$id."'";
ECHO $sql;
$reponse = $con->query($sql);
$clinet=$reponse->fetch();
$sql = 'INSERT INTO comande VALUES(:id,:adress, :prix_totale , :email_c )';
$statement = $con->prepare($sql);
$statement->execute([':id' => null,':adress' => $clinet["adr_c"], ':prix_totale' =>(float) $pritt, ':email_c'=> $clinet['email_c']]);

  
    header('location: N_vpanier.php');
    

?>