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
    <header class="section-header c">	
      <?php
       include ("header.php");
      require 'DBClass.php';
       $panier = new panier()
       ?>

        <nav class="navbar navbar-light bg-white border-top navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler border collapsed mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="navbar-collapse collapse" id="navbar_main" >
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link ps-0" href="index.php">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-danger" href="Nos_ordinateur.php">Nos ordinateur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" >Nos coffrents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nos fournisseurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quisom.php">Qis sommes-nous</a>
                        </li>
                        
                    </ul>
                </div> <!-- collapse end.// -->
            </div> <!-- container end.// -->
        </nav> <!-- navbar end.// -->
    </header> <!-- section-header end.// -->