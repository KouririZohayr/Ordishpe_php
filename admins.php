<?php
$host="localhost";
$dbname="ordishop";
$username="root";
$password="";
try{
         $con=new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
     } catch(PDOException $e){
         die('Erreur:' .$e->getMessage());
     } 
      $search=$_GET['search'] ?? '';

     
      if($search){
      $statement = $con->prepare('SELECT *FROM aadmin WHERE nom_A=:nom_A ORDER BY nom_A ASC ');
      $statement->bindValue(':nom_A',"$search"); 
      }else{
      $statement = $con->prepare('SELECT * FROM aadmin ORDER BY nom_A ASC');
      }
      $statement->execute();
      $admins=$statement->fetchAll(PDO::FETCH_ASSOC);
      
      session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        body{
          width:90%;
            margin:auto;
            background-color: hsl(0, 0%, 95%);
        }
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
<div class="container">
  <div class="row">  
<form action="">
  <div class="input-group mb-3">
  <input type="text" class="form-control"name="search" value="<?php echo $search ?>" placeholder="Search Product">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
</div>
  </form>
  
    <div id='listx'>Admins List</div>
    <br>
    
    <div class="card shadow mb-4 col">
      
        <div class="card-body">
             <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                         
         
             <thead>
               <tr>
                 <th scope="col">#</th>

                 <th scope="col">Admin</th>


                 <th scope="col">status</th>

                 <th scope="col">Email</th>
                 
                 <th scope="col">Phone</th>
                
                 <th scope="col">Numero</th>
     
                 <th scope="col">Action</th>
                
               </tr>
             </thead>
             <tbody>
             
            
                
             
             <?php foreach ($admins as $i=>$admin): ?>     
            
               <tr>
                 <th scope="row"><?= $i+1 ?> </th> 
                 <td><?php echo $admin['nom_A'] .'   '.$admin['prenom_A']?></td>
                 <td>
                    <?php
                    
                    if($_SESSION["nom"]==$admin["nom_A"] ){
                        echo 'Enligne';
                    }
                    else{
                        echo 'Disconnected';
                    }
                     ?>
                
                
                </td>
                 <td><?= $admin['email_A'] ?> </td>
                 <td><?= $admin['adr_A'] ?> </td>
     
                 <td><?= $admin['tel_A'] ?> </td>
                 <td>
                  
                   
     
                   <form style="display:inline-block"  action="supprimerA.php" method='POST'>
                       <input  type="hidden" name="id"value="<?php echo $admin['id_A'] ?>">
                       <button type="submit" class="btn btn-sm  btn-outline-danger" ><ion-icon name="trash-outline">Delet</ion-icon></button>
                   </form>
                 </td>
               
               </tr>
               <?php endforeach; ?>
                       
               
             </tbody>
         </table>
         </div>
                     </div>
                 </div>
                 <hr>
                 <!-- =================================== Footer =============================== -->
                   <!-- Footer -->
                  
             </div>
             <!-- End of Content Wrapper -->
     
         </div>
         <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        
</body>
</html>