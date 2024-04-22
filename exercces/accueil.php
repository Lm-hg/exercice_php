<?php session_start(); ?>
<?php include('./index.php');?>
<nav>
    <a href=" #">Accueil</a>
    <a href="./connexion.php">Connexion</a>
    <a href="./inscription.php">S'inscrire</a>
    <a href="./about.php">A propos</a>
    <?php if(!empty($_SESSION["nom"])):?>
       <a href="./déconnexion.php">Déconnexion</a>;
    
    <?php endif ?>
</nav>

    <?php if(!empty($_SESSION["nom"])){
        echo "Bonjour". $_SESSION['nom'];
    }
    ?>


<?php include('./footer.php');?>