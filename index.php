<?php

session_start();

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
        
        
       //-------------------LANGUE-----------------------
       
       case "ListLangues" : $ctrlLangue -> ListLangues(); break; 
       
       
       
       
        case "DetailLangues" : $ctrlLangue -> DetailLangues($id); break;
         //-----------------FIN LANGUE-----------------------  
     
     
     
       //------------FEUILLE-----------------------------
        case "DetailLettres" : $ctrlLettre -> DetailLettres($id); break;
      //  case "FormAjouterImg" : $ctrlLettre -> formAjouterImg(); break;
      //  case "AjouterImg": $ctrlLettre ->AjouterImg(); break;
        case "FormAjouterFeuille" : $ctrlLettre -> FormAjouterFeuille($id); break ;
        
        case "AjouterFeuille": $ctrlLettre -> AjouterFeuille($id); break;

        case "updateFeuille" : $ctrlLettre -> updateFeuille($id); break ;
        
        case "formUpdateFeuille" : $ctrlLettre -> formUpdateFeuille($id); break ;
        
        
        case "DetailFeuille": $ctrlLettre -> DetailFeuille($id); break;
        
        case "DeleteFeuille": $ctrlLettre ->DeleteFeuille($id); break;
       
        case "FormAjouterAudio" : $ctrlLettre ->FormAjouterAudio($id); break ;
        
        case "AjouterAudio": $ctrlLettre -> AjouterAudio($id); break;
        //-----------FIN FEUILLE------------------------------
        
        //    ---------------USER-----------------------------------
        case "ListUtilisateurs" : $ctrlUtilisateur -> ListUtilisateurs(); break;
        //-----------------FIN USER-------------------------------
        
        
        
        //------------INSCRIPTION/CONNEXION----------------
        case "register" : $ctrlSecurity -> register(); break;
        
        case "login" : $ctrlSecurity -> login(); break;
        
        case "home" : $ctrlSecurity -> home(); break ;
        
        case "logout" : $ctrlSecurity -> logout(); break;
        
        case "profile" : $ctrlSecurity -> profile(); break;
        
        case "mentionsLegales" : $ctrlSecurity -> mentionsLegales(); break;

        case "conditionsUtilisations" : $ctrlUtilisateur ->  conditionsGenerales(); break;


        //------------FIN INSCRIPTION/CONNEXION--------------------

 
       }
}

        