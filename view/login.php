<?php
ob_start();
//$recupPassword =$requetePassword ->fetch(); 

?>

<section> 
<div class="formLogin">
    <form action="index.php?action=login" method="POST">
        <label for="email">Email</label> 
        <input type="email" name="email" id="email" required>

        <label for="password">Mot de passe</label> 
        <input type="password" name="password" id="password" required>
       
      

        <input type="submit" name="submit" value="Se connecter">


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

