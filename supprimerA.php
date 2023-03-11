<?php
$username="root";
$con=new PDO("mysql:host=localhost;dbname=ordishop",$username,'');
$id=$_POST['id'] ?? null;
echo $id;

if(!$id){
    header('localtion : admins.php');
}
$sql = "DELETE FROM aadmin WHERE id_A=$id";

$con->query($sql);

  header('location: admins.php');
?>
