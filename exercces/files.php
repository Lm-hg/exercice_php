<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
        <input type="file" name="mon_fichier" accept="image/*" /> <br>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>

<?php
var_dump($_FILES);

if (
    !empty($_FILES['mon_fichier'])
    && $_FILES['mon_fichier']['error'] === 0
    && $_FILES['mon_fichier']['size'] <= 3000000
    && str_starts_with($_FILES['mon_fichier']['type'],'image')
) {

    /** 
     * On renomme le fichier par sécurité 
     * (le nom vient de l'utilisateur, on ne lui fait pas confiance)
     */
    $nouveau_nom = uniqid();

    $extension = pathinfo($_FILES['mon_fichier']['name'], PATHINFO_EXTENSION);

    $nouveau_nom .= '.' . $extension;

    move_uploaded_file(
        $_FILES['mon_fichier']['tmp_name'],  // Point de départ
        __DIR__ . '/fichier/' . $nouveau_nom // Point d'arrivée
    );
} else die('Enfoiré');