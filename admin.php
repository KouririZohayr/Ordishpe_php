<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="all.min.css">
    
    <link rel="stylesheet" href="..\css\bootstrap.min.css">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
<!-- CSS only -->
<!-- JavaScript Bundle with Popper -->
    <title>Document</title>
    <script src="jquery.js"></script>
    <style>
        .section-header{
            
  /* fallback for old browsers */
  background: #667eea;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(102, 126, 234, 0.4), rgba(118, 75, 162, 0.4));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(102, 126, 234, 0.4), rgba(118, 75, 162, 0.4))
}
        
    </style>
</head>
<body>
<section class="header-main">
            <div class="container mt-4">
                <div class="row gy-3 align-items-center">
                    <div class="col-lg-2 col-sm-4 col-4">
                        <a href="" class="navbar-brand">
                            <!-- <img class="logo" height="40" src="images/logo.svg">
                             -->
                             <h1 class="logo">OrdiShop</h1>
                        </a> <!-- brand end.// -->
                    </div>
                    <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                        <div class="float-end">
                            <?php
                            
                            session_start();
                             
                            if(empty($_SESSION["nom"])){
                              
                            echo "<a href='http://localhost/ordishp/se%20conecter.php' class='btn btn-light'> 
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-fill' viewBox='0 0 16 16'>
                                <path d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/>
                              </svg>  <span class='ms-1 d-none d-sm-inline-block'>S'identifier </span></a>";
                            }else {
                                echo "<a href='se conecter.html' class='btn btn-light'> 
                                 <span class='ms-1 d-none d-sm-inline-block'>".$_SESSION["nom"]." </span></a>";
                            }
                            ?>
                            <!-- <a href="se conecter.html" class="btn btn-light"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                  </svg>  <span class="ms-1 d-none d-sm-inline-block">S'identifier </span> 
                            </a> -->
                         <select style="border: none;outline:none;background:#F8F9FA ;padding:8px ;" name="" id="">
                            <option  value="">statistics</option>
                            <option value=""><a href="#">prodects</a></option>
                            <option value=""><a href="#">clients</a></option>
                            <option value=""><a href="#">Comands</a></option>
                            <option value=""><a href="#">Livraison</a></option>
                            <a href="pagadmin.php"> <option value="">Admins</option></a>
                            <option value=""><a href="#">deconexion</a></option>
                        </select>
                            <a  href="http://localhost/ordishp/N_vpanier.php" class="btn btn-light"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                  </svg> <span class="ms-1">Panier </span> 
                            </a>
                        </div>
                    </div> <!-- col end.// -->
                    <div class="col-lg-5 col-md-12 col-12">
                        <form action="#" method="POST" class="">
                          <div class="input-group">
                            <input type="search" class="form-control mb-1" style="width:55%" placeholder="Search" name="search">
                            
                            <button type="submit" name="serch" class="btn btn-primary mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                  </svg>
                            </button>
                          </div> <!-- input-group end.// -->
                        </form>
                    </div> <!-- col end.// -->
                    
                </div> <!-- row end.// -->
            </div> <!-- container end.// -->
        </section> <!-- header-main end.// -->
        <body>
        <section class="padding-y">
        <div class="container">
        
        <div class="row">
            <aside class="col-lg-3">
        
        <button class="btn btn-outline-secondary mb-3 mt-2 w-100  d-lg-none" data-bs-toggle="collapse" data-bs-target="#aside_filter">Show filter</button>
        
        <!-- ===== Card for sidebar filter ===== -->
        <div id="aside_filter" class="collapse card d-lg-block mb-5">
        
          <article class="filter-group">
            <header class="card-header">
              <a href="#" class="title" data-bs-toggle="collapse" data-bs-target="#collapse_aside1" aria-expanded="true" style="text-decoration:none;">
                <i class="icon-control fa fa-chevron-down"></i>   Articles connexes
              </a>
            </header>
            <div class="collapse show" id="collapse_aside1" >
              <div class="card-body">
                <ul class="list-menu" style=" list-style: none;">
                  <li><a href="#">Ordinateur Portable </a></li>
                  <li><a href="#">Ordinateur Bureau</li>
                  <li><a href="#">Mini Pc</a></li>
                  <li><a href="#">Accessories </a></li>
                  <li><a href="#">Carte Graphique</a></li>
                  <li><a href="#">processor </a></li>
                </ul>
              </div> <!-- card-body.// -->
            </div> <!-- collapse.// -->
          </article> <!-- filter-group // -->

          
        
          <article class="filter-group">
            <header class="card-header">
              <a href="#" class="title" data-bs-toggle="collapse" data-bs-target="#collapse_aside_brands" aria-expanded="true" style="text-decoration:none;">
                <i class="icon-control fa fa-chevron-down"></i>  Marque 
              </a>
            </header>
            <div class="collapse show" id="collapse_aside_brands" >
              <div class="card-body">
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" >
                    <span class="form-check-label"> HP </span>
                    <b class="badge rounded-pill bg-gray-dark float-end">120</b>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" >
                    <span class="form-check-label"> Appel </span>
                    <b class="badge rounded-pill bg-gray-dark float-end">15</b>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" >
                    <span class="form-check-label"> ASUS </span>
                    <b class="badge rounded-pill bg-gray-dark float-end">35</b>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" >
                    <span class="form-check-label"> acer </span>
                    <b class="badge rounded-pill bg-gray-dark float-end">89</b>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label"> lenovo </span>
                    <b class="badge rounded-pill bg-gray-dark float-end">30</b>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label"> Toshiba </span>
                    <b class="badge rounded-pill bg-gray-dark float-end">30</b>

                    
                  </label> <!-- form-check end.// -->
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label"> MSI </span>
                    <b class="badge rounded-pill bg-gray-dark float-end">30</b>

                    
                  </label> <!-- form-check end.// -->
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label"> Gigabyte </span>
                    <b class="badge rounded-pill bg-gray-dark float-end">30</b>

                    
                  </label> <!-- form-check end.// -->
              </div> <!-- card-body .// -->
            </div> <!-- collapse.// -->
          </article>

          <article class="filter-group">
            <header class="card-header">
              <a href="#" class="title" data-bs-toggle="collapse" data-bs-target="#collapse_aside_brands" aria-expanded="true" style="text-decoration:none;">
                <i class="icon-control fa fa-chevron-down"></i>  Type de processeur 
              </a>
            </header>
            <div class="collapse show" id="collapse_aside_brands" >
              <div class="card-body">
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" >
                    <span class="form-check-label"> AMD Athlon </span>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" >
                    <span class="form-check-label"> AMD Ryzen 5 </span>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" >
                    <span class="form-check-label"> AMD Ryzen 7 </span>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" >
                    <span class="form-check-label"> Intel Celeron </span>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label"> Intel Atom </span>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label"> Intel Core i5 </span>
                    <b class="badge rounded-pill bg-gray-dark float-end">30</b>

                    
                  </label> <!-- form-check end.// -->
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label"> Intel Core i7 </span>
                    <b class="badge rounded-pill bg-gray-dark float-end">30</b>
                  </label> <!-- form-check end.// -->

                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label"> Intel Core i9 </span>
                  </label> <!-- form-check end.// -->
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label"> Intel Pentium </span>
                  </label> <!-- form-check end.// -->
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label"> Intel Xeon </span>
                  </label> <!-- form-check end.// -->
              </div> <!-- card-body .// -->
            </div> <!-- collapse.// -->
          </article>
          <article class="filter-group">
            <header class="card-header">
              <a href="#" class="title" data-bs-toggle="collapse" data-bs-target="#collapse_aside_brands" aria-expanded="true" style="text-decoration:none;">
                <i class="icon-control fa fa-chevron-down"></i>Capacité de la RAM 
              </a>
            </header>
            <div class="collapse show" id="collapse_aside_brands" >
              <div class="card-body">
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" >
                    <span class="form-check-label"> 2 GO </span>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" >
                    <span class="form-check-label">4 GO </span>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" >
                    <span class="form-check-label"> 8 GO </span>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" >
                    <span class="form-check-label"> 16 GO </span>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label"> 32 GO </span>
                  </label> <!-- form-check end.// -->
        
                  <label class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="">
                    <span class="form-check-label"> 64 GO </span>
                    <b class="badge rounded-pill bg-gray-dark float-end">30</b>                    
                  </label> <!-- form-check end.// -->
              </div> <!-- card-body .// -->
            </div> <!-- collapse.// -->
          </article>
        

          <article class="filter-group">
            <header class="card-header">
              <a href="#" class="title" data-bs-toggle="collapse" data-bs-target="#collapse_aside2" aria-expanded="true" style="text-decoration:none;">
                <i class="icon-control fa fa-chevron-down"></i>  Price 
              </a>
            </header>
            <div class="collapse show" id="collapse_aside2" >
              <div class="card-body">
                <input type="range" class="form-range" min="0" max="100">
                <div class="row mb-3">
                  <div class="col-6">
                    <label for="min" class="form-label">Min</label>
                    <input class="form-control" id="min" placeholder="$0" type="number">
                  </div> <!-- col end.// -->
        
                  <div class="col-6">
                    <label for="max" class="form-label">Max</label>
                    <input class="form-control" id="max" placeholder="$1,0000" type="number">
                  </div> <!-- col end.// -->
                </div> <!-- row end.// -->
                <button class="btn btn-light w-100" type="button">Apply</button>
              </div> <!-- card-body.// -->
            </div> <!-- collapse.// -->
          </article> <!-- filter-group // -->
        
          <article class="filter-group">
            <header class="card-header">
              <a href="#" class="title" data-bs-toggle="collapse" data-bs-target="#collapse_aside3" aria-expanded="true" style="text-decoration:none;">
                <i class="icon-control fa fa-chevron-down"></i>  Size 
              </a>
            </header>
            <div class="collapse show" id="collapse_aside3" >
              <div class="card-body">
                  <label class="checkbox-btn">
                    <input type="checkbox">
                    <span class="btn btn-light"> XS </span>
                  </label>
        
                  <label class="checkbox-btn">
                    <input type="checkbox">
                    <span class="btn btn-light"> SM </span>
                  </label>
        
                  <label class="checkbox-btn">
                    <input type="checkbox">
                    <span class="btn btn-light"> LG </span>
                  </label>
        
                  <label class="checkbox-btn">
                    <input type="checkbox">
                    <span class="btn btn-light"> XXL </span>
                  </label>
              </div> <!-- card-body.// -->
            </div> <!-- collapse.// -->
          </article>  <!-- filter-group // -->
        
    
        </div> <!-- card.// -->
        <!-- ===== Card for sidebar filter .// ===== -->
        
            </aside> <!-- col .// -->
            <main class="col-lg-9">
                
            <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
                <strong class="d-block py-2">32 Objets trouvés </strong>
                <div class="ms-auto">
                  <select class="form-select d-inline-block w-auto">
                      <option value="0">meilleure correspondance</option>
                      <option value="1">Ordinateurs Portables</option>
                      <option value="2">Ordinateurs bureaux</option>
                      <option value="3">Mini Pc</option>
                  </select>
                  
                </div>
            </header>
            
            <!-- ========= content items ========= -->
         
            <div class="row">

            <?php
$host = 'localhost';
$dbname = 'OrdiShop';
$username = 'root';
$password = '';

$con = new PDO("mysql:host=$host;dbname=$dbname", $username, 
$password);

$sql='select * from produit';
$reponse = $con->query($sql);
$donnees = $reponse->fetchAll();
$reponse->closeCursor();
 
?>
<?php foreach($donnees as $produit): ?>
  
  <div class="col-lg-4 col-md-6 col-sm-6" >
 
  <a style='text-decoration:none; color:black;'  href="page produit.php?id=<?=  $produit['code_pr']; ?>">
  <figure class="card card-product-grid ">
    <div class="img-wrap" >
    <img class="card-img-top img-fluid " style="width : 100%;height : auto; " class="info"  src='<?php $photo =explode(" ",$produit['photo_pr']) ; echo $photo[0] ?>' >
    </div>
    <figcaption class="info-wrap border-top">
    <div class="price-wrap">
    <strong class="price ms-1"></strong>
    </div> <!-- price-wrap.// -->
    <p class="h6 mb-2 ms-1" ><?= $produit["serie_pr"] ?></p>
    <p class="text mb-2 ms-1" class="info"><?php if(strlen($produit["description_pr"])>80){
    
      $text = substr($produit["description_pr"], 0, 80) . '...';
      echo $text;
    } ?></p>
    
    <div class="price-wrap">
    <strong class="price ms-1">$<?= $produit["prix_inistial_pr"] ?></strong>          
                      </div> <!-- price-wrap.// -->
                     
    <a href="apanier.php?id=<?= $produit["code_pr"] ?>" class="btn btn-primary ms-1 mb-1">Ajouter au panier</a>
    <a href="#" class="btn btn-light btn-icon ms-1 mb-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">';
     <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
     </svg></a>
     <span id="seri" style="display: none;"><?= $produit["serie_pr"]; ?></span>
     </figcaption>
     </figure>
     
</a></div>
<?php endforeach; ?>
<script>

      function ajouter_au_panier(code,code2) {
    $.ajax('preparation_panier.php?id='+code,{
        success:function(data,status,xhr){
          
        }
    });
 
}
</script> 
</div>




            <hr>

        
            <footer class="d-flex mt-4 justify-content-center">
              <div>
                <a href="javascript: history.back()" class="btn btn-light"> « Go back</a>
              </div>
              <nav class="ms-3">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <span class="page-link">2</span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </footer>
        
            <!-- ========= content items .// ========= -->
            
        
            
        
            </main> <!-- col .// -->
        </div> <!-- row .// -->
        
        </div> <!-- container .//  -->
        </section>
        <!-- !!!!! -->
        <article id="product">
          <section class="section-products " >
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="header">
                            
                            <h2>Recommander pour vous</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-1" class="single-product">
                            <div class="part-1">
                                <ul>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                    </svg></i></a></li>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg></i></a></li>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></i></a></li>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
</svg></i></a></li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title">Microsoft Surface Pro x</h3>
                                                        <p>13in Microsoft SQ1 8GB RAM 128GB SSD Wi-Fi + 4G LTE Black (Renewed)</p>
                                <h4 class="product-old-price">$799.99</h4>
                                <h4 class="product-price">$749.99</h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-2" class="single-product">
                            <div class="part-1">
                                <span class="discount">15% off</span>
                                <ul>
                                    <li><a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                    </svg></i></a></li>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg></i></a></li>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></i></a></li>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
</svg></i></a></li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title">MSI Stealth 15M</h3>
                                                        <p>Gaming Laptop: 15.6" 144Hz FHD 1080p Display, Intel Core i7-11375H, NVIDIA GeForce RTX 3060, 16GB, 
                                                            512GB SSD, Thunderbolt 4, WiFi 6, Win10, Carbon Gray (A11UEK-009)</p>
                                <h4 class="product-price">$1,399.00</h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-3" class="single-product">
                            <div class="part-1">
                                <ul>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                    </svg></i></a></li>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg></i></a></li>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></i></a></li>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
</svg></i></a></li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title">ASUS ROG Strix G15 (2021) Gaming Laptop</h3>
                                                        <p> 15.6” 144Hz IPS Type FHD Display, NVIDIA GeForce RTX 3050, AMD Ryzen 7 4800H, 8GB DDR4,
                                                             512GB PCIe NVMe SSD, RGB Keyboard, Windows 10, G513IC-EB73 </p>
                                <h4 class="product-old-price">$1,500.00</h4>
                                <h4 class="product-price">$1,249.00</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div id="product-4" class="single-product">
                            <div class="part-1">
                                <span class="new">new</span>
                                <ul>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                    </svg></i></a></li>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg></i></a></li>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></i></a></li>
                                    <li><a href="#"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
</svg></i></a></li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title">HP AIO 27-DP1086QE</h3>
                                                        <p>27” FHD Touch/Intel Core i7-1165G7 / 16GB / 512GB SSD + 1TB HDD/Win 10</p>
                                <h4 class="product-price">$1,499.00</h4>
                            </div>
                        </div>
                    </div>
                    
                    
              
            </div>
        </section>
        </article> <!-- !!!!! -->
