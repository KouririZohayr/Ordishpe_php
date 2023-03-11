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
                        <a href="se conecter.html" class="btn btn-light"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                              </svg>  <span class="ms-1 d-none d-sm-inline-block ">S'identifier </span> 
                        </a>
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
                        <a class="nav-link" href="#">Blog</a>
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
<!-- START NEW COMPTE -->
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

                            <div class="form-outline mb-4">
                            <select class="form-select" aria-label="Default select example" name="type">
                                  <option value="Partuculier" >Partuculier</option>
                                  <option value="Entreprise">Entreprise</option>
                            </select>
                            </div>

                            <div class="form-outline mb-4" >
                              <input type="mail" id="email" class="form-control"
                                placeholder="Email" name="email" />
                            </div>
                           
                            <div class="form-outline mb-4" >
                              <input type="password" id="pass1" name="pass" class="form-control"  placeholder="Mot de passe au moins 8 caracteres" />
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="pass2" class="form-control" required placeholder="Confirmer le Mot de passe"  />
                              </div>

                            <div class="text-start pt-1 mb-0 ">
                              <input class="btn rounded-5 btn-block fa-lg btn-info mb-3" onclick="validation()" type="button" id="btn"  name="btn" value="creer mon compte">
                             
                            </div>

                          </form>
                  <script>
                    
                  </script>
          <!-- from //////////////////////////////////////////////////////////////// -->
                        </div>
<script>
let mail=document.getElementById("email");
        let pass=document.getElementById("pass1");
        let vpass=document.getElementById("pass2");
        let nom=document.getElementById("nom");
        let btn=document.getElementById("btn");
        let prenom=document.getElementById("prenom");
        let tel=document.getElementById("tel");
        let adr=document.getElementById("adr");
        pass.addEventListener('keyup',verpass);
        vpass.addEventListener('keyup',verpass);
        let passChek=false;
      function verpass(){
        let regex=/.{8,}/;
        if((pass.value == vpass.value)&& pass.value.match(regex)){
            pass.style.outline="green";
      pass.style.borderColor = "green";
     vpass.style.borderColor = "green";
        }else{
            pass.style.outline="red";
      pass.style.borderColor = "red";
     vpass.style.borderColor = "red";
        }}
  function verfiier(x,nom){
            x.style.borderColor = "red";
            x.focus()
            x.setAttribute("placeholder",'veuillez saisir votre '+nom);
        }

        let regex=/.{8,}/;
       function validation(){
           let valid=false;

        if(prenom.value==""){
          verfiier(prenom,"prenom")
        }else{
          prenom.style.outline="";
          prenom.style.borderColor="";
          if(nom.value==""){
            verfiier(nom,"nom");
        }else{
          nom.style.outline="";
          nom.style.borderColor="";
        if(tel.value==""){
          verfiier(tel,"Téléphone");
        }else{
          tel.style.outline="";
          tel.style.borderColor="";
          if(adr.value==""){
            verfiier(adr ,"Adresse");
          }else{
            adr.style.outline="";
          adr.style.borderColor="";
          if(mail.value != ""){
            mail.style.outline="";
          mail.style.borderColor="";
    if((pass.value == vpass.value)&& (pass.value.match(regex))){
      pass.style.outline="";
      pass.style.borderColor = "";
     vpass.style.borderColor = "";
     btn.removeAttribute("type");
     btn.setAttribute("type","submit"); 
     alert (btn.getAttribute("type"))
    }else{
     verfiier(pass,"Mot de passe au moins 8 caracteres")
     pass.style.borderColor = "red";
     vpass.style.borderColor = "red";
     pass.value=""
     vpass.value=""
     pass.focus()}
 }else{
  verfiier(mail ,"Email");    
 }
 } } } }}     
</script>

<?php         
         
         $host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ordishop";
 $con = new PDO("mysql:host=$host;dbname=$dbname", $username, 
 $password);
            if($_SERVER["REQUEST_METHOD"] == "POST") {
              
                  $prenom=$_POST['prenom'];
                  $nom=$_POST['nom'];
                  $sexe=$_POST['sexe'];
                  $tel=$_POST['telephone'];
                  $adr=$_POST["adr"];
                  $type=$_POST['type'];
                  $mail=$_POST["email"];
                  $pass=$_POST["pass"];
               
             
                  $sql = 'INSERT INTO client VALUES(:email_c,:prenom_c,:nom_c,:sexe_c,:tel_c,:type_c,:adr_c,:pass_c )';
                  
                  $statement = $con->prepare($sql);
                  
                  if ($statement->execute([':email_c'=>$mail,':prenom_c'=>$prenom, ':nom_c'=>$nom ,':sexe_c'=>$sexe,':tel_c'=>$tel, ':type_c'=>$type,':adr_c'=>$adr,':pass_c'=>$pass]))
                  
                  {
                  $message = 'Donnée créée avec succès';
                  
                  }

                  else
                  {
                  $message="err";
                  }
                  echo $message;
                  }
?>        
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