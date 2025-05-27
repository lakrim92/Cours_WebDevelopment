<?php
// Déclaration du tableau multidimensionnel
$equipe = [
    ["nom" => "Alice", "role" => "Designer"],
    ["nom" => "Bob", "role" => "Développeur"],
    ["nom" => "Claire", "role" => "Chef de projet"]
];

// Définition de la fonction pour afficher l'équipe
function afficherEquipe($equipe) {
    echo "<ul>";
    foreach ($equipe as $membre) {
        echo "<li>" . htmlspecialchars($membre["nom"]) . " - " . htmlspecialchars($membre["role"]) . "</li>";
    }
    echo "</ul>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Équipe</title>
</head>
<body>
    <h1>Notre Équipe</h1>
    <?php afficherEquipe($equipe); ?>
</body>
</html>
