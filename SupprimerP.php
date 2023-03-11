<?php
$username="root";
$con=new PDO("mysql:host=localhost;dbname=ordishop",$username,'');
$id=$_POST['id'] ?? null;
echo $id;

if(!$id){
    header('localtion : prodect.php');
}
$sql = "DELETE FROM produit WHERE code_pr=$id";

$con->query($sql);

  header('location: prodect.php');
?>
