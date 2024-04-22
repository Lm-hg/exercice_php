<?php
session_start();
if(!empty($_POST["password"]) && !empty($_POST["name"])){

    $name=$_POST["name"];
    $pwd=$_POST["password"];

    $users=json_decode(file_get_contents('identifiant.json'),true);
    $users[]=[
        "name" =>$name,
        "password" => $pwd
    ];
    file_put_contents('identifiant.json',json_encode($users, JSON_PRETTY_PRINT));
}
header("Location: ./connexion.php");