<?php
 include_once "cnxbdd.php";
 if(!isset($_SESSION)){
    session_start();
 }
 if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
 }
  if(isset($_GET['id'])){
    $id = $_GET['id'] ;
    $produit = mysqli_query($conx ,"SELECT * FROM produits WHERE id = $id") ;
    if(isset($_SESSION['panier'][$id])){
        $_SESSION['panier'][$id]++;
    }else {
        $_SESSION['panier'][$id]= 1 ;
    }
   header("Location:../PHP/catalogue.php");
  }
?>


