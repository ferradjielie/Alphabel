<?php 
ob_start();


$feuilles = $requeteDetailLettre ->fetchAll();

//$feuille = $requeteFeuille -> fetchAll();
?>


<?php foreach ($feuilles as $feuille) { ?>
    <h4><?= $feuille["nomLettre"]?> transcription de la lettre :  <?= $feuille["descriptionLettre"]?>    <a href="index.php?action=AjouterImg" >ajouter un schéma</a>     </h4>
<?php } ?>



