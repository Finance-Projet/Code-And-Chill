<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CashTrack</title>
</head>
<body>
    <nav>

    </nav>

    <div class="container"></div>


    <div class="calculator">
        <input type="number" name="argent" id="money">
        <input type="number" name="pourcentage" id="pourcentage">
        <button onclick="calcul()">Calculer</button>
        <p id="resultat"></p>
    </div>

    <script src="calcul.js"></script>
</body>
</html>