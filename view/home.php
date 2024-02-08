<?php 
ob_start();


?>
<div class="conteneurAccueil"> 

<header>
  <h2>Apprenez l'alphabet de l'arabe et du russe sans difficulté! </h2>
  <h3> Cliquez sur l'un des deux titres pour accéder à la totalité de l'alphabet d'une langue</h3>
  <br>
</header>
<section>
<div class="languePresentation">
  <div class="arabePresentation">
      <div class="arabTitle">
         <h3> <a href="index.php?action=DetailLangues&id=1">العربي</a></h3>
      </div>

    <div class="lettresArabe">
       <ul>
         <li>ب</li>
          <li>ج</li>
          <li>س</li>
          <li>ق</li>
          <li>و</li>
          <li>ي</li>
         
        </ul>
        
    </div>
  </div>

   <div class="russianPresentation"> 
      <div class="russianTitle">
      <h3> <a href="index.php?action=DetailLangues&id=2">русский</a></h3>
      </div>
       
         <div class="lettresRusse">
          <ul>
              <li>Ж</li>
              <li>Д</li>
              <li>Г</li>
              <li>П</li>
              <li>Ф</li>
              <li>Ю</li>
             
          </ul>
          
        </div>
    </div>
</div>

</section>

<section>
<div class="feuilleExplication">
    <h3>
         Commencez votre apprentissage avec le concept de la feuille
    </h3>
        <p> après avoir pris connaissance de la forme ainsi que de la prononciation d'une lettre <br>
            choisissez une image mménotechnique permettant faisant le lien entre la forme de la lettre ainsi que sa prononciation
       </p>

  </div>

</section>

<section> 

           <div class="feuilleArabe">

               <div class="feuilleArabeUn">
                   <div class="titleFeuilleUn"> 
                     <h4>ف</h4>
                   </div>
                    <br>

                  <img src="uploads/faIMG.jpg" alt="fée volant au dessus du lit d'une enfant">
                      <figcaption> la lettre se prononce "fai"<br> nous pouvons observer que la lettre à la forme d'un lit <br>
                             et qu'il y a un point juste en haut. <br> Nous pouvons imaginer donc un lit et au dessus une fée(son fai)
                      </figcaption>
               </div>

               <div class="feuilleArabeDeux">
                   <div class="titleFeuilleDeux">
                     <h4>م</h4>
                    </div>
                    <img src="uploads/208614670965be7a687d0df55961588765ae67958d3f2mime image.jpg" alt="un mime marchant avec une canne">
                    <figcaption>
                      la lettre se prononce "mim" et à la forme d'une canne <br>
                      ainsi on peut imaginer un mime imitant une personne agée marchant avec une canne 
                    </figcaption>
               </div>
           </div>

    </section>
    <section>
      <div class="feuilleRusse">
          <div class="feuilleRusseUn">

                <div class="titleFeuilleTrois">
                  <h4>Л</h4>
                </div>
                <img src="uploads/loup.jpg" alt="loup en train de glisser sur un toboggan">
                <figcaption>
                  La lettre se prononce "el" un peu comme le "l" français <br>
                  la lettre à la forme d'un toboggan nous pouvons ainsi imaginer un loup glissant sur un toboggan <br>
                  car le mot loup commence par la lettre "l"
                </figcaption>
          </div>

          <div class="feuilleRusseDeux">

            <div class="titleFeuilleQuatre">
              <h4>П </h4>
            </div>
              <img src="uploads/poutine.png" alt="Vladimir Poutine faisant une traction">
                <figcaption>
                 la lettre se prononce "P" et à la forme d'une barre de traction <br>
                 nous pourions imaginer Poutine dont le nom commence par la lettre P <br>
                 faire une traction
               </figcaption>
          </div>

       </div>
    </section>
    <br><br><br>

    <section>
    <div class="presentationNewLangue"> 
         <h2> Les prochaines langues disponibles seront le grec et l'araméen ! </h2>
      </div>

 <div class="prochaineLangues">
        <div class="arameenPresentation">
            <div class="arameenTitle">
              <h3>ܐܪܡܝܐܝܢ <h3>
            </div>

           <div class="lettresArameen">
            <ul>
             <li>ܛ</li>
              <li>ܣ</li>
              <li>ܓ</li>
              <li>ܫ</li>
              <li>ܬ</li>
             <li>ܡ</li>
         
           </ul>
        </div>
      </div>


      <div class="grecPresentation">
          <div class="grecTitle">
            <h3>Αραμαϊκά</h3>
          </div>
           
          <div class="lettresGrec">
            <ul>
            <li>Σ </li>
            <li>Ψ</li>
            <li>Ω</li>
            <li>Δ</li>
            <li>Φ</li>
            <li>Ξ</li>
         
           </ul>
         </div>


      </div>
  
    </section>

    
 </div>

<?php 

    $titre = "LANDING PAGE";
    $titre_secondaire = "BIENVENUE SUR ALPHABEL";
    $meta_description = " Page d'accueil présentant l'application";
    $contenu = ob_get_clean();
    require "view/template.php";
?>
