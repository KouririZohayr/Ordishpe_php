<?php
 $host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ordishop";
 $con = new PDO("mysql:host=$host;dbname=$dbname", $username, 
 $password);
if($_SERVER["REQUEST_METHOD"] == "POST")
{//identifiants mysql
    if(!is_dir('imagek')){
        mkdir('imagek');
      }
      
      $image= $_FILES['screen'] ?? null;
      $imagePath='';
      if($image && $image['tmp_name']){
        $imagePath='imagek/'.$image['name'];
        
    //    echo '<pre>';
    //    var_dump($imagePath);
    //    echo '</pre>';          
        move_uploaded_file($image['tmp_name'],$imagePath);
      }
      


$date=date('Y-m-d ');
//Ouvrir une nouvelle connexion au serveur MySQL

//préparer la requête d'insertion SQL
$sql = 'INSERT INTO produit VALUES(:code_pr ,:marque_pr, :serie_pr , :type_pr ,:prece_pr , :ram_pr ,:rom_pr ,:tpdisque_pr ,:cgraphique_pr ,:prix_inistial_pr
,:propmotion_pr,:ios_pr, :ecran_pr ,:colour_pr ,:tactil_pr ,:qstock_pr ,:photo_pr ,:description_pr,:d_time )';
$statement = $con->prepare($sql);
if ($statement->execute([':code_pr' => null,':marque_pr' => $_POST["marque"], ':serie_pr' => $_POST["serie"] , ':type_pr'=> $_POST["type"], ':prece_pr'=>
$_POST["processeur"] ,':ram_pr' => $_POST["ram"] ,':rom_pr' =>$_POST["rom"],':tpdisque_pr' =>$_POST["typedisk"],':cgraphique_pr'=>$_POST["graphique"]
,':prix_inistial_pr'=>$_POST["prix"] ,':propmotion_pr'=>$_POST["promo"],':ios_pr'=>$_POST["ios"],':ecran_pr'=>$_POST["tecron"],':colour_pr'=>$_POST["colour"]
,':tactil_pr'=>$_POST["tactile"],':qstock_pr'=>$_POST["qstock"],':photo_pr'=>$imagePath,":description_pr"=>$_POST["descrip"],":d_time"=>$date])) 
{
echo "produit bien ajoute";
}
else
{
$message="err";
}
}
?>     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="ajax.js"></script>
    <title>Document</title>
</head>
<body>
<p>
        <a  href="prodect.php"class="btn btn-success ">Back</a>
    </p>
    <aside class="container col-lg-6">
         <!-- ============== COMPONENT POSTING ============== --> 
         <div class="card mb-4"> 
             <article class="card-body">
                  <h4 class="mb-4">Submit product</h4> 
                  <form action="" method="POST" enctype="multipart/form-data"> 

                  <div class="row mb-4"> 
                                             <label class="col-3 col-form-label">photo<span style="color :red;display: none;">*</span></label>
                                              <div class="col-9"> 
                                                  <input type="file"  name="screen">
                                                </div>
                                                 <!-- col end.// -->
                                                 </div>
                                                 <div class="row mb-4">
                         <label class="col-3 col-form-label">Marque<span style="color :red;display: none;">*</span></label> 
                            <div class="col-9"> 
                                <select class="form-select" name="marque">
                                    <option></option>
                                    <option value="HP">HP</option> 
                                    <option value="Appel">Appel</option> 
                                    
                                    <option value="acer">acer</option>
                                    <option value="ASUS">ASUS </option>
                                    <option value="lenovo">lenovo</option>
                                    <option value="Toshiba">Toshiba</option>
                                    <option value="MSI">MSI</option>

                                </select>
                            </div> 
                         <!-- col end.// -->
                         </div>
                         <div class="row mb-4">
                       <label class="col-3 col-form-label">Serie<span style="color :red;display: none;">*</span></label>
                        <div class="col-9"> 
                            <input type="text" class="form-control" name="serie" placeholder="serie">
                         </div> 
                         

                         <!-- col end.// -->
                         </div>
                         <div class="row mb-4">
                         <label class="col-3 col-form-label">Type Ordinateur<span style="color :red;display: none;">*</span></label> 
                                                      <div class="col-9"> 
                                                          <select class="form-select" name="type">
                                                                <option></option>
                                                                <option value="otdinateur portable">Ordinateur portable</option> 
                                                                <option value="otdinateur bureau">Ordinateur bureau</option> 
                                                                <option value="otdinateur mini">Ordinateur mini </option>
                                                                 </select>
                                                                 </div> 
                                                                 
                         </div>
                        
                         
                        <div class="row mb-4">
                         <label class="col-3 col-form-label">Type de Processeur<span style="color :red;display: none;">*</span></label> 
                            <div class="col-9"> 
                                <select class="form-select" name="processeur" >
                                    <option></option>
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
                         <label class="col-3 col-form-label">Capacité de RAM<span style="color :red;display: none;">*</span></label> 
                            <div class="col-9"> 
                                <select class="form-select" name="ram" >
                                    <option></option>
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
                            <label class="col-3 col-form-label">ROM<span>*</span></label>
                            <div class="col-9"> 
                                <input type="number" class="form-control" name="rom" placeholder="ROM">
                         </div> 

                                                  <!-- col end.// -->
                                                  </div>
                         <div class="row mb-4">
                         <label class="col-3 col-form-label">type de disque dur<span style="color :red;display: none;">*</span></label> 
                                                      <div class="col-9"> 
                                                          <select class="form-select" name="typedisk" >
                                                                <option value="SSD">SSD</option> 
                                                                <option value="HDD">HDD</option> 
                                                                <option value="SSHD">SSHD </option>
                                                                 </select>
                                                                 </div> 

                         </div>
                         <div class="row mb-4">
                              <label class="col-3 col-form-label">Carte Graphique<span style="color :red;display: none;">*</span></label>
                               <div class="col-9"> 
                                   <input type="text" class="form-control"  name="graphique" placeholder="Carte Graphique"> 
                                </div>
                                 <!-- col end.// -->
                             </div> 


                         <div class="row mb-4">
                              <label class="col-3 col-form-label">Prix Initiale<span style="color :red;display: none;">*</span></label>
                               <div class="col-9"> 
                                   <input type="number" min=0 step="any"  name="prix" class="form-control" placeholder=""> 
                                </div>


                                 <!-- col end.// -->
                             </div> 
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Promotion<span style="color :red;display: none;">*</span></label>
                               <div class="col-9"> 
                                   <input type="number" step="any" name="promo" class="form-control" placeholder=""> 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Systém D'exploitation<span style="color :red;display: none;">*</span></label>
                               <div class="col-9"> 
                                   <input type="text" name="ios" class="form-control" placeholder="" > 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Taille D'écran<span style="color :red;display: none;">*</span></label>
                               <div class="col-9"> 
                                   <input type="text"  name="tecron" class="form-control" > 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Colour<span style="color :red;display: none;">*</span></label>
                               <div class="col-9"> 
                                   <input type="text"  name="colour" required class="form-control" placeholder="colour"> 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Tactile<span style="color :red;display: none;">*</span></label>
                               <div class="col-9"> 
                                   <input type="text"  name="tactile" class="form-control" placeholder="tactile"> 
                                </div>

                                </div>
                                <div class="row mb-4">
                              <label class="col-3 col-form-label">Quantite de stock <span style="color :red;display: none;">*</span></label>
                               <div class="col-9"> 
                                   <input type="text"  name="qstock" required class="form-control"> 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <!-- row end.// --> 
                    

                                         <!-- row end.// --> 
                                         <div class="row mb-4"> 
                                             <label class="col-3 col-form-label">Description<span">*</span></label>
                                              <div class="col-9"> 
                                                  <textarea class="form-control" name="descrip" placeholder="Description"></textarea> 
                                                </div>

                                                 <!-- col end.// -->
                                                 </div>
                                                  <!-- row end.// --> 

                                                                 <!-- row end.// -->
                                                               
                                                                                         <!-- row end.// --> 
                        <div class="row mb-2">
                            <div class="col-9 offset-3"> 
                                <button type="button" id="b" onclick="validation()" name="btn" class="btn btn-primary">Ajouter product</button> 
                                <button type="reset" name="btn-anuler" class="btn btn-outline-danger">Effacer</button> 
                            </div> 
       
                            <script>
                                let pattern = /^([a-z A-Z]){1,} $/;

    function validinput(inp){
      inp.style.borderColor="green";
      inp.style.outline="green";
      inp.parentElement.previousElementSibling.firstElementChild.style.display="none";
    }
    function NotValid(inp) {
     inp.style.borderColor="red";
     inp.style.outline="red";
     inp.parentElement.previousElementSibling.firstElementChild.style.display="inline";
    }
    function validation(){
      let input=document.querySelectorAll("input");
      let txtra=document.querySelector("textarea");
      let select = document.querySelectorAll("select");
      let tailleX=input.length;

      let tailleY= select.length; 
      console.log(tailleX);
      console.log(tailleY);
      let s = parseInt(tailleX+tailleY);
      let x =0;
      let btn=document.getElementById("b");
      

      for (let i=0; i<input.length ;i++){
        if(input[i].value==""){
            NotValid(input[i])
         }
          else{
            validinput(input[i]);
            x++;
          }
        
      }
      for (let i=0; i<select.length ;i++){
        if(select[i].value==""){
            NotValid(select[i]);
         }
          else{
            validinput(select[i]);
            x++;
          }
        
      }    

     
      if(s==x){
        btn.setAttribute("type","submit");
      }

    }
  </script>
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