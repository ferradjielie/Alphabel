<?php
 
 namespace Controller;
use Model\Connect ;

class   LangueController { 
    public function ListLangues () {
        $pdo = Connect::seConnecter();
        $requeteLangue = $pdo -> prepare(
        "SELECT id_langue, nomLangue
        FROM  langue");
        $requeteLangue->execute();

        require "view/listLangues.php";

    }

     
        public function DetailLangues ($id) {
            $pdo = Connect::seConnecter();
           
              // on va pouvoir accéder à l'alphabet de chaque langue via id_langue              rtyyjyjj
             $requeteLangue= $pdo -> prepare("SELECT id_lettre, nomLettre FROM lettre WHERE id_langue = :id");
             $requeteLangue->execute(["id" => $id]);
             
             $requeteFeuille= $pdo -> prepare("SELECT nomLettre,  descriptionLettre 
             FROM feuille
             INNER JOIN lettre
             ON lettre.id_lettre = feuille.id_lettre
             AND lettre.id_lettre = :id");
             $requeteFeuille->execute(["id" => $id]);


             





             require "view/detailLangues.php";
        }
        
    }

