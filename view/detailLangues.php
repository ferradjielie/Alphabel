<?php 
ob_start();
$langue =  $requeteLangue->fetch();
$lettre = $requeteLangue2->fetchAll();
?>
<h2><?= "les lettres de l'alphabet arabe sont".$langue["nomLangue"]?></h2>

<?php foreach ($lettre as $lettres) { ?>
    <h4><?=  $lettres["nomLettre"]?></h4>
<?php } ?>

