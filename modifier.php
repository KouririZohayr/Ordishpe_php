<?php
 $host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ordishop";
 $con = new PDO("mysql:host=$host;dbname=$dbname", $username, 
 $password);
 $id=$_GET['id'] ?? null;
//  echo $id ;
 $statement = $con->prepare('SELECT *FROM produit WHERE code_pr=:code_pr');

 $statement->bindValue(':code_pr', $id);
 $statement->execute();
 $products=$statement->fetch();
$mq=$products['marque_pr'];

$ser=$products['serie_pr'];
$t=$products['type_pr'];

$pr=$products['prece_pr'];
$ram=$products['ram_pr'];

$rom=$products['rom_pr'];

$tpdisk=$products['tpdisque_pr'];
$cgrph=$products['cgraphique_pr'];
$prix=$products['prix_inistial_pr'];
$pro=$products['propmotion_pr'];
$ios=$products['ios_pr'];
$ecran=$products['ecran_pr'];
$color=$products['colour_pr'];
$tactil=$products['tactil_pr'];
$marque=$products['qstock_pr'];
$descripton=$products['description_pr'];
if(isset($_POST["btn"]))
{
    if(!is_dir('imagek'))
        mkdir('imagek');
     
      
$image= $_FILES['screen'] ?? null;

$imagePath=$products['photo_pr'];

if($image && $image['tmp_name']){
    $imagePath='imagek/'.$image['name'];
     move_uploaded_file($image['tmp_name'],$imagePath);
      }

$date=date('Y-m-d H:i:s');
//Ouvrir une nouvelle connexion au serveur MySQL

//préparer la requête d'insertion SQL
$mrq=$_POST["marque"];

$sr=$_POST["serie"];
$tp=$_POST["type"];
$prc=$_POST["processeur"];
$ram=$_POST["ram"];
$rom=$_POST["rom"];
$grf=$_POST["graphique"] ;
$pr=$_POST["prix"];
echo $pr ;
$prm=$_POST["promo"];
$os=$_POST["ios"];
$tcr=$_POST["tecron"];
$clr=$_POST["colour"];
$tct=$_POST["tactile"];
$stc=$_POST["qstock"];
$ds=$_POST["descrip"];
$stc=$_POST["qstock"];
$sql ="UPDATE produit SET marque_pr='$mrq',serie_pr='$sr'  ,type_pr='$tp'

                ,prece_pr='$prc' ,ram_pr='$ram' ,rom_pr='$rom' ,tpdisque_pr='$dis' 

                ,cgraphique_pr='$grf' ,prix_inistial_pr=$pr,propmotion_pr='$prm',

                ios_pr='$os',ecran_pr='$tcr' ,colour_pr='$clr',tactil_pr='$tct',
                qstock_pr='$stc',photo_pr='$imagePath' ,description_pr='$ds' where code_pr='$id' ";
if($con->query($sql)==TRUE){
    echo "Update success";
}
else{
echo 'Error Updating ';}
// function verifier_stock($Nstock){
// if($Nstock>$products['qstock']){
//     echo '<div class="alert alert-danger">';
//     echo 'Attention Votre Stock Complet';
//     echo '</div>';
// }
// }


header('location: prodect.php');
}
?>     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
    <style>
        .updat-imag{
            height: 200px;
            width: auto;
        }
    </style>
        
    
    
</head>
<body>
    <p>
        <a  href="ajouter produit.php"class="btn btn-success ">Back</a>
    </p>
    <aside class="col-lg-6">
         <!-- ============== COMPONENT POSTING ============== --> 
         <div class="card mb-4"> 
             <article class="card-body">
                  <!-- <h4 class="mb-4">Submit product</h4>  -->
                  <p> Update Product <b><?php echo $products['marque_pr']?></b></p>
    <form action="" method="POST" enctype="multipart/form-data">
            <?php if ($products['photo_pr']): ?>
                <img class="updat-imag" src="<?php echo $products['photo_pr'] ?>" alt="">
            <?php endif;?>
        <div class="row mb-4"> 
            <label class="col-3 col-form-label">photo</label>
            <div class="col-9"> 
                <input type="file"  name="screen">
             </div>
         <!-- col end.// -->
        </div>
        <div class="row mb-4"> 

        <label class="col-3 col-form-label">Marque</label> 
                            <div class="col-9"> 
                                <select id='mrque' class="form-select" value="<?php echo $mq ?>"name="marque" >
                                    <option value="HP">HP</option> 
                                    <option value="Appel">Appel</option> 
                                    <option value="ASUS">ASUS</option>
                                    <option value="acer">acer</option>
                                    <option value="lenovo">lenovo</option>
                                    <option value="Toshiba">Toshiba</option>
                                    <option value="MSI">MSI</option>

                                </select>
                            <!-- <label id='ajt' class='btn btn-primary'>+<label> -->

                            </div> 
            </div>

        <div class="row mb-4">
            <label class="col-3 col-form-label">Serie</label>
                <div class="col-9"> 
                    <input type="text" class="form-control" value="<?php echo $ser?>"name="serie" placeholder="serie">
                </div> 
                 <!-- col end.// -->
        </div>

        <div class="row mb-4">
            <label class="col-3 col-form-label">Type Ordinateur</label> 
                <div class="col-9"> 
                    <select class="form-select"value="<?php echo $t ?>" name="type">
                        <option value="otdinateur portable">Ordinateur portable</option> 
                        <option value="otdinateur bureau">Ordinateur bureau</option> 
                        <option value="otdinateur mini">Ordinateur mini </option>
                        </select>
                </div> 
        </div>

        <div class="row mb-4">
                         <label class="col-3 col-form-label">Type de Processeur</label> 
                            <div class="col-9"> 
                                <select class="form-select"  value="<?php echo $pr ?>" name="processeur" >
                                    <option value="AMD Athlon">AMD Athlon</option> 
                                    <option value="AMD Ryzen 5">AMD Ryzen</option> 
                                    <option value="AMD Ryzen 7">AMD Ryzen 7</option>
                                    <option value="intel Celeron">intel Celeron</option>
                                    <option value="intel Atom">intel Atom</option>
                                    <option value="intel Core i5">intel Core i5</option>
                                    <option value="intel Core i7">intel Core i7</option>
                                    <option value="intel Core i9">intel Core i9</option>
                                    <option value="intel Pentium">intel Pentium</option>
                                    <option value="intel Xeron">intel Xeron</option>
                                </select>
                            </div> 
                         <!-- col end.// -->
                         </div>
                       
                         <div class="row mb-4">
                         <label class="col-3 col-form-label">Capacité de RAM</label> 
                            <div class="col-9"> 
                                <select class="form-select" value="<?php echo $tpdisk ?>"  name="ram" >
                                    <option value="2 GO">2 GO</option> 
                                    <option value="4 GO">4 GO</option> 
                                    <option value="8 GO">8 GO</option> 
                                    <option value="16 GO">16 GO</option> 
                                    <option value="32 GO">32 GO</option>
                                </select>
                            </div> 
                         <!-- col end.// -->
                         </div>

        <div class="row mb-4">
            <label class="col-3 col-form-label">ROM</label>
                <div class="col-9"> 
                    <input type="number" value="<?php echo $rom ?>"class="form-control" name="rom" placeholder="ROM">
                </div> 
      <!-- col end.// -->
        </div>

         <div class="row mb-4">
            <label class="col-3 col-form-label">type de disque dur</label> 
                <div class="col-9"> 
                    <select class="form-select"value="<?php echo $tpdisk ?>" name="typedisk">
                        
                        <option value="SSD" >SSD</option> 
                        <option value="HDD">HDD</option> 
                        <option value="SSHD">SSHD </option>
                        </select>
                </div> 
         </div>
                       
         <div class="row mb-4">
            <label class="col-3 col-form-label">Carte Graphique</label>
                <div class="col-9"> 
                    <input type="text" class="form-control"  name="graphique" value="<?php echo $cgrph ?>" placeholder="Carte Graphique"> 
                </div>
            <!-- col end.// -->
         </div> 

        <div class="row mb-4">
            <label class="col-3 col-form-label">Prix Initiale</label>
                <div class="col-9"> 
                    <input type="number" step="any" value="<?php echo $prix ?>" name="prix" class="form-control" placeholder=""> 
                </div>
            <!-- col end.// -->
        </div> 

        <div class="row mb-4">
            <label class="col-3 col-form-label">Promotion</label>
                <div class="col-9"> 
                    <input type="number" step="any" name="promo" value="<?php echo $pro ?>" class="form-control" placeholder=""> 
                </div>

             <!-- col end.// -->
        </div>
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Systém D'exploitation</label>
                               <div class="col-9"> 
                                   <input type="text" name="ios" value="<?php echo $ios ?>" class="form-control" placeholder="" > 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Taille D'écran</label>
                               <div class="col-9"> 
                                   <input type="text" value="<?php echo $ecran ?>" name="tecron" class="form-control" > 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Colour</label>
                               <div class="col-9"> 
                                   <input type="text" value="<?php echo $color ?>"  name="colour" required class="form-control" placeholder="colour"> 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Tactile</label>
                               <div class="col-9"> 
                                   <input type="text" value="<?php echo $tactil ?>" name="tactile" class="form-control" placeholder="tactile"> 
                                </div>

                                </div>
                                <div class="row mb-4">
                              <label class="col-3 col-form-label">Quantite de stock</label>
                               <div class="col-9"> 
                                   <input type="text" value="<?php echo $marque ?>"  name="qstock" required class="form-control" placeholder="Quantite de stock"> 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <!-- row end.// --> 
                    

                                         <!-- row end.// --> 
                                         <div class="row mb-4"> 
                                             <label class="col-3 col-form-label">Description</label>
                                              <div class="col-9"> 
                                                  <textarea class="form-control"  name="descrip" placeholder="Description"><?php echo $descripton ?></textarea> 
                                                </div>

                                                 <!-- col end.// -->
                                                 </div>
                                                  <!-- row end.// --> 

                                                                 <!-- row end.// -->
                                                               
                                                                                         <!-- row end.// --> 
                        <div class="row mb-2">
                            <div class="col-9 offset-3"> 
                                <button type="submet" name="btn" class="btn btn-primary">Save</button> 
                                <button type="reset" name="btn-anuler" class="btn btn-outline-danger">Annuler</button> 
                            </div> 
       
                                
                          
                   <!-- col end.// -->
                </div> 
            <!-- row end.// -->
            </form> 
        <!-- form end.// -->
    </article>
     <!-- card-body end .// -->
</div>
  <!-- card end.// --> 
 <!-- ============== COMPONENT POSTING END.// ============== --> 
</aside>

</body>
</html>