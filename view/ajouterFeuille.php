<?php
ob_start()

?>

<section> 
    <div class="iaLink"> 
        <h2> <a href="https://limewire.com/studio/image/create-image"target="_blank"> <button>  Générer votre propre image </button></a> </h2>
   </div>

    <div class="formFeuille">
        <form action="index.php?action=AjouterFeuille&id=<?= $id ?>" method="POST" enctype="multipart/form-data">
            <label for="nomFeuille">Nom de la feuille</label> 
            <input type="text" name="nom" id="nom" required>

            <label for="img">Ajouter une image</label>  
            <input type="file" name="img" id="img" accept="image/*" required>

            <label for="descriptionLettre">Description de la lettre</label>            
            <textarea name="descriptionLettre" id="descriptionLettre" rows="4" cols="50" required></textarea>

            <input type="submit" name="submitFeuille" value="Ajouter une feuille">
        </form>
    </div>
</section>


<?php

$titre = "Ajouter une feuille";
$titre_secondaire = "Ajouter une feuille";
$meta_description = "formulaire d'ajout d'une lettre";
$contenu = ob_get_clean();
require "view/template.php";

?>