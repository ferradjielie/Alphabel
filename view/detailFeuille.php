<?php 
ob_start();

$feuilleDetail = $requeteDetailFeuille->fetch();

$infoCommentaire = $recupCommentaire->fetchAll();



?>


<div class="detailFeuilles">
    <div class="detailFeuille"> 
        <h4><a href="index.php?action=DetailFeuille&id=<?= $feuilleDetail["id_feuille"] ?>">  <?= $feuilleDetail["nom"]."<br>" ."<br>" ?>  <img src='uploads/<?= $feuilleDetail['img'] ?>'> <br> <br> Description :  <?= $feuilleDetail["descriptionLettre"]  ?> </a></h4>
    </div>
</div>

<?php
 if (isset($_SESSION["user"])) {

       
   
    ?>
    <div class="updateFeuille">
        <a href="index.php?action=formUpdateFeuille&id=<?= $feuilleDetail["id_feuille"] ?>">
            <button>Modifiez votre feuille</button>
        </a>
      
       <div class="consulterFeuille"> 
            <button> <a href="index.php?action=DetailLangues&id=1" >Consulter la feuille que j'ai créer</a> </button>
        </div>
        <hr>
    </div>
        <div class="afficherCommentaire"> 
         <?php foreach($infoCommentaire as $infoCommentaires) {?> 
            Auteur : <?=   $infoCommentaires["pseudo"] ?><br> Date de publication : <?= $infoCommentaires["dateCommentaire"] ?> <br> Commentaire :  <?= $infoCommentaires["texte"] ?><br><br><br>
         <?php } ?>
    </div>



    <div class="ajouterCommentaire"> 
    <form action="index.php?action=AjouterCommentaire&id=<?= $id ?>" method="POST" enctype="multipart/form-data">
        <textarea name="commentaire" id="commentaire" cols="50" rows="10" placeholder="Saisir votre commentaire" required></textarea > <br>
        <input type="submit" name="submitCommentaire" value="Ajouter un commentaire">
    </form>
    </div>
   
    
    <?php
    
 }



$titre = "Détail d'une feuille";
$titre_secondaire = "Détail d'une feuille";
$meta_description = "Détail d'une feuille";
$contenu = ob_get_clean();
require "view/template.php";


?>
