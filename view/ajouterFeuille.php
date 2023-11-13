<?php
ob_start()

?>
<section> 

<div class="formFeuille">
    
   

   <form action="index.php?action=AjouterFeuille&id=<?= $id ?>" method="POST" enctype="multipart/form-data">
    
   
   <label for="nomFeuille">Nom de la feuille</label> 
    <input type="text" name="nom" id="nom">
 
    <label for="img">Ajouter une image</label>  
   
    <input type="file" name="img" id="img" accept="image/*">
   

    
    <!-- Ajout du bouton "Upload" pour le formulaire d'ajout d'image -->
    
 
    <label for="descriptionLettre">Description de la lettre</label>            
    <input type="text" name="descriptionLettre" id="descriptionLettre"> 

    
    <input type="submit" name="submitFeuille" value="Ajouter une feuille">
   
</form>

</div>
</section>


<?php

$titre = "Ajouter une feuille";
$titre_secondaire = "Ajouter une feuille";
$contenu = ob_get_clean();
require "view/template.php";


?>