<?php
//Démarre la session
session_start();

//Unset() détruit une variable ou une session
unset($_SESSION['nom']);
session_destroy();

//Redirection vers le formulaire de connexion
header('Location: index.php');

?>