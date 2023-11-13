<?php 
ob_start();


$feuilles = $requeteDetailLettre ->fetchAll();
//$feuille = $requeteFeuille -> fetchAll();
?>


<div class="detailLettres"> 
<?php foreach ($feuilles as $feuille) { ?>
    <div class="detailLettre"> 
     <div class="lettre">  <?= $feuille["nomLettre"]?> </div>    <a href="index.php?action=DetailFeuille&id=<?= $feuille["id_feuille"] ?>"> Voir détail de la feuille</a>     
    </div>
<?php } ?>

<a href="index.php?action=FormAjouterFeuille&id=<?= $id ?>">Ajouter une nouvelle feuille</a>

</div>

<?php 

    $titre = "Détail d'une lettre";
    $titre_secondaire = "Détail d'une lettre";
    $contenu = ob_get_clean();
    require "view/template.php";
?>
