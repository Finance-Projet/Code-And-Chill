<?php
// Informations de connexion à la base de données
define('DB_SERVER', 'localhost'); // Adresse du serveur MySQL
define('DB_USERNAME', 'root'); // Nom d'utilisateur MySQL
define('DB_PASSWORD', 'soso_kaliso_2009'); // Mot de passe MySQL
define('DB_NAME', 'cashtrack'); // Nom de la base de données MySQL

// Connexion à la base de données MySQL
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Vérifier la connexion
if ($link === false) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}
?>
