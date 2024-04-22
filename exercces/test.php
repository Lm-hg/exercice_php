<?php
function recupererTousLesUtilisateurs(string $fichier) {
    $contenu = file_get_contents($fichier);

    return json_decode($contenu, true);
}
$users=recupererTousLesUtilisateurs('identifiant.json');
foreach ($users as $a){
    if($a['name']=="modestin" && $a["password"]=="azerty"){
        echo "bon";
    }
}