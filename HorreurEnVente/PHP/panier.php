<!-- PERMET DE RECUPERER LES DONNEES -->
<?php 
   session_start();
   include_once "cnxbdd.php";
   if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    unset($_SESSION['panier'][$id_del]);
   }
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles dans le panier</title>
</head>
    <link rel="icon" type="image/png" href="../images_site/logo-site.png">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/index.css">
<body class="tab">
        <table border="1" class="table2">
            <tr class="tr2">
                <th></th>
                <th>Nom du produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Supprimer</th>
            </tr>

        <!-- SCRIPT PHP -->

            <?php 
              $total = 0 ;
              $ids = array_keys($_SESSION['panier']);
              if(empty($ids)){
                echo "<p id='panier'>Votre panier est vide</p>";
              }else {
                $produits = mysqli_query($conx, "SELECT * FROM produits WHERE id IN (".implode(',', $ids).")");

                foreach($produits as $produits):

        // ON CALCULE LE TOTAL DU PANIER EN PARCOURANT LE TABLEAU AVEC FOREACH

                    $total = $total + $produits['prix'] * $_SESSION['panier'][$produits['id']] ;
                ?>
                <tr class="tr2">
        <!-- AFFICHAGE DES ELEMENTS ENREGISTRES DANS LE PANIER -->
                    <td><img src="../images_site/<?=$produits['img']?>"></td>
                    <td><?=$produits['nomProd']?></td>
                    <td><?=$produits['prix']?>€</td>
                    <td><?=$_SESSION['panier'][$produits['id']]?></td>
                    <td><a href="panier.php?del=<?=$produits['id']?>"><img src="../images_site/supp.png"></a></td>
                </tr>

            <?php endforeach ;} ?>
            <tr><p class="pn">Total : <?=$total?>€</p>
            </tr>
        </table>
    </body>
</html>


