<?php
ob_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
form {
    width: 300px; /* Définit une largeur fixe pour le formulaire */
    margin: 0 auto; /* Centre le formulaire horizontalement sur la page */
}

/* Style pour les étiquettes des champs de formulaire */
label {
    display: block; /* Les étiquettes sont affichées en tant que bloc pour une meilleure lisibilité */
    margin-bottom: 5px; /* Ajoute un espace en bas de chaque étiquette */
}

/* Style pour les champs de texte et les champs de fichier */
input[type="text"],
input[type="file"] {
    width: 100%; /* Les champs de texte et de fichier occupent 100% de la largeur du conteneur */
    padding: 10px; /* Ajoute un espace interne de 10px autour des champs */
    margin-bottom: 15px; /* Ajoute un espace en bas de chaque champ */
    border: 1px solid #ccc; /* Ajoute une bordure de 1px autour des champs */
    border-radius: 5px; /* Arrondit les coins des champs */
}

/* Style pour les boutons de soumission */
input[type="submit"] {
    background-color: #0073e6; /* Définit la couleur de fond du bouton "Submit" */
    color: #fff; /* Définit la couleur du texte du bouton "Submit" */
    padding: 10px 15px; /* Ajoute un espace interne au bouton */
    border: none; /* Supprime la bordure du bouton */
    border-radius: 5px; /* Arrondit les coins du bouton */
    cursor: pointer; /* Change le curseur en main au survol */
}

/* Style spécifique pour le bouton "Ajouter Image" */
input[name="submitImg"] {
    background-color: #00cc66; /* Définit une couleur de fond différente pour ce bouton */
}

/* Style spécifique pour le bouton "Ajouter une feuille" */
input[name="submitFeuille"] {
    background-color: #ff6600; /* Définit une couleur de fond différente pour ce bouton */
}





    </style>
    
    
    
    <title>Document</title>
</head>
<body>
    
</body>
</html>
   <form action="index.php?action=AjouterFeuille&id=<?= $id ?>" method="POST" enctype="multipart/form-data">
    
   
   <label for="nomFeuille">Nom de la feuille</label>
    <input type="text" name="nom" id="nom">
 
    <label for="schema">Ajouter une image</label>
    <input type="file" name="schema" id="schema">
    <!-- Ajout du bouton "Upload" pour le formulaire d'ajout d'image -->
    

    <label for="descriptionLettre">Description de la lettre</label>
    <input type="text" name="descriptionLettre" id="descriptionLettre">
    
    <input type="submit" name="submitFeuille" value="Ajouter une feuille">
   
</form>

<?php

$titre = "Ajouter une feuille";
$titre_secondaire = "Ajouter une feuille";
$contenu = ob_get_clean();
require "view/template.php";


?>