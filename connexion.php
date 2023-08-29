<?php
// Connexion à la base de données
$con = mysqli_connect("localhost", "root", "", "Mahkama");

// Vérifier la connexion
if (mysqli_connect_errno()) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}
?>
