<?php
// Déclaration du tableau multidimensionnel
$etudiants = [
    ["nom" => "Alice", "note" => 15],
    ["nom" => "Bob", "note" => 8],
    ["nom" => "Claire", "note" => 12],
    ["nom" => "David", "note" => 9]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Filtrage des étudiants</title>
</head>
<body>
    <h1>Étudiants ayant une note ≥ 10</h1>
    <ul>
        <?php
        foreach ($etudiants as $etudiant) {
            if ($etudiant["note"] >= 10) {
                echo "<li>" . htmlspecialchars($etudiant["nom"]) . " - " . $etudiant["note"] . "</li>";
            }
        }
