<?php 
ob_start();


$feuilles = $requeteDetailLettre ->fetchAll();
//$feuille = $requeteFeuille -> fetchAll();
?>


<?php foreach ($feuilles as $feuille) { ?>
    <h4><?= $feuille["nomLettre"]?> transcription de la lettre :  <?= $feuille["descriptionLettre"]?>    <a href="index.php?action=DetailFeuille&id=<?= $feuille["id_feuille"] ?>"> >Voir détail de la feuille</a>     </h4>
<?php } ?>

<a href="index.php?action=FormAjouterFeuille&id=<?= $id ?>">Ajouter une nouvelle feuille</a>



