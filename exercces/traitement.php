<?php
session_start();

$users=json_decode(file_get_contents('identifiant.json'),true);
foreach ($users as $a){
    if($a['name']==$_POST["name"] && $a["password"]==$_POST["password"]){
        $_SESSION['nom']=$a["name"];
        header('Location: ./accueil.php');
    }else{
        die( "nom ou mot de passe incorrect");
    }
}
// if( $_POST["name"]=="modestin" && $_POST["password"]=="azerty"){
//     $_SESSION['nom']=$_POST["name"];
//     header('Location: ./accueil.php');
// }else{
//     echo "nom ou mot de passe incorrect";
// }