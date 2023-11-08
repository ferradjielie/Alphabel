<?php 
ob_start();
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Vérifie si je suis connecté
if (isset($_SESSION["user"])) { ?>
    <a href="index.php?action=logout">Se déconnecter</a>
    <a href="index.php?action=profile">Mon profil</a>
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

    
</body>

<?php 

    $titre = "Accueil";
    $titre_secondaire = "Accueil";
    $contenu = ob_get_clean();
    require "view/template.php";
?>
</html>