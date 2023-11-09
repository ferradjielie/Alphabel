<?php
ob_start();
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?action=login" method="POST">
        <label for="email">Email</label> <br>
        <input type="email" name="email" id="email">

        <label for="password">Mot de passe</label> 
        <input type="password" name="password" id="password">

        <input type="submit" name="submit" value="Se connecter">


    </form>
    
</body>
<?php 

    $titre = "Se connecter";
    $titre_secondaire = "Se connecter";
    $contenu = ob_get_clean();
    require "view/template.php";
?>

</html>