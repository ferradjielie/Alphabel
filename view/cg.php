<?php 
ob_start();
?>


<div class="conditionsUtilisation">

   <div class="para"> 
      <h3>Contenu </h3> 
      <p>Notre Service vous permet de poster, lier, stocker et autrement rendre disponible certaines informations, textes, images.
   <br> Vous êtes seul responsable du contenu que vous publiez en utilisant le Service, y compris de sa légalité, de sa fiabilité, et de sa pertinence.</p>
</div>

<br>
<div class="para"> 

   <h3> Comptes</h3>
   <p>
         Lorsque vous créez un compte chez nous, vous devrez nous fournir avec des renseignements qui sont exactes, complètes et à jour en tout temps. <br>Le non respect de cette obligation constitue une violation des Conditions, qui peut entraîner la fermeture immédiate de votre compte sur notre Service.

<br>     Vous êtes responsables de la sauvegarde du mot de passe que vous utilisez pour accéder au Service et pour toutes activités et actions qui pourront être faites avec votre mot de passe, que le mot de passe soit avec notre Service ou un service tiers. <br>

         Vous acceptez de ne pas divulguer votre mot de passe à une tierce partie. Vous devez nous informer sans délai de toute violation de sécurité ou utilisation non autorisée de votre compte.
</p>
</div>

<br>

<div class="para"> 

   <h3>  Liens vers d’autres sites Web </h3>

<p>
      Le Service peut fournir des liens vers des sites tiers ou des services qui ne sont pas possédées ou contrôlées par ALPHABEL. <br>
      ALPHABEL n’a aucun contrôle et n’assume aucune responsabilité pour le contenu, les politiques de confidentialité, ou les pratiques des sites tiers. <br>
      Vous reconnaissez et acceptez également que ALPHABEL ne peut être tenu responsable, directement ou indirectement, de tout dommage ou perte causé ou présumé avoir été causé par ou en relation avec l’utilisation <br> de ou toute action sur la foi de tels contenus, marchandises ou services disponibles sur ou par l’entremise de tels sites et services.

</p>
</div>
<br>
<div class="para"> 
   <h3> Résiliation</h3>
   <p>
   
      Nous pouvons résilier ou suspendre votre compte immédiatement, sans notification préalable ou responsabilité, pour n’importe quelle raison, incluant sans s’y limiter la violation des Conditions..
</p>
</div>

<br>
<div class="para"> 
   <h3>Modifications </h3>
   <p>
      Nous réservons le droit de modifier ou remplacer ces Conditions à tout moment. Si un révision est notable nous vous aviserons au moins 15 jours à l’avance des changements qui seront effectués. <br>Ce qui constitue une révision notable sera déterminé à notre seule appréciation.
      En continuant d’accéder ou utiliser notre Service après toutes révisions entrent en vigueur, vous acceptez d’être lié aux conditions révisés. <br> Si vous n’acceptez pas ces nouvelles conditions, vous n’êtes plus autorisés à utiliser le site Web et le Service.
</p>
</div>

<br>
<div class="para"> 

<h3> Sauvegarde et protection des données</h3>
<p>
      Nous prenons les dispositions nécessaires pour assurer la sécurité des données sauvegardées sur nos serveurs en suivant les recommandations de la CNIL comme effectuer des sauvegardes fréquentes des données. <br>Stocker au moins une sauvegarde sur un site extérieur et isoler au moins une sauvegarde hors ligne <br>Toutefois, vous devez aussi sauvegarder ces données, car nous ne pouvons pas être responsables d’éventuelles pertes de données ou des conséquences d’un piratage informatique de nos serveurs.

</p>

</div>

























</div>









<?php 

$titre = "Conditions générales d'utilisations";
$titre_secondaire = "Conditions générales d'utilisations";
$contenu = ob_get_clean();
require "view/template.php";
?>