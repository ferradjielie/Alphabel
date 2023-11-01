<?php 
ob_start();


$feuilles = $requeteDetailLettre ->fetchAll();

//$feuille = $requeteFeuille -> fetchAll();
?>


<?php foreach ($feuilles as $feuille) { ?>
    <h4><?= $feuille["nomLettre"]?> transcription de la lettre :  <?= $feuille["descriptionLettre"]?>    <a href="index.php?action=formAjouterImg" >ajouter une image</a>     </h4>
<?php } ?>

<a href="index.php?action=FormAjouterFeuille">Ajouter une nouvelle feuille</a>



