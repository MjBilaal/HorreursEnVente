<?php 
 session_start() ;
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue des produits</title>
</head>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="icon" type="image/png" href="../images_site/logo-site.png">
<body>
    <header>
        <div class="header">
            <!-- Logo avec lien de redirection vers l'index -->
            <a href="index.php"><img src="../images_site/logo-site.png" alt="Logo Horreur en Vente" id="logo"></a>
            <!-- Barre de navigation -->
            <nav class="navbar">
                <ul class="menu">
                    <!-- Dropdown pour les masques avec liens de redirection -->
                    <li class="dropdown">
                        <a href="catalogue.php" class="dropbtn">Notre catalogue</a> <!-- PHP -->
                    </li>
                </ul>
                <!-- Menu du compte et panier -->
                <ul class="menu account-menu">
                    <li><a href="panier.php">Panier</a></li>
                    <li><a href="#">Mon compte client</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- SCRIPT PHP -->
        <?php 
        include_once "cnxbdd.php";
         $req = mysqli_query($conx, "SELECT * FROM produits");
         while($row = mysqli_fetch_assoc($req)){ 
        ?>
        <form action="" class="fond">
        <div class="fond4">
         <div class="image_product">
                <img src="../images_site/<?=$row['img']?>">
            </div>
            <div class="fond2">
                <h3><?=$row['nomProd']?></h3>
                <h3><?=$row['prix']?>€</h3>
                <h3 class="note"><?=$row['note']?></h3>
                <h3>(<?=$row['avis']?>) avis</h3>
                <h4><?=$row['description']?></h4>
                <a href="ajouter_panier.php?id=<?=$row['id']?>" class="button">Ajouter au panier</a>
            </div>
        </div>
        </form>

        <?php } ?>
    <a href="panier.php" class="button">Voir le panier</a>
    <!-- Pied de page -->
    <footer>
        <ul class="footer-menu">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="qui-sommes-nous.html">Qui sommes-nous?</a></li>
            <li><a href="pourquoi-ce-site.html">Pourquoi ce site?</a></li>
            <li><a href="paiement-et-livraison.html">Paiement, livraison et droits de rétractation</a></li>
            <li><a href="faq.html">Questions fréquentes</a></li>
        </ul>
    </footer>
</body>
</html>

