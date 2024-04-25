<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['nom_utilisateur'])) {
        echo "<p>Bonjour, " . $_SESSION['nom_utilisateur'] . " !</p>";
    } else {
        echo "<p>Bienvenue !</p>";
    }
    ?>
    <!-- Le reste de votre contenu HTML -->
</body>
</html>
