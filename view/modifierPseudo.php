<?php
ob_start();


?>

<section> 
<div class="formUpdatePseudo">
    <form action="index.php?action=modifierPseudo" method="POST">
        <label for="email">modifier mon pseudo</label> 
        <input type="text" name="pseudo" id="pseudo" required>

       
       
      

        <input type="submit" name="submit" value="confirmer la modification">


    </form>
</div>
    
    </section>
<?php 

    $titre = "Modifier email";
    $titre_secondaire = "Modifier pseudo";
    $meta_description = "formulaire de connexion permettant à l'utilisateur de modifier son pseudo";
    $contenu = ob_get_clean();
    require "view/template.php";
?>

