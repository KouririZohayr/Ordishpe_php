
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
                             
                            if(empty($_SESSION["nomA"])){
                              
                            echo "<a href='http://localhost/ordishp/se%20conecter.php' class='btn btn-light'> 
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-fill' viewBox='0 0 16 16'>
                                <path d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/>
                              </svg>  <span class='ms-1 d-none d-sm-inline-block'>S'identifier </span></a>";
                            }else if(!empty($_SESSION["nom"])){
                              echo   '<select style="border: none;outline:none;background:#F8F9FA ;padding:8px ;" name="" onchange="window.location.href=this.options [this.selectedIndex].value">
                                <option  value="">statistics</option>
                                <option value="http://localhost/ordishp/prodect.php">prodects</option>
                                <option value="http://localhost/ordishp/client.php">clients</option>
                                 <option value="http://localhost/ordishp/commend.php">Comands</option>
                              
                                 <option value="http://localhost/ordishp/pagadmin.php" >inscription</option>
                                 <option value="http://localhost/ordishp/admins.php" >Admins</option>
                                <option value="http://localhost/ordishp/deconnecter.php">econexion</option>
                            </select>';
                                
                            }
                            else {
                                echo "<a href='se conecter.html' class='btn btn-light'> 
                                 <span class='ms-1 d-none d-sm-inline-block'>".$_SESSION["nom"]." </span></a>";
                            }
                            ?>
                            <!-- <a href="se conecter.html" class="btn btn-light"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                  </svg>  <span class="ms-1 d-none d-sm-inline-block">S'identifier </span> 
                            </a> -->
                            <a href="#" class="btn btn-light"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                  </svg>  <span class="ms-1 d-none d-sm-inline-block">Favoris</span>   
                            </a>
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
        <script>
           var cars = document.getElementById("cars")

cars.addEventListener("change", function() {
  if (cars.value == "addUser") {
    open("/add-user.php", "_self")
  }
})
        </script>