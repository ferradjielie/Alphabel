<?php 
ob_start();


?>
<div class="mentionLegales"> 

<p>
        1. Nom de l'entreprise : ALPHABEL


</p>
<br>

<p>   
        2. Forme juridique : Auto-entrepreneur

 </p>
 <br>

<p>
       3. Adresse du siège social : 202 avenue de Colmar, 67100 Strasbourg

</p>

<br>


  <p>   
     4. Directeur de la publication : FERRADJI Elie

  </p>
  
  <br>

<p>
       5. Adresse e-mail de contact : ferradji.elie@outlook.fr
</p>

<br>


 <p>
          6. Hébergement : Site non hébergé
 </p>
 
 <br>

<p>
         Droits de propriété intellectuelle : Le contenu de ce site est protégé par le droit d'auteur. Toute reproduction ou utilisation non autorisée du contenu est strictement interdite.
</p>

<br>

<p>
      Conditions d'utilisation : Les utilisateurs du site sont invités à lire et à accepter les conditions d'utilisation disponibles sur ce <strong>  <a href="index.php?action=conditionsGenerales">lien</a> </strong>
</p>
<br>


<p>
     Politique de confidentialité : Les informations sur la collecte et l'utilisation des données personnelles sont détaillées dans notre politique de confidentialité disponible sur [insérer le lien vers la politique de confidentialité, si applicable].
</p>


</div>




<?php 

$titre = "Mentions légales";
$titre_secondaire = "Mentions légales";
$meta_description = "Mentionq légales d'Alphabel";
$contenu = ob_get_clean();
require "view/template.php";
?>
