<?php 
ob_start();
//$langue =  $requeteLangue->fetch();
$lettre = $requeteLangue->fetchAll();

//$feuille = $requeteFeuille -> fetchAll();
?>


<?php foreach ($lettre as $lettres) { ?>
    <h4><a href="index.php?action=DetailLettres&id=<?= $lettres["id_lettre"] ?>"><?= $lettres["nomLettre"] ?></a></h4>
<?php } ?>



