<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="index?action=register" method="POST">
       <label for="pseudo">Pseudo</label> 
       <input type="text" name="pseudo" id="pseudo">

       <label for="email">Mail</label> 
       <input type="email" name="email" id="email">

       <label for="pass1"> Mot de passe</label> 
       <input type="password" name="pass1" id="pass1">

       <label for="pass2">Confirmez le mot de passe </label> 
       <input type="password" name="pass2" id="pass2">
      
       <input type="submit" name="submit" value="S'enregistrer">
       
 </form>
    
</body>
</html>