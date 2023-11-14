<?php 

ob_start();


?>






<?php 

$titre = "Landing Page";
$titre_secondaire = "ALPHABEL";
$contenu = ob_get_clean();
require "view/template.php";
?>