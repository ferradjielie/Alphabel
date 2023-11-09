<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mon profil</h1>
    <?php    
    if(isset($_SESSION["user"])) { ?>
        <?=$infosSession = $_SESSION["user"]; ?>
        <a href="index.php?action=logout">Se déconnecter</a>
    <a href="index.php?action=ListLangues">Liste des langues</a>
    <p><?= $infosSession["pseudo"] ?></p>

  
        <?php } ?>
            
    
    
    
   
    
</body>
</html>