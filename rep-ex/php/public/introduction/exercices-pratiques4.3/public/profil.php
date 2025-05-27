<?php
// Déclaration du tableau associatif
$profil = [
    "nom" => "Luc",
    "age" => 30,
    "ville" => "Lyon"
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil utilisateur</title>
</head>
<body>
    <h1>Profil</h1>

    <?php
    // Déclaration du tableau associatif
    $profil = [
        "nom" => "Luc",
        "age" => 30,
        "ville" => "Lyon"
    ];

    // Parcours et affichage des informations
    foreach ($profil as $cle => $valeur) {
        echo "<p>" . ucfirst($cle) . " : $valeur</p>";
    }
    ?>
</body>
</html>
