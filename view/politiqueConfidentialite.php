<?php 
ob_start();


?>



















<?php 

$titre = "Politique de confidentialité";
$titre_secondaire = "Politique de confidentialité";
$meta_description = "affiche la politique de confidentialité";
$contenu = ob_get_clean();
require "view/template.php";
?>

