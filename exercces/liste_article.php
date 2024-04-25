<?php include './index.php';?>
<?php
include './config.php';

$mes_articles=$conn->query("SELECT * FROM articles");

$articles=$mes_articles->fetchAll(PDO::FETCH_ASSOC);
?>
<section style="display:flex; justify-content:space-between">
<?php foreach($articles as $a):?>
<div class="card" style="width: 18rem;">
  <img src=<?php echo $a["img"];?> class="card-img-top" alt="...">
  <div class="card-body" onclick=confirm(" Etes-vous sûr")><?php echo $a["nom"];?></h5>
    <p class="card-text"><?php echo $a["contenu"];?></p>
    <p class="card-text"><?php echo $a["D"];?></p>
  </div>
</div>
   
<?php endforeach?>

</section>
<?php
?>



<?php include './footer.php';?>