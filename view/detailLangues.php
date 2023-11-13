<?php 
ob_start();
//$langue =  $requeteLangue->fetch();
$lettre = $requeteLangue->fetchAll();

//$feuille = $requeteFeuille -> fetchAll();
?>


<div class="lettres">
    <?php foreach ($lettre as $lettres) { ?>
        <a href="index.php?action=DetailLettres&id=<?= $lettres["id_lettre"] ?>">
        <div class="lettre">
            <?= $lettres["nomLettre"] ?>
        </div>
        </a>
    <?php } ?>
</div>



<?php 

    $titre = "Détail d'une langue";
    $titre_secondaire = "Détail d'une langue";
    $contenu = ob_get_clean();
    require "view/template.php";
?>
