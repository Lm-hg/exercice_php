<?php include('./index.php');?>


<form action="./traitement1.php" method="post">
    <input type="email" name="name" id="name" required>
    <br>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" value="S'inscrire">
</form>

<?php include('./footer.php');?>