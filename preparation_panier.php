  <?php
if(isset($_GET["id"])){
  session_start();

   $host = 'localhost';
   $dbname = 'OrdiShop';
   $username = 'root';
   $password = '';
   
   $con = new PDO("mysql:host=$host;dbname=$dbname", $username, 
   $password);
   $sql='SELECT * from produit where code_pr = \''.$_GET["id"].'\'';
   $reponse = $con->query($sql);
   $donnees = $reponse->fetch();
   $ver=explode(" ",$_SESSION["serie"]) ;
   if(in_array($_SESSION['code'],$ver)){
   $_SESSION["serie"].=$donnees['code']." ";
   
  
   
    /* array_push($_SESSION["serie"],$donnees['serie_pr']);*/

 $photo =explode(" ",$donnees['photo_pr']) ;
 


  
   $_SESSION["data"].='<div class="row">
   <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
     <!-- Image -->
     <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
       <img src=" '.$photo[0].'"
         class="w-100" alt="Blue Jeans Jacket" />
       <a href="#!">
         <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
       </a>
     </div>
     <!-- Image -->
   </div>

   <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
     <!-- Data -->
     <p><strong>Marque : '.$donnees['marque_pr'].'</strong></p>
     <p>Serie : '.$donnees['serie_pr'].'</p>
     <p>'.$donnees['description_pr'].'</p>
     <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
       title="Remove item">
       <i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
<path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></i>
     </button>
     <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
       title="Move to the wish list">
       <i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg></i>
     </button>
     <!-- Data -->
   </div>

   <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
     <!-- Quantity -->
     <div class="d-flex mb-4" style="max-width: 300px">
       <button class="btn btn-primary px-3 me-2"  style="height:38px ;"
         onclick="moin(this)">
         <i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
<path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
</svg></i>
       </button>

       <div class="form-outline">

         <input id="form1" min="0" max="'.$donnees['qstock_pr'].'" name="quantity" value="1" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
       </div>

       <button class="btn btn-primary px-3 ms-2" style="height:38px ;"
         onclick="plus(this)">

         <i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg></i>
       </button>
     </div>
     <!-- Quantity -->
  
     <!-- Price -->
     <p class="text-start text-md-center">
     <strong>Prix unité : </strong><strong>'.$donnees['prix_inistial_pr'].' $</strong>
     </p>
                     <!-- Price -->
   </div>
 </div><hr class="my-4" />';}
   

  }else{
    echo "makayn code";
  }

  ?>
  
     <!-- 	  description_pr serie_pr  $photo =explode(" ",$donnees['photo_pr']) 
    $photo[0]$donnees['prix_inistial_pr']
  
    
    $donnees['description_pr']
    -->             
                    
                  
                  
                    
                   
                    
                    
                  
                
