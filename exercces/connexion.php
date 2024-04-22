<?php include('./index.php');?>
<nav>
    <a href=" #">Accueil</a>
    <a href="./déconnexion.php">Déconnexion</a>
    <a href="./about.php">A propos</a>
</nav>

<form action="./traitement.php" method="post">
    <input type="text" name="name" id="name" required>
    <br>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Se connecter">
</form>

<?php include('./footer.php');?>