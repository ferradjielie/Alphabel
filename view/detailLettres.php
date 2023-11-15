<?php 
ob_start();

$feuilles = $requeteDetailLettre ->fetchAll();
//$feuille = $requeteFeuille -> fetchAll();
?>


<div class="detailLettres"> 
<?php foreach ($feuilles as $feuille) { ?>

    <div class="detailLettre"> 
     <div class="lettre">  <?= $feuille["nomLettre"]?> </div>   <button>  <a href="index.php?action=DetailFeuille&id=<?= $feuille["id_feuille"] ?>"> Voir détail de la feuille</a>    
     <?php
     if($_SESSION["user"]["id_utilisateur"] == $feuille["id_utilisateur"]) { ?><!--seul l'utilisateur connecté qui a creer sa feuille peut supprimer celle-ci et ainsi , le button delete apparait en conséquence de cela -->
         <div class="deleteFeuille">  <button>  <a href="index.php?action=DeleteFeuille&id=<?= $feuille["id_feuille"] ?>">Supprimer cette feuille</a> </button>   
         </div> 
     <?php } ?>
     </div>
<?php } ?>

<?php
if(isset($_SESSION["user"])) { ?>
    <div class="linkAddFeuille"> 
    <button> <a href="index.php?action=FormAjouterFeuille&id=<?= $id ?>">Ajouter une nouvelle feuille</a> </button>
    </div>
<?php } ?> 

</div>

<?php 

    $titre = "Détail d'une lettre";
    $titre_secondaire = "Détail d'une lettre";
    $contenu = ob_get_clean();
    require "view/template.php";
?>
