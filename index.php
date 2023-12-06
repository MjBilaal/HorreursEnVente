<?php
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "nom_utilisateur";
$motDePasse = "mot_de_passe";
$nomBaseDeDonnees = "nom_base_de_donnees";

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Requête SQL pour récupérer des données
$requete = "SELECT * FROM nom_table";
$resultat = $connexion->query($requete);

// Vérification de la réussite de la requête
if (!$resultat) {
    die("La requête a échoué : " . $connexion->error);
}

// Vérifie si l'ID du produit est passé en paramètre
if (isset($_GET['produit_id'])) {
    $produit_id = $_GET['produit_id'];

  // Requête SQL pour récupérer les détails du produit
  $requete_produit = "SELECT * FROM produits WHERE id = $produit_id";
  $resultat_produit = $connexion->query($requete_produit);

  // Ajoute le produit au panier
  $requete_panier = "INSERT INTO panier (produit_id, produit_nom, prix) VALUES ('{$produit['id']}', '{$produit['nom']}', '{$produit['prix']}')";
  $resultat_panier = $connexion->query($requete_panier);
  
  if ($resultat_panier) {
              echo "Le produit a été ajouté au panier avec succès!";
          } else {
              echo "L'ajout au panier a échoué : " . $connexion->error;
          }
      } else {
          echo "Produit non trouvé.";
      }
  }
  // Fermeture de la connexion à la base de données
  $connexion->close();
?>