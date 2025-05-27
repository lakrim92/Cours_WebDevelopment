<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
</head>
<body>
    <h1>Nos produits</h1>
    <ul>
        <?php
        // Déclaration du tableau multidimensionnel de produits
        $produits = [
            ["nom" => "Livre", "prix" => 15],
            ["nom" => "Stylo", "prix" => 2.5],
            ["nom" => "Cahier", "prix" => 3.2]
        ];
        // Affichage des produits avec foreach
        foreach ($produits as $produit) {
            echo "<li>" . $produit["nom"] . " - " . $produit["prix"] . "€</li>";
        }
        ?>
    </ul>
</body>
</html>
