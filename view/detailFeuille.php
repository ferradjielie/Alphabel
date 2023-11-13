<?php 
ob_start();

$feuilleDetail = $requeteDetailFeuille->fetchAll();


?>


<div class="detailFeuilles">
     <div class="detailFeuille"> 
<?php foreach ($feuilleDetail as $feuilleDetails) { ?>
   
    <h4><a href="index.php?action=DetailFeuille&id=<?= $feuilleDetails["id_feuille"] ?>"> Lettre   <?= $feuilleDetails["nomLettre"]."<br>" ."<br>" ?>  <img src='uploads/<?= $feuilleDetails['img'] ?>'> <br> <br> Description :  <?= $feuilleDetails["descriptionLettre"]  ?> </a></h4>
    
    </div>

    <?php } ?>

</div>
<?php

$titre = "Détail d'une feuille";
$titre_secondaire = "Détail d'une feuille";
$contenu = ob_get_clean();
require "view/template.php";


?>
