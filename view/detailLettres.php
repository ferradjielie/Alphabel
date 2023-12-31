<?php 
ob_start();

$lettre =  $requeteLettre->fetch();
$feuilles = $requeteFeuilles ->fetchAll();
//$feuille = $requeteFeuille -> fetchAll();
?>

<div class="detailLettres"> 

    <h1><?= $lettre["nomLettre"] ?></h1>

    <?php
        if(isset($lettre["enregistrement"])) { ?>
        <audio controls>
            <source src="./uploadsAudio/<?= $lettre["enregistrement"] ?>" type="audio/mp3">
        </audio>
    <?php } ?>

        <?php foreach ($feuilles as $feuille) { ?>

        <div class="detailLettre"> 
            <?php 
                 if(isset($_SESSION["user"])) { ?> 
                      <p><?= $feuille["nom"]?></p> 
            <div class="detailFeuille">
                        <button><a href="index.php?action=DetailFeuille&id=<?= $feuille["id_feuille"] ?>"> Voir détail de la feuille</a></button>
                    </div>
            <?php  }
            
              if($_SESSION["user"]["id_utilisateur"] == $feuille["id_utilisateur"] && isset($_SESSION["user"]) ) { ?><!--seul l'utilisateur connecté qui a creer sa feuille peut supprimer celle-ci et ainsi , le button delete apparait en conséquence de cela -->    
                    <div class="deleteFeuille"> 
                    <button>  <a href="index.php?action=DeleteFeuille&id=<?= $feuille["id_feuille"] ?>">Supprimer cette feuille</a> </button>   
                    </div> 
            <?php } ?>
        </div>
                 <?php } ?>

    <?php 
    if(isset($_SESSION["user"])) { ?>
                <div class="linkAddFeuille"> 
                            <button> <a href="index.php?action=FormAjouterFeuille&id=<?= $id ?>">Ajouter une nouvelle feuille</a> </button>
                                         
         <?php
          if(isset($_SESSION["user"]) && $_SESSION["user"]["role"] == "ROLE_ADMIN") { ?> 
       <div class="audio">  <button> <a href="index.php?action=FormAjouterAudio&id=<?= $id ?>">Ajouter un nouvel audio</a> </button> </div>
   
       <?php }?>
   
</div>
<?php } ?> 

</div>

<?php 

    $titre = "Détail d'une lettre";
    $titre_secondaire = "Détail d'une lettre";
    $meta_description = "affiche détail d'une lettre";
    $contenu = ob_get_clean();
    require "view/template.php";
?>
