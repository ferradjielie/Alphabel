<?php
ob_start()

?>
<form action="index.php?action=AjouterImg" method="POST" enctype="multipart/form-data">  
    <input type="file"   name="fileImg" id="fileImg">
    <input type="submit"  name="submitImg" value="Upload Image"> 
</form>

    
<?php

$titre = "Ajouter une image";
$titre_secondaire = "Ajouter une image";
$contenu = ob_get_clean();
require "view/template.php";


?>
