<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titre?></title>
</head>

<body>
    <div   id="wrapper" class="uk-container uk-container-expand" >    
        <nav>
        <ul>
                <li><a href="index.php?action=ListLangues">Liste des langues</a></li>
                <li><a href="index.php?action=ListUtilisateurs">Liste des Utilisateurs</a></li>
               
            </ul>
        </nav>
        <main>
            <div id="contenu" >
                <h1 class="uk-heading-divider"> </h1>
                <h2 class="uk-heading-bullet"> <?= $titre_secondaire ?> </h2>
                <?= $contenu ?>
            </div>
        </main>             
    </div>
</body>

</html>