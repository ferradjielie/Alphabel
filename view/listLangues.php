<?php ob_start();?> 



<table class="uk-table uk-table-striped">
    <thead>
       
           
                   
        

    </thead>
    <tbody>
     <div class="langues"> 
        <?php
             foreach($requeteLangue->fetchAll() as $langue) { ?>
             <tr>
                <div class="langue"> 
              <a href="index.php?action=DetailLangues&id=<?= $langue["id_langue"] ?> "><?= $langue["nomLangue"] ?> </a> 
                
               </div>
                   
                

             </tr>
        <?php    } ?>
    </div>
        </tbody>
</table>

<?php 

    $titre = "Ma liste de langues";
    $titre_secondaire = "Liste des langues";
    $meta_description = "affiche la liste des langues disponibles";
    $contenu = ob_get_clean();
    require "view/template.php";
?>