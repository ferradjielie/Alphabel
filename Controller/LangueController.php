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
            $requeteLangue2 = $pdo -> prepare("SELECT nomLettre
            FROM lettre
            WHERE id_langue = 1 AND WHERE id = :id");
             $requeteLangue->execute(["id" => $id]);
        }
        
    }

