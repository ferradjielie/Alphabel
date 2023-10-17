<?php

use Controller\LangueController;



spl_autoload_register(function ($class_name){ 
include $class_name . '.php';

});

 
 $ctrlLangue = new LangueController();
 


 $id= (isset($_GET["id"])) ? $_GET["id"] : null;

if(isset($_GET["action"])) {
    switch ($_GET["action"]){
        case "ListLangues" : $ctrlLangue -> ListLangues(); break; 
        case "detailLangues" : $ctrlLangue -> detailLangues(); break;    

    
    
    
    
    
    
    
    
    
    }}

        