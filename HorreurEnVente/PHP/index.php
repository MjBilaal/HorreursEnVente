<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Metadata et liens vers les feuilles de style -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horreur en vente</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/png" href="../images_site/logo-site.png">
</head>
<body>
    <!-- En-tête de la page -->
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

    <!-- Contenu principal de la page -->
    <main>
        <div class="main-content">
            <!-- Section de mise en avant de produit -->
            <section class="featured">
                <h2>Produit à la une</h2>
                <p>Stock limité!</p>
            </section>
            <!-- Section pour découvrir les produits -->
            <section class="discover">
                <button onclick="window.location.href='catalogue.php';">Découvrez nos produits</button>
            </section>
        </div>
        <!-- Section des avis sur les produits -->
        <div class="product-reviews">
            <!-- Avis sur le produit 1 -->
            <div class="product-review">
                <a href="#"> <!-- Ajout du lien vers la page du produit -->
                    <img src="../images_site/image99.jpg" alt="Produit 1">
                    <p>4 masques horreurs</p>
                </a>
                <div class="review-card">
                    <div class="reviewer-name">John Doe</div>
                    <div class="review-rating">★★★★★</div>
                    <div class="review-text">Incroyablement terrifiant et de grande qualité !</div>
                </div>
            </div>
            <!-- Avis sur le produit 2 -->
            <div class="product-review">
                <a href="#"> <!-- Ajout du lien vers la page du produit -->
                    <img src="../images_site/image98.jpg" alt="Produit 2">
                    <p>Costume de clown effrayant</p>
                </a>
                <div class="review-card">
                    <div class="reviewer-name">Jane Smith</div>
                    <div class="review-rating">★★★★☆</div>
                    <div class="review-text">Très bon produit, taille parfaite!</div>
                </div>
            </div>
            <!-- Avis sur le produit 3 -->
            <div class="product-review">
                <a href="#"> <!-- Ajout du lien vers la page du produit -->
                    <img src="../images_site/image97.jpg" alt="Produit 3">
                    <p>Coffret DVD Shining / ÇA</p>
                </a>
                <div class="review-card">
                    <div class="reviewer-name">Alice Martin</div>
                    <div class="review-rating">★★★☆☆</div>
                    <div class="review-text">Bien reçu le colis, des chef d'oeuvres ces 2 films.</div>
                </div>
            </div>
        </div>
    </main>

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