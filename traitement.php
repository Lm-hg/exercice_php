<?php
session_start();
$nom=$_SESSION["nom"];
if ($_POST["name"]==$nom && $_POST["password"]=="AZERTY"){
    echo "Bienvenue ". $_POST['name'];
}else{
    echo "nom incorrect";
}