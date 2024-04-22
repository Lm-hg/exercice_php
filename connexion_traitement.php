<?php

session_start();

include './fonction_fichier_json.php';

if (
    !empty($_POST['login'])
    && !empty($_POST['password'])
) {
    $utilisateur = trouverUtilisateurGraceAIdentifiantEtMdp($_POST['login'], $_POST['password']);
    if ($utilisateur) {
        $_SESSION['pseudo'] = $identifiant;
        header('location: accueil.php');
    }
} else {
    die('Mauvais identifiant ou mot de passe.');
}
