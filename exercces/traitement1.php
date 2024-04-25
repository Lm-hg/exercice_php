<?php
session_start();
include './config.php';
if(!empty($_POST["password"]) && !empty($_POST["name"])){
    $email=$_POST["name"];
    $pass= password_hash($_POST["password"], PASSWORD_DEFAULT);
    $req=$conn->prepare("INSERT INTO users(email,password) VALUES(:email, :pass)");
    $req->bindParam(':email', $email);
    $req->bindParam(':pass', $pass);
    if($req->execute()){
        header("Location: ./connexion.php");
    }

    // $name=$_POST["name"];
    // $pwd=$_POST["password"];

    // $users=json_decode(file_get_contents('identifiant.json'),true);
    // $users[]=[
    //     "name" =>$name,
    //     "password" => $pwd
    // ];
    // file_put_contents('identifiant.json',json_encode($users, JSON_PRETTY_PRINT));

}
