
 <?php                      
 ob_start();


 ?>


<section> 
      <div class="register"> 
      <form action="index.php?action=register" method="POST">
       <label for="pseudo">Pseudo</label> 
       <input type="text" name="pseudo" id="pseudo"required placeholder="Saisir un pseudo">

       <label for="email">Mail</label> 
       <input type="email" name="email" id="email"required placeholder="Saisir une adresse mail">

       <label for="pass1"> Mot de passe</label> 
       <input type="password" name="pass1" id="pass1"required placeholder="Saisir un mot de passe">

       <label for="pass2">Confirmez le mot de passe </label> 
       <input type="password" name="pass2" id="pass2"required placeholder="Saisir un mot de passe">
      
       <input type="submit" name="submit" value="S'enregistrer">
       </div>
      </form>
</section>
 

 <?php 

    $titre = "Inscription";
    $titre_secondaire = "Inscription";
    $meta_description = "Inscription";
    $contenu = ob_get_clean();
    require "view/template.php";
?>
    

