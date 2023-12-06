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

  // Fermeture de la connexion à la base de données
  $connexion->close();
?>