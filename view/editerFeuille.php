<?php
ob_start();
$requetteRecupFeuille = $requetteRecupFeuille->fetch();



?>

<?php
if (isset($_SESSION['message'])) {
                    echo '<div class="alert alert-danger" role="alert">' . $_SESSION['message'] . '</div>';
                    unset($_SESSION['message']); // Supprime le message après l'avoir affiché
                  }

                    ?>


<section> 
   
   <div class="iaLink"> 
 <h2> <a href="https://limewire.com/studio/image/create-image"target="_blank"> <button>  Générer votre propre image </button></a> </h2>
   </div>
<div class="formFeuille">
    
   

   <form action="index.php?action=updateFeuille&id=<?= $id ?>" method="POST" enctype="multipart/form-data">
    
   
   <label for="nomFeuille">Nom de la feuille</label> 
    <input type="text" name="nom" id="nom" value="<?= $requetteRecupFeuille["nom"] ?>">
    
 
    <label for="img">Ajouter une image</label>  
   
    <input type="file" name="img" id="img"  accept="image/*" >
    <span>  ne rien insérer si vous souhaitez garder votre image </span>
   

    
   <label for="descriptionLettre">Description de la lettre</label>            
   <textarea name="descriptionLettre" id="descriptionLettre"  rows="4" cols="50"><?= $requetteRecupFeuille["descriptionLettre"] ?> </textarea>

    
    <input type="submit" name="submitFeuille" value=" Modifiez votre feuille">
   
  </form>

</div>
</section>


<?php

$titre = "Modifier une feuille";
$titre_secondaire = "Modifier une feuille";
$contenu = ob_get_clean();
require "view/template.php";


?>