<?php
 $host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ordishop";
 $con = new PDO("mysql:host=$host;dbname=$dbname", $username, 
 $password);
            if($_SERVER["REQUEST_METHOD"] == "POST") {
              
                  $prenom=$_POST["prenom"];
                  $nom=$_POST["nom"];
                  $sexe=$_POST["sexe"];
                  $tel=$_POST["telephone"];
                  $adr=$_POST["adr"];
                  
                  $mail=$_POST["email"];
                  $pass=$_POST["pass"];
              //  echo $pass;
              //  echo $mail;
              //  echo $tel;
              //  echo $nom;
             
                  $sql = 'INSERT INTO aadmin VALUES(:id_A,:email_A,:prenom_A,:nom_A,:sexe_A,:tel_A,:adr_A,:pass_A )';
                  
                  $statement = $con->prepare($sql);
                  
                  if($statement->execute([':id_A'=>null,':email_A'=>'hansaoui',':prenom_A'=>$_POST['prenom'], ':nom_A'=>$nom,':sexe_A'=>$sexe,':tel_A'=>$tel,':adr_A'=>$adr,':pass_A'=>$pass])) 
                  {
                  $message = 'Admin ajouter';
                  
                  }

                  else
                  {
                  $message="err";
                  }
                  echo $message;
                  }
?>        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/inscription.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>creer un compte</title>
</head>
<body>
   <!-- 
 header
   -->

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-1 h-100 ">
          <div class="row d-flex justify-content-center align-items-center h-100 mt-5 mb-5 ">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                    <div class="col-lg-7">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-start">
                            <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                              style="width: 185px;" alt="logo"> -->
                            <h5 class="mt-1 mb-3 pb-1">creez votre  compte utilisateur ordishop.ma</h5>
                          </div>
          <!-- from ///////////////////////////////////////////////////////-->
                        <form  action="" method="POST">
                           
                            <div class="form-outline mb-4">
                                <input type="text" id="prenom" class="form-control"
                                  placeholder="Prenom" name="prenom" required />
                              </div>

                              <div class="form-outline mb-4">
                                <input type="text"  id="nom" required class="form-control"
                                  placeholder="Nom"  name="nom" required />
                              </div>

                              <div class="form-outline mb-4">
                                <label  class="radio-inline me-4"> <input type="radio" id="form2Example11" name="sexe" value="homme" />Homme</label>
                                  <label  class="radio-inline ms-4"><input type="radio" id="form2Example11" name="sexe" value="famme">Famme</label>
                              </div>

                            <div class="form-outline mb-4">
                              <input type="tel" id="tel" class="form-control"
                                placeholder="Telephone" name="telephone" required />
                              </div>

                            <div class="form-outline mb-4">
                            <input type="text" id="adr" class="form-control"placeholder="adresse" name="adr"/> 
                              </div>

                    

                            <div class="form-outline mb-4" >
                              <input type="mail" id="email" class="form-control"
                                placeholder="Email" name="email" />
                            </div>
                           
                            <div class="form-outline mb-4" >
                              <input type="password" id="pass1" name="pass" class="form-control"  placeholder="Mot de passe au moins 8 caracteres" />
                            </div>

                         
                            <div class="text-start pt-1 mb-0 ">
                              <input class="btn rounded-5 btn-block fa-lg btn-info mb-3" type="submit" id="btn"  name="btn" value="creer mon compte">
                             
                            </div>

                          </form>
                  <script>
                    
                  </script>
          <!-- from //////////////////////////////////////////////////////////////// -->
                        </div>








                      </div>
                      <div class="text-end  mb-1 px-3 ">
                        <a href="se conecter.html" style="font-size: large ; text-decoration: none;color: black;"><i class="fa-solid fa-arrow-left-long pe-2 " ></i>retour</a>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--  EEND NEW COMPTE -->
      <!-- start footer -->
      <footer class="section-footer bg-primary text-white  pt-5 pb-5">
        <div class="container">
          <section class="footer-main padding-y">
            <div class="row">
              <aside class="col-12 col-sm-12 col-lg-3">
                <article class="me-lg-4">
                  <h1 class="logo-footer">OrdiShop</h1>
                  <!-- <img src="images/logo.png" class="logo-footer"> -->
                  <p class="mt-3"> © 2021- 2022 , <br> Tous droits réservés. </p>
                </article>
              </aside>
              <aside class="col-6 col-sm-4 col-lg-2">
                <h6 class="title">Magasin</h6>
                <ul class="list-menu mb-4">
                  <li> <a href="#">À propos de nous</a></li>
                  <li> <a href="#">Trouver un magasin</a></li>
                  <li> <a href="#">Catégories</a></li>
                  <li> <a href="#">Blogs</a></li>
                </ul>
              </aside>
              <aside class="col-6 col-sm-4 col-lg-2">
                <h6 class="title">Information</h6>
                <ul class="list-menu mb-4">
                  <li> <a href="#">Centre d'aide</a></li>
                  <li> <a href="#">Remboursement d'argent</a></li>
                  <li> <a href="#">Informations d'expédition</a></li>
                  <li> <a href="#">Remboursements</a></li>
                </ul>
              </aside>
              <aside class="col-6 col-sm-4  col-lg-2">
                <h6 class="title">Support</h6>
                <ul class="list-menu mb-4">
                  <li> <a href="#"> Centre d'aide </a></li>
                  <li> <a href="#"> Documents </a></li>
                  <li> <a href="#"> Restauration de compte </a></li>
                  <li> <a href="#"> Mes commandes </a></li>
                </ul>
              </aside>
              <aside class="col-12 col-sm-12 col-lg-3">
                <h6 class="title">lettre d'information</h6>
                <p>Restez en contact avec les dernières mises à jour sur nos produits et offres</p>
        
                
                  
                </form>
              </aside>
            </div> <!-- row.// -->
          </section>  <!-- footer-top.// -->
  
        
          <section  class="footer-bottom d-flex justify-content-lg-between border-top" >
            <nav class="dropup">
                <button class="dropdown-toggle btn d-flex align-items-center py-0" type="button" data-bs-toggle="dropdown">
                  <img src="images/flags/flag-usa.png" class="me-2" height="20"> 
                  <span>Francais</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Arabic</a></li>
                </ul>
            </nav>
            
          </section>
        </div> <!-- container end.// -->
        </footer>
        <!-- footer end -->
  
</body>
</html>