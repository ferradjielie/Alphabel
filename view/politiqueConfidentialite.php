<?php 
ob_start();


?>

<div class="politiqueConfi">

    <h3>Informations sur votre Entreprise : </h3>
    <p>
        Alphabel
        202 Avenue de Colmar
        67000 Strasbourg
    </p>

    <h3> Données Collectées :</h3>
    <p>
         Lors de l'inscription à notre site, nous collectons les informations suivantes via un formulaire : l'adresse e-mail, un mot de passe et un pseudo.
    </p>

    <h3> Utilisation des Données : </h3>
    <p>
            Les données collectées (adresse e-mail et mot de passe) sont utilisées pour permettre à l'utilisateur de se connecter à l'application. 
            Le pseudo sert de repère et facilite l'utilisation de certaines fonctionnalités de l'application.
           
    </p>

    <h3>Stockage des Données : </h3>
    <p>
         Les données personnelles sont stockées dans une base de données sécurisée. 
         Cette mesure vise à protéger les données de nos utilisateurs et à conserver leurs informations tant qu'ils sont inscrits à l'application, sauf s'ils décident d'invoquer leur droit à l'oubli conformément au RGPD.
    </p>

    <h3>Partage des Données : </h3>
    <p> 
        Actuellement, nous ne partageons pas les données des utilisateurs. <br>
        Si cela venait à changer, nous modifierions nos conditions générales d'utilisation, demandant aux utilisateurs de consentir à ce partage. <br>
        En cas de refus, l'utilisateur ne pourra plus utiliser l'application et pourra demander la suppression de ses données.
    </p>

    <h3>Conservation des Données : </h3>
    <p>
        Nous conservons les données de manière permanente, sauf si l'utilisateur choisit d'invoquer son droit à l'oubli.
    </p>

    <h3> Droits des Utilisateurs :</h3>
    <p>
    Les utilisateurs peuvent consulter leurs données à tout moment conformément au droit d'accès direct (CNIL). <br>
     Le droit à la rectification peut être exercé via un formulaire, et le droit à la suppression est disponible comme précisé précédemment.
    </p>

   
    <h3> Sécurité des Données :</h3>

    <p>
    Nous utilisons des mesures de sécurité, notamment la fonction PHP filter_input pour filtrer les données <br> et un algorithme de hachage fort pour sécuriser les mots de passe.
    </p>

   

    
    

    <h3> Conformité Juridique :</h3>
    <p>
             UE et France
            Alphabel respecte les lois de l'Union européenne et de la France en matière de protection des données, y compris le Règlement Général sur la Protection des Données (RGPD) et les réglementations de la Commission Nationale de l'Informatique et des Libertés (CNIL).


    </p>
    
    <h3> </h3>
    <p>

    </p>








</div>

















<?php 

$titre = "Politique de confidentialité";
$titre_secondaire = "Politique de confidentialité";
$meta_description = "affiche la politique de confidentialité d'Alphabel";
$contenu = ob_get_clean();
require "view/template.php";
?>

