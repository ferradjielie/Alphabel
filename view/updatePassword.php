<?php
ob_start();

?>

<section> 
<div class="formUpdatePassword">
    <form action="index.php?action=modifierPassword" method="POST">
       

        <label for="password">Mot de passe</label> 
        <input type="password" name="password" id="password" required>

        <label for="password2">Confirmation de votre nouveau mot de passe</label> 
        <input type="password" name="password2" id="password2" required>

       

        <input type="submit" name="submit" value="Confirmer modification">


    </form>
    </div>
    
    </section>
<?php 

    $titre = "Connexion";
    $titre_secondaire = "Connexion";
    $meta_description = "formulaire de connexion permettant à l'utilisateur de se connecter";
    $contenu = ob_get_clean();
    require "view/template.php";
?>

