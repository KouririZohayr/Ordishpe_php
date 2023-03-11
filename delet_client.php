<?php
$username="root";
$con=new PDO("mysql:host=localhost;dbname=ordishop",$username,'');
$id=$_POST['id'] ?? null;
echo $id ;

if($id){
    //  header('localtion : client.php');
}
$sql = 'DELETE FROM client where nom_c="$id ';
echo $sql ; 

$con->query($sql);
echo "hello";



  // header('location: client.php');
?>