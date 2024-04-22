<?php
session_start();
    $nom="modestin";
    $_SESSION["nom"]=$nom;
    echo $_SESSION["nom"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="traitement.php" method="post">
        <input type="text" name="name" id="name"><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>