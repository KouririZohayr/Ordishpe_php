<?php
$host="localhost";
$dbname="ordishop";
$username="root";
$password="";
try{
         $con=new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
         echo "vous etes maintenat connecté a $dbname sur $host";
     } catch(PDOException $e){
         die('Erreur:' .$e->getMessage());
     } 
      $search=$_GET['search'] ?? '';
      // echo $search;
      if($search){
      $statement = $con->prepare('SELECT *FROM produit WHERE marque_pr=:marque_pr ORDER BY d_time DESC ');
      $statement->bindValue(':marque_pr',"$search"); 
      }else{
      $statement = $con->prepare('SELECT *FROM produit ORDER BY d_time DESC');
      }
      $statement->execute();
      $products=$statement->fetchAll(PDO::FETCH_ASSOC);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product client</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        body{
            width: 95%;
            margin:auto;
        }
        img{
          height: 30px;
          width: 30px;
        }
        table{
          
          
           height: 20px;
           width: 20px;
       
          }
         
         
          th{
            color: #dee2e6;
          } 
          .table>:not(:first-child) {
     border-top: 1px solid currentColor;  
}
          
            #listx,#aprodect{
              display: inline;

            }
            #aprodect{
            margin-left:71%;
              
            }
            #listx{
              font-size:30px;
              font-weight:500;
            }
            /* .btns{
              display: flex;
              justify-content: center;
               align-items: center;
            
            } */
            .flexing{
              display:flex;
            }
            

       
    </style>
</head>
<body>
<form action="">
  <div class="input-group mb-3">
  <input type="text" class="form-control"name="search" value="<?php echo $search ?>" placeholder="Search Product">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
</div>
  </form>
            <div class="flexing">
    <div id='listx'>product List</div>
    <p id='aprodect'>
        <a  href="ajouter produit.php"class="btn btn-success ">Craete Product</a>
    </p>
    </div>
    
  
  <!-- 
        <div class="card shadow mb-4">
      
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    
                        <tr>
                            <th class="btn  btn-sm btn-primary">Name </th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                              <th>Action</th>

                        </tr>
                </table>
                </div>
                </div>
            </div>
            <hr>
            <!-- =================================== Footer =============================== -->
              <!-- Footer -->
             
              <!-- </div> -->
              <br>
   
    <div class="card shadow mb-4">
      
   <div class="card-body">
        <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    
    
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">marque</th>
            <th scope="col">Prix</th>
            
            <th scope="col">date creation</th>
           
            
       
            <th scope="col">promotion</th>
           
            <th scope="col">description</th>
            <th scope="col">Statut</th>
            
            <th scope="col">Action</th>
           
          </tr>
        </thead>
        <tbody>
        
       
            <?php foreach ($products as $i=>$product): ?>
             
              
          <tr>
            <th scope="row"><?= $i+1 ?></th>
            <td><img src="<?php echo $product['photo_pr'] ?>" ></td>
            <td><?= $product['marque_pr'] ?></td>
            <td><?= $product['prix_inistial_pr'] ?> $ </td>

            <td><?=$product['d_time'] ?></td>
            <td><?= $product['propmotion_pr'] ?>%</td>
            
            <td><?= $product['description_pr'] ?></td>
            <td>
              <?php if($product['qstock_pr']>10):?>
                <button  class="btn btn-sm  btn-success" >complited</button>
              <?php endif ;?>
              <?php if($product['qstock_pr']<=10 && $product['qstock_pr']>=1):?>
                <button  class="btn btn-sm  btn-warning" class="btns" >progress</button>
              <?php endif ;?>
              <?php if($product['qstock_pr']==0):?>
                <button  class="btn btn-sm  btn-danger" >finer</button>
              <?php endif ;?>
              
            </td>

            
            <td>
              <a href="modifier.php?id=<?php echo $product['code_pr']?>"  class="btn  btn-sm btn-outline-primary">Edit</a>
              

              <form style="display:inline-block"  action="SupprimerP.php" method='POST'>
                  <input  type="hidden" name="id"value="<?php echo $product['code_pr'] ?>">
                  <button type="submit" class="btn btn-sm  btn-outline-danger">Delet</button>
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
    </body>
</html>