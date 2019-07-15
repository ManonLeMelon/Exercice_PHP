<?php
//COOKIE

// Vérifie si le formulaire est correctement rempli
if(isset($_POST['ville'])&& !empty($_POST['ville'])){
    //Création d'un cookie nommé ville contenant le nom de la ville
    setcookie('ville', $_POST['ville'], time()+3600);
    //redirection vers le formulaire
    header('Location: index.php');
}
else{
    //Message d'erreur si formulaire vide
    echo 'Formulaire vide !';
}


?>