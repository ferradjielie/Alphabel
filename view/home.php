<?php 
ob_start();


?>




<section> 
    <div class="accueil"> 
    
  
     <div class="secondtitle"> 
        <h2>APPRENNEZ <strong>L'ALPHABET </strong> D'UNE <strong>LANGUE </strong> TOUT EN VOUS AMUSANT</h2> 
    </div>
           
    
  <div class="explication"> 
    <h3>  <p>Choisissez une langue disponible et commencez votre <strong>apprentissage</strong> avec le concept de la <strong>feuille </strong>!</p></h3>

    <h2> QU'EST CE QU'UNE FEUILLE ?</h2>
    <hr>
   <h4>  
    <p> 
        Une feuille c'est le fait d'assimiler la forme d'une lettre ainsi que sa prononciation à une image afin de faciliter sa mémorisation.
    </p>
    <p>Cela sera généré grâce à un formulaire via les étapes suivantes :</p>
  
      <ol>
        <li>1. On donne un nom à notre feuille</li>
        <li>2. On insère une image</li>
        <li>3. On écrit une description justifiant le lien entre la lettre et l'image choisi</li>
      </ol>
      <hr>
      <br><br>
     <h3>EXEMPLE AVEC LA LETTRE П</h3>
     <ol>
      <li>1.Ma feuille</li>
     <div class="img">  <li>2.<img src="uploads/poutine.png" alt="vladimir poutine entrain de faire une traction"></li> </div>
      <li>3. La lettre П ressemble à une barre de traction et elle se prononce un peu près comme un P français et le nom poutine commence par P</li>
     </ol>
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
