<?php ob_start();?> 




<table class="uk-table uk-table-striped">
    <thead>
        <tr>
             <th>Liste des utilisateurs </th>
             
                   
        </tr>

    </thead>
    <tbody>
        <?php
             foreach($requeteUtilisateur->fetchAll() as $utilisateur) { ?>
             <tr>
             <td> <?= $utilisateur["id_utilisateur"] ?> <?= $utilisateur["email"] ?> <?= $utilisateur["pseudo"] ?> </td>
           
                   
                

             </tr>
        <?php    } ?>
        </tbody>
</table>

<?php 

    $titre = "Ma liste de d'utilisateurs";
    $titre_secondaire = "Liste des utilisateurs";
    $contenu = ob_get_clean();
    require "view/template.php";
?>