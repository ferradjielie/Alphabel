<?php 
ob_start();


?>




<section> 
    <div class="accueil"> 
    
  
     <div class="secondtitle"> 
        <h2>APPRENNEZ L'ALPHABET D'UNE LANGUE TOUT EN VOUS AMUSANT</h2> 
    </div>
           
    
      <div class="explication"> 
    <h3>  <p>Choisissez une langue disponible et commencez votre apprentissage avec le concept de la feuille !</p></h3>

    <h2> QU'EST CE QU'UNE FEUILLE ?</h2>
   <h4>  
    <p> 
        Une feuille c'est le fait d'assimiler la forme d'une lettre ainsi que sa prononciation à une image afin de faciliter sa mémorisation.
    </p>
    <p>Cela sera généré grâce à un formulaire</p>
  </h4>
   
</div>
    

</div>
</section>




    


<?php 

    $titre = "LANDING PAGE";
    $titre_secondaire = "BIENVENUE SUR ALPHABEL";
    $contenu = ob_get_clean();
    require "view/template.php";
?>
