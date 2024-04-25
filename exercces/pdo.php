<?php
include('./config.php');

$sth = $dbh->prepare("SELECT * FROM utilisateurs");
$sth->execute();
 
/* Récupération de toutes les lignes d'un jeu de résultats */
print("Récupération de toutes les lignes d'un jeu de résultats :\n");
$result = $sth->fetchAll();
foreach ($result as $a){
    print_r($a["nom"]);
    echo '<br>';
}