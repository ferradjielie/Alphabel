<?php
ob_start()

?>

<form action="index.php?action=AjouterAudio&id=<?= $id ?>"  method="POST" enctype="multipart/form-data">
<input type="file" name="enregistrement" id="enregistrement" required>

<input type="submit" name="submitAudio" value="ajouter Audio">

</form>
 
 
 
 
 
 <?php
$titre = "Ajouter un audio";
$titre_secondaire = "Ajouter un audio";
$contenu = ob_get_clean();
require "view/template.php";


?>