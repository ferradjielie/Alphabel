<?php
ob_start()

?>
    <form action="index.php?action=AjouterFeuile" method="POST" enctype="multipart/form-data">
        <label for="nom"> Nom de la feuille</label>
        <input type="text" name="nom" id="nom">
     
        <label for="schéma"> image</label>
        <input type="text" name="schéma" id="schéma">

        <label for="enregistrement">prononciation de la lettre</label>
        <input type="text">

        <label for="descriptionLettre">Description de la lettre</label>
        <input type="text">

        <input type="submit" name="submit" id="Ajouter une feuille">
      
      
      
      
    </form>
    
    
<?php

$titre = "Ajouter une feuille";
$titre_secondaire = "Ajouter une feuille";
$contenu = ob_get_clean();
require "view/template.php";


?>