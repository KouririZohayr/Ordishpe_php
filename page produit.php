<?php
require 'headerglobale.php';
?>

    <section class="padding-y p mt-5 mb-5">
      <div class="container">
      <?php
      include("connexion.php");
      $sql='select * from produit where code_pr="'.$_GET["id"]. '"';
  $reponse = $con->query($sql);
  $donnees = $reponse->fetch();
      ?>
    <div class="row">
      <aside class="col-lg-6">
        
        <article class="gallery"> 
          <div class="img-big-wrap ">
             <a data-fslightbox="mygalley" data-type="image" href="images/items/detail1/big.jpg"> 
                <img  class="me-3" style="width : auto;height : 280px; " src="<?php $photo =explode(" ",$donnees['photo_pr']) ; echo $photo[1] ?>" id="grandimg"> 
             </a>
          </div> <!-- img-big-wrap.// -->
       
          <div class="thumbs-wrap mt-3 mb-3 ">
            <? $photo =explode(" ",$donnees['photo_pr']) ; ?>
            <?PHP foreach($photo as $pharticl):  ?>
              <img class="me-3" style="width : auto;height : 90px; "  src="<?= $pharticl ?>" onmouseenter="changePhoto(this)"> 
              <?php endforeach; ?>
             
          </div> <!-- thumbs-wrap.// -->
        </article> <!-- gallery-wrap .end// -->
      </aside>
      <main class="col-lg-6">
        <article class="ps-lg-3">
          <h4 class="title text-dark"><?php echo $donnees["description_pr"]; ?><!-- Lenovo IdeaPad Gaming 3 15ACH6 Ordinateur Portable 15.6'' FHD Noir (AMD Ryzen 5 5600H, RAM 16Go, SSD 512Go,
             NVIDIA GeForce RTX 3050Ti, Windows 10) - Clavier AZERTY rétroéclairé --> </h4>
          <div class="rating-wrap my-3">
            <ul class="rating-stars">
              <li style="width:80%" class="stars-active"> <img src="../img/stars-active.svg" alt=""> </li>

            </ul>
            <b class="label-rating text-warning"> 4.5</b>
            <i class="dot"></i>
            <span class="label-rating text-muted"> <i class="fa fa-shopping-basket"></i> 154 orders </span>
            <i class="dot"></i>
            <span class="label-rating text-success">En stock <?=  $donnees["qstock_pr"]; ?>P</span>
          </div> <!-- rating-wrap.// -->
          
          <div class="mb-3"> 
            <var class="price h5"><?= $donnees["prix_inistial_pr"]; ?>$</var> 

          </div> 
      
          <p>Nous ne savons pas quand cet article sera de nouveau approvisionné ni s'il le sera.</p>
      
          <dl class="row">
            <dt class="col-3">Marque:</dt>
            <dd class="col-9"><?= $donnees["marque_pr"] ?></dd>
      
            <dt class="col-3">séries</dt>
            <dd class="col-9"><?= $donnees["serie_pr"]; ?></dd>
      
            <dt class="col-3">Taille de l'écran</dt>
            <dd class="col-9"><?=$donnees["ecran_pr"]; ?> </dd>
      
            <dt class="col-3">Couleur</dt>
            <dd class="col-9"><?= $donnees["colour_pr"]?></dd>

            <dt class="col-3">Modèl CPU</dt>
            <dd class="col-9"><?= $donnees["prece_pr"]?></dd>

            <dt class="col-3">Taille de la mémoire RAM installée</dt>
            <dd class="col-9"><?= $donnees["ram_pr"]; ?> </dd>
            
            <dt class="col-3">Système d'exploitation</dt>
            <dd class="col-9"><?= $donnees["ios_pr"]; ?></dd>
          </dl>
      
          <hr>
      
          <div class="row mb-4">
           
            <div class="col-md-4 col-6 mb-3">
              <label class="form-label d-block">Quantité MAX <?= $donnees["qstock_pr"]; ?></label>
              <div class="input-group input-spinner">
                <button class="btn btn-icon btn-light border" type="button"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#999" viewBox="0 0 24 24">
                      <path d="M19 13H5v-2h14v2z"></path>
                    </svg>
                </button>
                <input class="form-control text-center" placeholder="" type="number"  min="1" max="<?= $donnees["qstock_pr"]; ?>">
                <button class="btn btn-icon btn-light border   " type="button"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#999" viewBox="0 0 24 24">
                      <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                    </svg>
                </button>
              </div> <!-- input-group.// -->
            </div> <!-- col.// -->
          </div> <!-- row.// -->
      
          <a href="#" type="submit" name="btn" class="btn  btn-warning"> Acheter maintenant </a>
          
          <?php 
            if(isset($_POST["btn"])){
                $_SESSION["prixtotal"]=$_POST["prixtt"];
               
               
            }
            
            ?>
          <a href="apanier.php?id=<?= $donnees["code_pr"] ?>" class="btn  btn-primary"> <i class="me-1 fa fa-shopping-basket"></i> Ajouter au panier </a>
          <a href="#" class="btn  btn-danger"> <i class="me-1 fa fa-heart"></i>  </a>
        
        </article> <!-- product-info-aside .// -->
      </main> <!-- col.// -->
      </div> <!-- row.// -->
      
      </div> <!-- container .//  -->
      </section>

                      
        <?php 
    include "footer.php";
    ?>