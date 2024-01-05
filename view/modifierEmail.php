<?php
ob_start();


?>

<section> 
<div class="formLogin">
    <form action="index.php?action=modifierEmail" method="POST">
        <label for="email">modifier mon email</label> 
        <input type="email" name="email" id="email" required>

       
       
      

        <input type="submit" name="submit" value="confirmer la modification">


    </form>
    </div>
    
    </section>
<?php 

    $titre = "Modifier email";
    $titre_secondaire = "Modifier email";
    $meta_description = "formulaire de connexion permettant à l'utilisateur de modifier son email";
    $contenu = ob_get_clean();
    require "view/template.php";
?>

