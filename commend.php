<?php
include("connexion.php"); 
include "headerglobale.php";

$idclient=$_SESSION['idclient'];
echo "<pre>" ;                                           
    
    ($_SESSION['panier']);
    echo "</pre>" ;

$produitc=$_SESSION['panier'];
// var_dump($produitc);



    
 



foreach($produitc as $v=>$k){
  $sql="SELECT * FROM produit WHERE code_pr='".$v."'";
  $reponse= $con->query($sql);
  $product=$reponse->fetchAll();
  foreach ($product as $x){
      echo '<div alert alert-primary>';
      echo  $_SESSION['panier'][$v];
     echo '<div >';
    
     
  }
}
    
            
              // //  echo $pass;
              // //  echo $mail;
              // //  echo $tel;
              // //  echo $nom;
             
              //     $sql = 'INSERT INTO comande VALUES(:id,:stock,:prix_totale,:idCT )';
                  
              //     $statement = $con->prepare($sql);
                  
              //     if($statement->execute([':id'=>null,':stock'=>$product,':prix_totale'=>$_SESSION["prixtotal"] ,':idCT'=>$idclient])) 
              //     {
              //     $message = 'comand recois ajouter';
                  
              //     }

              //     else
              //     {
              //     $message="err";
              //     }
              //     echo $message;
             






$sql="SELECT * FROM client WHERE email_c='".$idclient."'";
$reponse = $con->query($sql);                                               
$statment=$reponse->fetchAll(); 

// var_dump($statment);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comands</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
     
      tr{
        border-left: none;
    border-right: none;
      }
      td{
        border-left: none;
    border-right: none;
      }
      th{
        border-left: none;
    border-right: none;
      }
      .table>:not(:first-child) {
     border-top: 1px solid currentColor;  
}
#listx{
              font-size:30px;
              font-weight:500;
            }
    </style>

</head>
<body>
  
<form action="">
  <div class="input-group mb-3">
  <input type="text" class="form-control"name="search" value="" placeholder="Search Product">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
</div>
  </form>
  
    <div id='listx'>Comande List</div>
    <br>
    
    <div class="card shadow mb-4 " >
      
        <div class="card-body">
             <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                         
         
             <thead>
               <tr>
                 

                 <th scope="col">client </th>

                 <th scope="col">Products</th>

                 

                

                 <th scope="col">Quantity</th>
                 
                 <th scope="col">Total</th>
                 
                
                 
              
     
                 <th scope="col">Actions</th>
                
               </tr>
             </thead>
       
  <tbody>
    <?php foreach($statment as $client):?>
    <tr>
    <td><?= $client['prenom_c'] ?></td>
 
      <td scope="row"><?php 
      
    foreach($produitc as $v=>$k){
        $sql="SELECT * FROM produit WHERE code_pr='".$v."'";
        $reponse= $con->query($sql);
        $product=$reponse->fetchAll();
        foreach ($product as $x){
           echo '<div alert alert-primary>';
            echo $x['marque_pr'];
           echo '<div >';

            
        }
     }
        
        echo'</br>';
    
    
    
         ?></td>
    
      <td><?php 
      foreach($produitc as $v=>$k){
        $sql="SELECT * FROM produit WHERE code_pr='".$v."'";
        $reponse= $con->query($sql);
        $product=$reponse->fetchAll();
        foreach ($product as $x){
            echo '<div alert alert-primary>';
            echo  $_SESSION['panier'][$v];
           echo '<div >';
          
           
        }
     }
     ?>
      </td>
      
     
      <td><?php echo $_SESSION["prixtotal"] ?></td>
      <td>
                  
                   
     
                  <form style="display:inline-block"  action="deletC.php" method='POST'>
                      <input  type="hidden" name="ids"value="<?php echo $idclient ?>">
                      <button type="submit" class="btn btn-sm  btn-outline-danger" >Delet</button>
                  </form>
                  <a href="validerComande.php?id=<?php echo $idclient ?>"  class="btn btn-sm btn-outline-success">Valider</a>

                </td>
    </tr>

    
   
    <?php endforeach ; ?>
         
         </table>
</body>
</html> 
<?php

?>