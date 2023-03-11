<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <div class="container">
        <div class="row mt-5">
            <div class="col-8"> <input class="form-control" type="text" placeholder="Tous les champs sont obligatoires" ></div>
        </div>
        <div class="row mt-4">
            <div class="col-4"> 
                <select name="sexe" class="form-select" required id="">
                    <option value="Civilité"> Civilité</option>
                    <option value="homme">homme</option>
                    <option value="famme">famme</option>
                </select>
            </div>
        
            <div class="col-4"> 
                <input type="text" name="nom" class="form-control" placeholder="Votre nom" required>
            </div>
       </div>
       <!-- end row -->
       <div class="row mt-4">
        <div class="col-4">
            <input type="text" name="prenom" class="form-control" placeholder="Votre prénom" required>
        </div>
        <div class="col-4">
            <input type="date" name="datens" class="form-control" placeholder="Naissance ex :19/04/1996" required>
        </div>
       </div>
       <!-- end row -->

       <div class="row mt-4">
        <div class="col-8">
            <input type="text" name="adr" class="form-control" placeholder="Votre adresse" required>
        </div>
       
       </div>


       <!-- end row -->
       <div class="row mt-4">
        <div class="col-4">
            <input type="email" name="email" class="form-control" placeholder="Votre mail" required>
        </div>
        <div class="col-4">
            <input type="email" name="vemail" class="form-control" placeholder="Confirmer le mail" required>
        </div>
       </div>
       <!-- end row -->
       <div class="row mt-4">
        <div class="col-4">
            <input type="password" name="pass" class="form-control" placeholder="Votre mot de passz : zntre 5 et 10 cractères" required>
        </div>
        <div class="col-4">
            <input type="password" name="vpass" class="form-control" placeholder="Confirmer le mot de pass" required>
        </div>
       </div>
       <!-- end row -->
        <div class="row mt-5">
        <div class="col-8">
            <input type="submit" name="btn" class="btn btn-primary w-50 " value="valider" >
        </div>
       
       </div>

    </div>

    </form>
    <?php

    if(isset($_POST["btn"])){
        include("connexion.php");
        $mailv = $_POST["vemail"];
        $mail = $_POST["email"];
        if($mailv == $mail){
            
            if($_POST["pass"]==$_POST["vpass"]){
                
    
                include("connexion.php");
            $sql = 'INSERT INTO apprenant VALUES(:id,:prenom,:nom,:email,:datens,:sexe,:adresse,:mot_pass,:type_a)';
        $statement = $con->prepare($sql);
        if ($statement->execute([':id' =>null,':prenom' => $_POST["prenom"] ,':nom' =>$_POST["nom"],':email' =>$_POST["email"]
        ,':datens' =>$_POST["datens"],':sexe' =>$_POST["sexe"],':adresse' =>$_POST["adr"],':mot_pass' =>$_POST["pass"],':type_a' =>null])) 
        {
        $message = 'votre compte créée avec succès';
        header("se conecter.php"); 
        }
        else
        {
        $message="err";
        } }else{
                echo "confermer voter password"; 
        }
    
      

        }else{
            echo "confermer voter mot email";
        }
    }


    

    ?>
    
</body>
</html>