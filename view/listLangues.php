<?php ob_start();?> 




<table class="uk-table uk-table-striped">
    <thead>
        <tr>
             <th>Nom des langues </th>
             
                   
        </tr>

    </thead>
    <tbody>
        <?php
             foreach($requeteLangue->fetchAll() as $langue) { ?>
             <tr>
             <td ><a href="index.php?action=detailLangues&id=<?= $langue["id_langue"] ?> "><?= $langue["nomLangue"] ?> </a> </td>
           
                   
                

             </tr>
        <?php    } ?>
        </tbody>
</table>

<?php 

    $titre = "Ma liste de langues";
    $titre_secondaire = "Liste des langues";
    $contenu = ob_get_clean();
    require "view/template.php";
?>