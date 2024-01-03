<?php
ob_start();
$requetteRecupLogin = $requetteRecupLogin->fetch();



?>


<section> 
   
   <div class="iaLink"> 
        <h2>
       <a href="https://limewire.com/studio/image/create-image"target="_blank"> <button>  Générer votre propre image </button></a> 
        </h2>
   </div>
        <div class="formFeuille">
    
   

   <form action="index.php?action=updateFeuille&id=<?= $id ?>" method="POST" enctype="multipart/form-data">
    
   
     <label for="nomFeuille">Nom de la feuille</label> 
          <input type="text" name="nom" id="nom" value="<?= $requetteRecupLogin["nom"] ?>" required>
    
 
    <label for="img">Ajouter une image</label>  
   
           <input type="file" name="img" id="img"  accept="image/*" required>
    <span>  ne rien insérer si vous souhaitez garder votre image </span>
   

    
   <label for="descriptionLettre">Description de la lettre</label>            
          <textarea name="descriptionLettre" id="descriptionLettre"  rows="4" cols="50"><?= $requetteRecupLogin["descriptionLettre"] ?> </textarea required>

    
           <input type="submit" name="submitFeuille" value=" Modifiez votre feuille">
   
  </form>

</div>
</section>


<?php

$titre = "Modifier une feuille";
$titre_secondaire = "Modifier une feuille";
$meta_description = "formulaire modifiant une feuille";
$contenu = ob_get_clean();
require "view/template.php";


?>