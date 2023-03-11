<?php 
include "headerglobale.php"
?>


 

            
            <!-- ================ SECTION INTRO ================ -->
            <div id="carouselExampleDark" class="carousel carousel-dark slide mt-4 " data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"  class="active " aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="../img/png.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="../img/gs65-cover.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../img/1630507759_498_Les-7-meilleurs-ordinateurs-portables-pour-etudiants-que-vous-pouvez.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <section class="section-intro bg-primary padding-y-lg" style="height: 500px;display: flex; align-items: center;" >
              <div class="container">
            
                  <article class="my-5">
                    <h1 class="display-4 text-white">Meilleurs produits &amp; <br> marques dans notre magasin  </h1>
                    <p class="lead text-white">Produits à la mode, prix d'usine, excellent service</p>
                    <a href="#" class="btn btn-warning"> Achetez maintenant</a> 
                    
                  </article>
            
                </div> <!-- container end.// -->
            </section>
            <!-- ================ SECTION INTRO END.// ================ -->
            
            <!-- ================ SECTION PRODUCTS ================ -->
            <section class="padding-y mt-3">
            <div class="container">
            
                <header class="section-heading">
                    <h3 class="section-title">Nouveaux produits</h3>
                </header> 
            
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
  
                    <div class="col-lg-3 col-md-6 col-sm-6">
                    <a style='text-decoration:none; color:black;'  href="page produit.php?id=<?=  $produit['code_pr']; ?>">
                        <figure class="card card-product-grid">
                            <div class="img-wrap"> 
                                <img class="card-img-top"  src='<?php $photo =explode(" ",$produit['photo_pr']) ; echo $photo[0] ?>'> 
                            </div>
                            <figcaption class="info-wrap border-top">
                                <div class="price-wrap">
                                    <span class="price m-2">$<?= $produit["prix_inistial_pr"] ?></span>
                                </div> <!-- price-wrap.// -->
                                <p class="title mb-2 m-2"><?php if(strlen($produit["description_pr"])>80){
    
    $text = substr($produit["description_pr"], 0, 80) . '...';
    echo $text;
  } ?></p>
                                
                                <a href="apanier.php?id=<?= $produit["code_pr"] ?>" class="btn btn-primary  m-2">Ajouter au panier</a>
                                <a href="#" class="btn btn-light btn-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                  </svg> </a>
                            </figcaption>
                        </figure>
                        </a>
                    </div> <!-- col end.// -->
                       
                    <?php endforeach; ?>

<script>

      function ajouter_au_panier(code,code2) {
    $.ajax('preparation_panier.php?id='+code,{
        success:function(data,status,xhr){
          
         }
    });
     }
 
</script>
      
            </section>
            <!-- ================ SECTION PRODUCTS END.// ================ -->
            
            <!-- ================ SECTION FEATURE ================ -->
            <section class="bg-light padding-y">
            <div class="container">
            
                <header class="section-heading mt-2 mb-5">
                    <h3 class="section-title">Pourquoi nous choisir</h3>
                </header> 
            
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6">	
                        <figure class="itemside align-items-center mb-4">
                           
                            <figcaption class="info">
                                <h6 class="title">Prix raisonnables</h6>
                            </figcaption>
                        </figure> <!-- itemside // -->
                    </div><!-- col // -->
                    <div class="col-lg-4 col-md-6">
                        <figure class="itemside align-items-center  mb-4">
                           
                            <figcaption class="info">
                                <h6 class="title">Meilleure qualité</h6>
                            </figcaption>
                        </figure> <!-- itemside // -->
                    </div><!-- col // -->
                    <div class="col-lg-4 col-md-6">
                        <figure class="itemside align-items-center  mb-4">
                            
                            <figcaption class="info">
                                <h6 class="title">Livraison internationale</h6>
                            </figcaption>
                        </figure> <!-- itemside // -->
                    </div> <!-- col // -->
                    <div class="col-lg-4 col-md-6">	
                        <figure class="itemside align-items-center  mb-4">
                          
                            <figcaption class="info">
                                <h6 class="title">Satisfaction du client</h6>
                            </figcaption>
                        </figure> <!-- itemside // -->
                    </div><!-- col // -->
                    <div class="col-lg-4 col-md-6">
                        <figure class="itemside align-items-center mb-4">
                            
                            <figcaption class="info">
                                <h6 class="title">clients satisfaits</h6>
                            </figcaption>
                        </figure> <!-- itemside // -->
                    </div><!-- col // -->
                    <div class="col-lg-4 col-md-6">
                        <figure class="itemside align-items-center mb-4">
                            
                            <figcaption class="info">
                                <h6 class="title">mille éléments</h6>
                            </figcaption>
                        </figure> <!-- itemside // -->
                    </div> <!-- col // -->
                </div>
            </div> <!-- container end.// -->
            </section>
            <!-- ================ SECTION FEATURE END.// ================ -->
            
            <!-- ================ SECTION BLOG ================ -->
            
            <section class="padding-y" id="blog">
            <div class="container">
            
                <header class="section-heading">
                    <h3 class="section-title">Blog posts</h3>
                </header> 
            
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <article>
                        <a href="#" class="img-wrap">
                          <img class="rounded w-100" src="../img/ccb579f3aeaf19e502a7dc493f64b.jpg" height="160">
                        </a> 
                        <div class="mt-2">
                          <time class="text-muted small d-block mb-1" datetime="2022-02-14 00:00"> <i class="fa fa-calendar-alt"></i> 23.12.2021</time>
                          <a href="#"><h6 class="title">Les cartes graphiques Nvidia</h6></a>
                          <p>sont à la génération RTX 30XX
                            Elle utilise l'architecture Ampère et veut
                              démocratiser l'usage du ray-tracing
                            ainsi que des technologies comme le DLSS</p>
                        </div>
                      </article>
                    </div> <!-- col.// -->
            
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <article>
                        <a href="#" class="img-wrap">
                          <img class="rounded w-100" src="../img/4af8eec9-538e-4b2b-86c5-1754d479152d.jpg" height="160">
                        </a> 
                        <div class="mt-2">
                          <time class="text-muted small d-block mb-1" datetime="2022-02-14 00:00"> <i class="fa fa-calendar-alt"></i> 03.09.2022</time>
                          <a href="#"><h6 class="title">Le jeu n'est pas un jeu d'enfant</h6></a>
                          <p>A Classic Reborn: Design Originated By Vintage Typewriters And Crafted With Ultramodern Features, The Azio Retro Classic Is The Perfect Amalgam Of Past, Present, And Future</p>
                        </div>
                      </article>
                    </div> <!-- col.// -->
            
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <article>
                        <a href="#" class="img-wrap">
                          <img class="rounded w-100" src="../img/logitech-g635-casque-gaming-1200x777.jpg" height="160">
                        </a> 
                        <div class="mt-2">
                          <time class="text-muted small d-block mb-1" datetime="2022-02-14 00:00"> <i class="fa fa-calendar-alt"></i> 13.12.2021</time>
                          <a href="#"><h6 class="title">casque-gaming</h6></a>
                          <p>Si vous êtes dans l’optique de vous offrir 
                            un casque spécialement conçu pour le jeu,
                             que ce soit sur consoles ou sur PC</p>
                        </div>
                      </article>
                    </div> <!-- col.// -->
            
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <article>
                        <a href="#" class="img-wrap">
                          <img class="rounded w-100" src="../img/ccb579f3aeaf19e502a7dc493f64b.jpg" height="160">
                        </a> 
                        <div class="mt-2">
                          <time class="text-muted small d-block mb-1" datetime="2022-02-14 00:00"> <i class="fa fa-calendar-alt"></i> 25.11.2022</time>
                          <a href="#"><h6 class="title">Les cartes graphiques Nvidia</h6></a>
                          <p>sont à la génération RTX 30XX
                            Elle utilise l'architecture Ampère et veut
                              démocratiser l'usage du ray-tracing
                            ainsi que des technologies comme le DLSS...</p>
                        </div>
                      </article>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            
            </div> <!-- container end.// -->
            </section>
            <!-- ================ SECTION BLOG END.// ================ -->
            
            
    <?php 
    include "footer.php"
    ?>
            
            

            
            
            <!-- Bootstrap js -->
            <script src="js/bootstrap.bundle.min.js"></script>
            
            <!-- Custom js -->
            
          
   