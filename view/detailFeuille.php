<?php 
ob_start();

$feuilleDetail = $requeteDetailFeuille->fetch()


?>


<div class="detailFeuilles">
    <div class="detailFeuille"> 
        <h4><a href="index.php?action=DetailFeuille&id=<?= $feuilleDetail["id_feuille"] ?>">  <?= $feuilleDetail["nom"]."<br>" ."<br>" ?>  <img src='uploads/<?= $feuilleDetail['img'] ?>'> <br> <br> Description :  <?= $feuilleDetail["descriptionLettre"]  ?> </a></h4>
    </div>
</div>

<?php
if (isset($_SESSION["user"]) && $_SESSION["user"]["id_utilisateur"] == $feuilleDetail["id_utilisateur"]) {
   
    ?>
    <div class="updateFeuille">
        <a href="index.php?action=formUpdateFeuille&id=<?= $feuilleDetail["id_feuille"] ?>">
            <button>Modifiez votre feuille</button>
        </a>
    </div>
    <?php
}

$titre = "Détail d'une feuille";
$titre_secondaire = "Détail d'une feuille";
$meta_description = "Détail d'une feuille";
$contenu = ob_get_clean();
require "view/template.php";


?>
