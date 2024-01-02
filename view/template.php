<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $meta_description ?>">
    <link rel="stylesheet" href="./Public/css/style.css">
    
    <title><?=$titre?></title>

</head>

<body>


    <div id="wrapper" class="uk-container uk-container-expand" >    
        
        <nav class="navigation">
            <ul>
          <li>    </li>
    
               <li><a href="index.php?action=home">ALPHABEL</a></li>
               <li><a href="index.php?action=ListLangues">LANGUES</a></li>
              

                <?php
                if(isset($_SESSION["user"])){ ?>
                    <li><a href="index.php?action=profile"><?php if(isset($_SESSION["user"])) {
            echo  $_SESSION["user"] ["pseudo"] ;} ?></a></li>
                    <li><a href="index.php?action=logout">DECONNEXION</a></li>
                    
                <?php } else { ?>
                    <li><a href="index.php?action=register">INSCRIPTION</a></li>
                    <li><a href="index.php?action=login">CONNEXION</a></li>
                   
                <?php } ?>
            </ul>
        </nav>

        

        <main>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-danger" role="alert">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']); // Supprime le message après l'avoir affiché
        }

        ?>
            <div id="contenu" >
                
                <h1 class="">  </h1>
                <h2 class=""> <?= $titre_secondaire ?> </h2>
                
                <?= $contenu ?>
            </div>
        </main>          
        
        <footer class="colonnes">
            <div class="colonne">
                <h4> <p>  <a href="index.php?action=mentionsLegales">Mentions légales</a> </p> </h4>
           
                <div class="colonne">
                    <h4> <p>  <a href="index.php?action=conditionsGenerales">Conditions générales d'utilisation</a>  </p> </h4>
                </div>

                <div class="colonne">
                <h4> <p> <a href="index.php?action=politiqueConfidentialite">Politique de confidentialité</a> </p> </h4>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>