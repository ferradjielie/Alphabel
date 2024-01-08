<?php 

ob_start();


?>




    
    <?php   

    if(isset($_SESSION["user"])) {
    $infosSession = $_SESSION["user"] ;}
    


        ?>
        <div class="profile"> 
        <div class="profileLink"> 
        <a href="index.php?action=logout">Se déconnecter</a>
        <a href="index.php?action=ListLangues">Liste des langues</a>
        
       </div>

        <div class="profilePara"> 
          <p>Mon pseudo :<?= $infosSession["pseudo"] ?></p>
           <p>Mon email : <?= $infosSession["email"] ?></p>
           <button> <a href="index.php?action=formModifierPassword"> modifier votre mot de passe</a> </button>
          
           <button><a href="index.php?action=formModifierEmail">modifier votre email</a></button>

    </div>
    
    </div>
     

    
    
        <?php 

$titre = "Mon profil";
$titre_secondaire = "Mon profil";
$meta_description = "cette page va afficher les informations de l'utilisateur";
$contenu = ob_get_clean();
require __DIR__ . '/template.php';

?>
    
    