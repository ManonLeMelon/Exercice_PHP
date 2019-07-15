<?php
// Mettre c'est ligne pour toute les pages ou il y a obligation de se connecter pour pouvoir y acceder
session_start();

if(!isset($_SESSION['nom'])) {
    header ('Location: index.php');
}

?>


<html>
    <head>
        <title>Exercice #$7 - Connecté !</title>
    </head>
    <body>
        <p>Bonjour <?= $_SESSION['nom'] ?>! </p>
        <a href="deconexion.php">Se déconnecter</a>
    </body>
</html>