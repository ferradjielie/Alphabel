<?php

use Controller\LangueController;
use Controller\LettreController;
use Controller\UtilisateurController;




spl_autoload_register(function ($class_name){ 
include $class_name . '.php';

});

 
 $ctrlLangue = new LangueController();
 $ctrlLettre = new LettreController();
 $ctrlUtilisateur = new UtilisateurController();

 
 


 $id= (isset($_GET["id"])) ? $_GET["id"] : null;

if(isset($_GET["action"])) {
    switch ($_GET["action"]){
        case "ListLangues" : $ctrlLangue -> ListLangues(); break; 
        case "DetailLangues" : $ctrlLangue -> DetailLangues($id); break;  
        
        case "DetailLettres" : $ctrlLettre -> DetailLettres($id); break;
        case "formAjouterImg" : $ctrlLettre -> formAjouterImg(); break;
        case "AjouterImg": $ctrlLettre ->AjouterImg(); break;
        case "AjouterFeuille": $ctrlLettre -> AjouterFeuille(); break;

        case "ListUtilisateurs" : $ctrlUtilisateur -> ListUtilisateurs(); break;



    
    
    
    
    
    
    
    
    
    }}

        