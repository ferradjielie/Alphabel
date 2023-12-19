<?php 
ob_start();

$feuilleDetail = $requeteDetailFeuille->fetch();


?>


<div class="detailFeuilles">
    <div class="detailFeuille"> 
        <h4><a href="index.php?action=DetailFeuille&id=<?= $feuilleDetail["id_feuille"] ?>">  <?= $feuilleDetail["nom"]."<br>" ."<br>" ?>  <img src='uploads/<?= $feuilleDetail['img'] ?>'> <br> <br> Description :  <?= $feuilleDetail["descriptionLettre"]  ?> </a></h4>
    </div>
</div>
<div class="updateFeuille">
        <a href="index.php?action=formUpdateFeuille&id=<?= $feuilleDetail["id_feuille"] ?>">  <button>modifiez votre feuille</button> </a>
</div>

<?php

$titre = "Détail d'une feuille";
$titre_secondaire = "Détail d'une feuille";
$contenu = ob_get_clean();
require "view/template.php";


?>
