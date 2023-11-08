<?php

use Controller\LangueController;
use Controller\LettreController;
use Controller\UtilisateurController;
use Controller\SecurityController;




spl_autoload_register(function ($class_name){ 
include $class_name . '.php';

});

 
 $ctrlLangue = new LangueController();
 $ctrlLettre = new LettreController();
 $ctrlUtilisateur = new UtilisateurController();
 $ctrlSecurity = new SecurityController();

 
 


 $id= (isset($_GET["id"])) ? $_GET["id"] : null;

if(isset($_GET["action"])) {
    switch ($_GET["action"]){
        case "ListLangues" : $ctrlLangue -> ListLangues(); break; 
        case "DetailLangues" : $ctrlLangue -> DetailLangues($id); break;  
        
        case "DetailLettres" : $ctrlLettre -> DetailLettres($id); break;
        case "FormAjouterImg" : $ctrlLettre -> formAjouterImg(); break;
        case "AjouterImg": $ctrlLettre ->AjouterImg(); break;
        case "FormAjouterFeuille" : $ctrlLettre -> FormAjouterFeuille($id); break ;
        case "AjouterFeuille": $ctrlLettre -> AjouterFeuille($id); break;
        case "DetailFeuille": $ctrlLettre -> DetailFeuille($id); break;
        
        case "ListUtilisateurs" : $ctrlUtilisateur -> ListUtilisateurs(); break;
        
        case "register" : $ctrlSecurity -> register(); break;
        case "login" : $ctrlSecurity -> login(); break;
        case "logout": $ctrlSecurity -> logout(); break;



    
    
    
    
    
    
    
    
    
    }
}

        