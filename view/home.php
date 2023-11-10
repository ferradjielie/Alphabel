<?php 
ob_start();
session_start();

?>




<?php
// Vérifie si je suis connecté
if (isset($_SESSION["user"])) { ?>
    <a href="index.php?action=logout">Se déconnecter</a>
   
<?php } else { ?>
    <a href="index.php?action=login">Se connecter</a>
    <a href="index.php?action=register">S'inscrire</a>
<?php } ?>

<h1>ACCUEIL</h1>
<?php 
if (isset($_SESSION["user"])) {
    echo "Bienvenue " . $_SESSION["user"]["pseudo"];
}
?>

    


<?php 

    $titre = "Accueil";
    $titre_secondaire = "Accueil";
    $contenu = ob_get_clean();
    require "view/template.php";
?>
