<?php
class Panier{

 function __construct()
 {
    if(!isset($_SESSION)){
        session_start();

    }
    if(!isset($_SESSION["panier"])){
        $_SESSION["panier"]=array();
    }
}
public function add($pid){
    if(isset($_SESSION['panier'][$pid])){
        $_SESSION['panier'][$pid]++;
    }else{
        $_SESSION['panier'][$pid]=1;
    }
 
    
}

  
    
    }
    