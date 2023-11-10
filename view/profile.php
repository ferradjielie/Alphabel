<?php 

ob_start();


?>



    <h1>Mon profil</h1>
    
    <?php   

if(isset($_SESSION["user"])) {
 $infosSession = $_SESSION["user"] ;}
    


      ?>

    <a href="index.php?action=logout">Se déconnecter</a>
    <a href="index.php?action=ListLangues">Liste des langues</a>
    <p>Mon pseudo :<?= $infosSession["pseudo"] ?></p>
    <p>Mon email : <?= $infosSession["email"] ?></p>

     

    
    
        <?php 

$titre = "Mon profil";
$titre_secondaire = "Mon profil";
$contenu = ob_get_clean();
require __DIR__ . '/template.php';

?>
    
   