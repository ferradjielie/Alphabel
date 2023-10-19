<?php
 
 namespace Controller;
use Model\Connect ;

class UtilisateurController {

    public function ListUtilisateurs() {
          $pdo = Connect::seConnecter();
          $requeteUtilisateur= $pdo -> prepare(
            "SELECT id_utilisateur, email, pseudo
            FROM utilisateur");
          $requeteUtilisateur->execute();
         
        require "view/listUtilisateurs.php";
    }
















}
