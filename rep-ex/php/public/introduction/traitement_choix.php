<!-- public/traitement_choix.php -->
<?php
    $sport = htmlspecialchars($_GET["sport"]);
    echo "<p>Votre sport préféré est : $sport</p>";
?>