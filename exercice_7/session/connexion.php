<?php
session_start();

//Vérifie si le formulaire est correctement rempli
if(isset($_POST['nom']) && !empty($_POST['nom'])
&& isset($_POST['motdepasse']) && !empty($_POST['motdepasse'])){

    //vérifie si le nom et le mot de passe sont corrects
    if($_POST['nom'] == 'admin' && $_POST['motdepasse'] == 'admin'){

        $_SESSION['nom'] = $_POST['nom'];
        header('Location: info.php');
    }
    else{
        echo 'Identification incorrect';
    }
}
else{
    echo 'Formulaire est incorrect !';
}

?>