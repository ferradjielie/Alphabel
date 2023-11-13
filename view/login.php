<?php
ob_start();
// session_start();?>

<section> 
<div class="formLogin">
    <form action="index.php?action=login" method="POST">
        <label for="email">Email</label> 
        <input type="email" name="email" id="email">

        <label for="password">Mot de passe</label> 
        <input type="password" name="password" id="password">

        <input type="submit" name="submit" value="Se connecter">


    </form>
    </div>
    
    </section>
<?php 

    $titre = "Connexion";
    $titre_secondaire = "Connexion";
    $contenu = ob_get_clean();
    require "view/template.php";
?>

