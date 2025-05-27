<?php
$email = htmlspecialchars($_POST["email"]);
if (empty($email)) {
    echo "<p>Erreur : Veuillez entrer un email valide</p>";
} else {
    echo "<p>Email $email enregistré !</p>";
}
?>