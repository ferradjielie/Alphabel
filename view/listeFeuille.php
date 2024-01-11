<?php
ob_start();

$recupFeuilles = $recupFeuille ->fetchAll();
?>

<section> 
<?php foreach($recupFeuilles as $infoFeuilles) {?> 
    <div class="listeFeuilles"> 
        
<div class="lettre"> <a href="index.php?action=DetailFeuille&id=<?= $infoFeuilles["id_feuille"] ?>"  ><?= $infoFeuilles["lettre"] ?> </a>  </div> <br>  <?= $infoFeuilles["nom"] ?>    <br> <br>
    </div>

    <?php } ?>
</section>
<?php 

    $titre = "Liste de mes feuilles";
    $titre_secondaire = "Liste de mes feuilles";
    $meta_description = "affiche la liste des feuilles par utilisateur";
    $contenu = ob_get_clean();
    require "view/template.php";
?>

