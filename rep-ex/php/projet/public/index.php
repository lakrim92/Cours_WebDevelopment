<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Club de [Votre Thème]</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bienvenue au Club de [Votre Thème] !</h1>
    <p>Rejoignez-nous pour [description].</p>
    <img src="https://picsum.photos/300" alt="Image du club">
    <form action="traitement.php" method="post">
        <label>Nom :</label>
        <input type="text" name="nom">
        <input type="submit" value="S'inscrire">
    </form>
    <section>
        <h2>Membres</h2>
        <div id="membres"></div>
    </section>
</body>
</html>