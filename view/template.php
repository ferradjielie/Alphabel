<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Public/css/style.css">
    
    <title><?=$titre?></title>

</head>

<body>
    <div id="wrapper" class="uk-container uk-container-expand" >    
        
        <nav class="navigation">
            <ul>
               <li><a href="index.php?action=home">ALPHABEL</a></li>
               <li><a href="index.php?action=ListLangues">LANGUES</a></li>

                <?php
                if(isset($_SESSION["user"])){ ?>
                    <li><a href="index.php?action=profile">PROFIL</a></li>
                    <li><a href="index.php?action=logout">DECONNEXION</a></li>
                <?php } else { ?>
                    <li><a href="index.php?action=register">INSCRIPTION</a></li>
                    <li><a href="index.php?action=login">CONNEXION</a></li>
                <?php } ?>
            </ul>
        </nav>

        <main>
            <div id="contenu" >
                
                <h1 class="">  </h1>
                <h2 class=""> <?= $titre_secondaire ?> </h2>
                
                <?= $contenu ?>
            </div>
        </main>          
        
        <footer class="colonnes">
            <div class="colonne">
                <h4> <a href="index.php?action=mentionsLegales">Mentions légales</a></h4>
           
                <div class="colonne">
                    <h4>Conditions générales d'utilisation</h4>
                </div>

                <div class="colonne">
                    <h4>Contact</h4>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>