<?php
require 'headerglobale.php';
$host = 'localhost';
$dbname = 'OrdiShop';
$username = 'root';
$password = '';

$con = new PDO("mysql:host=$host;dbname=$dbname", $username, 
$password);


 

if(isset($_GET['id'])){
    $T=[];
      $sql='SELECT * from produit where code_pr="'.$_GET['id'].'"' ;
    $reponse = $con->query($sql);
    $donnees = $reponse->fetchAll(PDO::FETCH_OBJ);
    $reponse->closeCursor();
    
    if(empty($donnees)){
        echo "produit n'exist pas!";
    }
    $panier->add($donnees[0]->code_pr);
    echo "<script>window.location.href='http://localhost/ordishp/Nos_Ordinateur.php';</script>";
    die ("le produit a bien ajouter a votre panier <a href='http://localhost/ordishp/Nos_Ordinateur.php'>
    return sur le caoiah</a>");
}else{
    echo "vous kldejhioe";
}

    

