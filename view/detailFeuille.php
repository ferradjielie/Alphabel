<?php 
ob_start();

$feuilleDetail = $requeteDetailFeuille->fetchAll();


?>



<?php foreach ($feuilleDetail as $feuilleDetails) { ?>
    <h4><a href="index.php?action=DetailFeuille&id=<?= $feuilleDetails["id_feuille"] ?>"><?= $feuilleDetails["nomLettre"] ?> <img src='uploads/<?= $feuilleDetails['img'] ?>'> <?= $feuilleDetails["descriptionLettre"]  ?> </a></h4>
<?php } ?>


<?php

$titre = "Détail d'une feuille";
$titre_secondaire = "Détail d'une feuille";
$contenu = ob_get_clean();
require "view/template.php";


?>
