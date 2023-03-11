<?php
require 'headerglobale.php';
?>
 </style>
 <section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Panier</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            <?php

if(isset($_GET['sup'])){
    unset($_SESSION['panier'][$_GET['sup']]);
}

$ids=array_keys($_SESSION['panier']);

$host = 'localhost';
$dbname = 'OrdiShop';
$username = 'root';
$password = '';
$con = new PDO("mysql:host=$host;dbname=$dbname", $username, 
$password);
if(!$ids){
    $donnees = array()   ;
    echo'pas de produit ';
}
else{


$sql='SELECT * from produit WHERE code_pr IN('.implode(',',$ids).')';
$reponse = $con->query($sql);
$donnees = $reponse->fetchAll();


$reponse->closeCursor(); 
}



?>
            <?php foreach($donnees as $prodect ): ?>
            <div class="row">
   <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
     <!-- Image -->
     <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
       <img src=" <?php $photo =explode(" ",$prodect['photo_pr']) ; echo $photo[0] ?>"
         class="w-100" alt="Blue Jeans Jacket" />
       <a href="#!">
         <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
       </a>
     </div>
     <!-- Image -->
   </div>

   <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
     <!-- Data -->
     <p><strong>Marque :  <?= $prodect['marque_pr']?></strong></p>
     <p>Serie : <?= $prodect['serie_pr']?></p>
     <p><?= $prodect['description_pr']?></p>
     <a href="http://localhost/ordishp/N_vpanier.php?sup=<?= $prodect['code_pr']?>" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
       title="Remove item">
       <i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
<path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></i>
            </a>
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
         onclick="moin(this,'<?= $prodect['prix_inistial_pr']?>')">
         <i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
<path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
</svg></i>
       </button>

       <div class="form-outline">

         <input  id="form1" min="0" max="<?= $prodect['qstock_pr']?>" name="quantity" value="<?php echo $_SESSION['panier'][$prodect['code_pr']]?>" type="number" class="form-control total" />
                    <label class="form-label" for="form1">Quantity</label>
       </div>

       <button  class="btn btn-primary px-3 ms-2" style="height:38px ;"
         onclick="plus(this,'<?= $prodect['prix_inistial_pr']?>')">

         <i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg></i>
       </button>
     </div>
     <!-- Quantity -->
  
     <!-- Price -->
     <p class="text-start text-md-center">
     <strong>Prix unité : </strong><strong id="prixtotal" class="p_init"><?= $prodect['prix_inistial_pr']?><strong>$</strong></strong>
     </p>
                     <!-- Price -->
   </div>
 </div><hr class="my-4" />
 <?php endforeach;?>
            <!-- Single item -->
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Expected shipping delivery</strong></p>
            <p class="mb-0">12.10.2020 - 14.10.2020</p>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
              src="img\Old_Visa_Logo.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
              alt="PayPal acceptance mark" />
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <form action="btnAch.php" method="POST">
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Total 
                <input type="text" style="display:none;" id="prixtot"  name="prixtt" >
                <span id='tt' class="h5" ></strong>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Gratis</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong>$53.98</strong></span>
              </li>
            </ul>
               
            <button type="submit"   name="btn" class="btn btn-primary btn-lg btn-block" >
              Acheter
            </button>
            </form>

            <?php 
            if(isset($_POST["btn"])){
                $_SESSION["prixtotal"]=$_POST["prixtt"];
               
               
            }
            
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<?php
       include ("footer.php");
       
 ?> 

      
<script >
function moin(p,prix){   
  let inp=p.nextElementSibling.firstElementChild;
  let min=inp.getAttribute("min");
  if (inp.value>min){
      inp.value=parseInt(inp.value)-1;
      console.log(inp.value)
    let pp = document.getElementById("tt").innerHTML;
        let prixencien=parseFloat(pp)    
        let tot=parseFloat(prixencien)-prix;
        console.log(tot)
        Prixtt.innerHTML=tot.toFixed(2);
    console.log(Prixtt) 
  }
}
function plus(p,prix){
  
    let inp=p.previousElementSibling.firstElementChild;
  let max=inp.getAttribute("max");
  let Prixtt = document.getElementById("tt");
    t=0
  if (inp.value<max){
      inp.value=parseInt(inp.value)+1;
     
    let pp = document.getElementById("tt").innerHTML;
    t=inp.value*parseFloat(prix);
    console.log(t)
        let prixencien=parseFloat(pp)
        console.log(prixencien)
         
        let tot=parseFloat(prixencien)+parseFloat(t);
        console.log(tot)
        Prixtt.innerHTML=tot.toFixed(2);
    console.log(Prixtt) 
    }
}

</script>
<script>
let t=0
let quantite = document.getElementsByClassName("total");
let Prixtt = document.getElementById("tt");

let prix = document.querySelectorAll(".p_init");
for(i=0;i<quantite.length;i++){
t+=parseFloat(quantite[i].value)*parseFloat(prix[i].innerHTML);

}

Prixtt.innerHTML=t.toFixed(2);  
let prixtotal=document.getElementById("prixtot");
prixtot.value= t.toFixed(2) ;
</script>
