<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>3.1 Concepts clés</h1>
    <h2>Formulaires HTML</h2>
    <form action="traitement.php" method="post">
    <input type="text" name="nom">
    <input type="submit" value="Envoyer">
</form>
    <h2>Formulaire simple</h2>
    <!-- public/formulaire.php -->
    <form action="traitement.php" method="post">
        <label>Entrez votre nom :</label>
        <input type="text" name="nom">
        <input type="submit" value="Envoyer">
    </form>
    <h2>Formulaire avec choix</h2>
    <!-- public/choix.php -->
    <form action="traitement_choix.php" method="get">
        <label>Sport préféré :</label>
        <select name="sport">
            <option value="football">Football</option>
            <option value="basket">Basket</option>
        </select>
        <input type="submit" value="Choisir">
    </form>
</body>
</html>