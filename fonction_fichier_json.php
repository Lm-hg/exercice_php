<?php

function recupererTousLesUtilisateurs(string $fichier) {
    $contenu = file_get_contents($fichier);

    return json_decode($contenu, true);
}

function trouverUtilisateurGraceAIdentifiantEtMdp(string $identifiant, string $mdp) {
    $utilisateurs = recupererTousLesUtilisateurs('utilisateurs.json'); // array (= tableau d'utilisateurs)

    foreach ($utilisateurs as $u) {
        if (
            $u['identifiant'] === $identifiant
            && $u['mdp'] === $mdp
        ) {
            return $u;
        }
    }

    return false;
}
