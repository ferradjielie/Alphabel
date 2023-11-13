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
                <li><a href="">ALPHABEL</a></li>
                <li><a href="index.php?action=ListLangues">LANGUES</a></li>
                <li><a href="index.php?action=register">INSCRIPTION</a></li>
                <li><a href="index.php?action=login">CONNEXION</a></li>
           
                
             
             
               
            </ul>
        </nav>

        <main>
            <div id="contenu" >
                <h1 class=""> </h1>
                <h2 class=""> <?= $titre_secondaire ?> </h2>
                <?= $contenu ?>
            </div>
        </main>          
        
        <footer>
        <div class="colonnes">
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        </footer>
    </div>
</body>

</html>