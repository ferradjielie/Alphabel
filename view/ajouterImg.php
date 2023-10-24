<?php
ob_start()

?>



    <form action="index.php?action=ajouterImg"  method="POST" enctype="multipart/form-data">
        <p> Ajouter une image</p>
        
        <input type="file"   name="fileImg" id="fileImg">
        <input type="submit"  name="sub" value="Upload"> 

    </form>
    
<?php

$titre = "Ajouter une image";
$titre_secondaire = "Ajouter une image";
$contenu = ob_end_clean();
require "view/template.php";


?>
