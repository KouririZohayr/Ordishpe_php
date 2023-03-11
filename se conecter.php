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
    <title>Document</title>
    <?php
     session_start ();
    ?>
</head>

<body>
  <!-- 
 header
   -->
   
   <header class="section-header">	
    <section class="header-main">
        <div class="container mt-4">
            <div class="row gy-3 align-items-center">
                <div class="col-lg-2 col-sm-4 col-4">
                    <a href="http://bootstrap-ecommerce.com" class="navbar-brand">
                        <!-- <img class="logo" height="40" src="images/logo.svg">
                         -->
                         <h1 class="logo">OrdiShop</h1>
                    </a> <!-- brand end.// -->
                </div>
                <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                    <div class="float-end">
                        
                        <a href="#" class="btn btn-light"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                              </svg>  <span class="ms-1 d-none d-sm-inline-block">Favoris</span>   
                        </a>
                        <a data-bs-toggle="offcanvas" href="#offcanvas_cart" class="btn btn-light"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                              </svg> <span class="ms-1">cart </span> 
                        </a>
                    </div>
                </div> <!-- col end.// -->
                <div class="col-lg-5 col-md-12 col-12">
                    <form action="#" class="">
                      <div class="input-group">
                        <input type="search" class="form-control" style="width:55%" placeholder="Search">
                        <button class="btn btn-primary">
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

    <nav class="navbar navbar-light bg-white border-top navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="navbar-collapse collapse" id="navbar_main" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link ps-0" href="index1.html"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Nos ordinateur.html">Nos ordinateur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nos coffrents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nos fournisseurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Qis sommes-nous</a>
                    </li>
                    
                </ul>
            </div> <!-- collapse end.// -->
        </div> <!-- container end.// -->
    </nav> <!-- navbar end.// -->
</header> <!-- section-header end.// -->
<!--end header -->
<!-- staRT CONECTER -->
<section class="h-100 gradient-form " style="background-color: #eee;">
    <div class="container py-1 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100 mt-5 mb-5">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <h1 class="logo text-primary">OrdiShop</h1>
                  </div>
                  <form action="" method="POST">
                    <p>connecter-vous</p>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example11" name="mail" class="form-control"
                        placeholder="E-mail ou Telephone" />
                      <label class="form-label"  for="form2Example11">E-mail</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example22" name="pass" class="form-control" placeholder="************" />
                      <label class="form-label"  for="form2Example22">Mot de passe</label>
                    </div>
                    





                    <div class="text-center pt-1 mb-2 pb-1">
                      <button class="btn btn-primary  me-4 mb-3"  name="btn" type="submit">Se connecter
                       </button>
                       <?php
                       
                    include("connexion.php"); 
                    if(isset($_POST["btn"])){
                        $sql="SELECT * FROM client WHERE email_c='".$_POST['mail']."' AND pass_c='".$_POST['pass']."'";
                        $reponse = $con->query($sql);                                               
                        $statment=$reponse->fetch();
                        $sql="SELECT * FROM aadmin WHERE email_A='".$_POST['mail']."' AND pass_A='".$_POST['pass']."'";
                        $reponse = $con->query($sql);                                               
                        $admin=$reponse->fetch();
                      
                        /* ($_POST["mail"] == $statment["email_c"]) && ( $_POST["pass"] == $statment["pass_c"]) */
                        if( $statment) {  
                          echo "se connecter";
                          session_start();
                          $_SESSION["nom"]=$statment["nom_c"];
                          $_SESSION["idclient"]=$statment["email_c"];
                          echo "<script>window.location.href='Nos_ordinateur.php';</script>";
                        }
                        else if($admin){
                          
                          echo 'se connecter page admin';
                          $_SESSION["nomA"]=$admin["nom_A"];
                          $_SESSION["idclientA"]=$admin["email_A"];
                          echo "<script>window.location.href='Nos_ordinateur.php';</script>";
                        }
                        else {
                            echo "<h5>email ou mot de passe incorrect</5><br> ";
                            unset($_SESSION["nom"]);
                        }
                        $reponse->closeCursor();};
                    ;
                    
                    ?>

                      <a class="text-muted" href="#!">Mot De Passe oublie ?</a>
                    </div>
  
                    <div class="align-items-center justify-content-center py-2">
                        <p class="text-center mb-0 me-2">connectez-vous via</p>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <a href="#" class="me-4"><i class="fa-brands fa-facebook text-white bg-info p-3 rounded"></i></a>
                            <a href="#"><i class="fa-brands fa-google text-white p-3 bg-danger rounded"></i></a>
                        </div>
                      </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center bg-info">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">inscrivez-vous</h4>
                  <p class="small mb-0">creer votre compte client ordi shop en quelques clics !
                      vous pouvez vous inscrire soit en utilisant votre adresse e-mail,soit via votre
                      compte google ou facebook.
                  </p>
                  <div class="d-flex align-items-center justify-content-center py-4 mb-5">
                    <p class="mb-0 me-2">Vous avez deja  un compte ?
                      <button class="btn rounded-5 btn-block fa-lg btn-primary ms-4 mt-3 mb-3" type="submit"><a class="text-white" href="creerCompt.php" style="text-decoration: none;">Creer Compte</a>
                  </div>
                  </button>
                  <div class="align-items-center justify-content-center py-2">
                    <p class="text-center mb-0 me-2">creer un compte via</p>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <a href="#" class="me-4"><i class="fa-brands fa-facebook text-info bg-white p-3 rounded"></i></a>
                        <a href="#"><i class="fa-brands fa-google text-white p-3 bg-danger rounded"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  END CONNECTER -->
  <!--START footer -->
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

  <!-- end footer -->
</body>
</html>