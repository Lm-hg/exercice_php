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
<img src="https://th.bing.com/th/id/OIP._8DpAou0xUlyte1wgSeroQHaE8?w=264&h=180&c=7&r=0&o=5&pid=1.7" alt="">

<?php include('./footer.php');?>