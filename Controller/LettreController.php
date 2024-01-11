<?php

namespace Controller;
use Model\Connect;


class LettreController {

    public function DetailLettres($id) {
        $pdo = Connect::seConnecter();

        $requeteLettre = $pdo->prepare("SELECT nomLettre, enregistrement
        FROM lettre
        WHERE lettre.id_lettre = :id");

        $requeteLettre->execute(["id" => $id]);

        $requeteFeuilles = $pdo->prepare("SELECT id_feuille,nom, nomLettre, feuille.id_utilisateur AS id_utilisateur
             FROM feuille
             INNER JOIN lettre
             ON lettre.id_lettre = feuille.id_lettre
             INNER JOIN utilisateur
             ON utilisateur.id_utilisateur = feuille.id_utilisateur
             WHERE lettre.id_lettre = :id");
        $requeteFeuilles->execute(["id" => $id]);

        require "view/detailLettres.php";
    }

    public function DetailFeuille($id) {
        $pdo = Connect::seConnecter();
        $requeteDetailFeuille = $pdo -> prepare("SELECT id_utilisateur, id_feuille, nom, img, descriptionLettre
        FROM feuille
        INNER JOIN lettre
        ON lettre.id_lettre = feuille.id_lettre
        WHERE id_feuille = :id");
        $requeteDetailFeuille -> execute(["id" =>$id]);

        $texte = filter_input(INPUT_POST, "texte", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
       // $id_commentaire = filter_input(INPUT_POST, "commentaire",  FILTER_SANITIZE_FULL_SPECIAL_CHARS );
       
        $recupCommentaire = $pdo -> prepare("SELECT id_feuille, utilisateur.id_utilisateur,pseudo, DATE_FORMAT(datePublication, '%d-%m-%Y %H:%i') AS dateCommentaire, texte FROM commentaire
        INNER JOIN utilisateur
        ON utilisateur.id_utilisateur = commentaire.id_utilisateur

        WHERE id_feuille = :id
        ORDER BY datePublication");

        $recupCommentaire -> execute(["id" => $id
        ]);
    
        
        require "view/detailFeuille.php";
    }

    public function recupererFeuille() {
        $pdo = Connect::seConnecter();
        if ($_SESSION["user"]) {
            $id = $_SESSION["user"] ["id_utilisateur"];
            $recupFeuille = $pdo ->prepare("SELECT id_feuille, nomLettre AS lettre, nom, descriptionLettre 
            FROM feuille 
            INNER JOIN lettre
            ON lettre.id_lettre = feuille.id_lettre 
            WHERE id_utilisateur = :id");
           
            $recupFeuille -> execute(["id" => $id]);
            
        }
        require "view/listeFeuille.php";
    }


    

    public function FormAjouterFeuille($id) {
        require "view/ajouterFeuille.php"; 
    }

    public function AjouterFeuille($id) {

        $pdo = Connect::seConnecter();
        // si je soumets le formulaire
        if (isset($_POST["submitFeuille"])) {
            // $schema = filter_input(INPUT_POST, "schema", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $nomFeuille = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
           
            $descriptionLettre = filter_input(INPUT_POST, "descriptionLettre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $dir = "uploads/";  // Répertoire de destination pour stocker les fichiers téléchargés
            $nameFile = $_FILES["img"]['name']; // Nom du fichier téléchargé
            $nameFile = filter_var($nameFile, FILTER_SANITIZE_SPECIAL_CHARS);
            $nameFile =  uniqid(mt_rand()).$nameFile;

            $tmpFile = $_FILES["img"]['tmp_name'];  // Chemin temporaire du fichier téléchargé
            $tmpFile = filter_var($tmpFile, FILTER_SANITIZE_SPECIAL_CHARS);
            $typeFile = explode(".", $nameFile)[1];  // Extraction de l'extension du fichier
            $correctExtensions = array("png", 'jpg', "svg", "gif");  // Extensions de fichiers autorisées

            if (in_array($typeFile, $correctExtensions)) {
                move_uploaded_file($tmpFile, $dir . $nameFile);
            }
            else{
                $_SESSION['message'] = "Le format de fichier image n'est pas autorisé. Veuillez utiliser une image au format PNG, JPG, SVG ou GIF.";
        
                //////////// ajouter message erreur en session
                header("Location:index.php?action=AjouterFeuille&id=".$id);
                die;
            }

            if ($nomFeuille && $tmpFile && $descriptionLettre) {
                
          
                $user = $_SESSION["user"];

                $requeteFeuille = $pdo->prepare("INSERT INTO feuille (nom, img, descriptionLettre, id_lettre, id_utilisateur) VALUES (:nom, :img,  :descriptionLettre, :id_lettre, :id_utilisateur)");
                $requeteFeuille->execute([
                    "nom" => $nomFeuille,
                    "img" => $nameFile,
                    "descriptionLettre" => $descriptionLettre,
                    "id_lettre" => $id,
                    "id_utilisateur" => $user["id_utilisateur"]
                ]);
            }
        }
        header("Location:index.php?action=DetailLettres&id=$id");
    }
   
   
   
    public function formUpdateFeuille($id) {
            $pdo = Connect::seConnecter();
       
            $requetteRecupFeuille = $pdo -> prepare("SELECT id_feuille, nom, img, descriptionLettre
            FROM feuille
            INNER JOIN lettre
            ON lettre.id_lettre = feuille.id_lettre
            WHERE id_feuille = :id");

             $requetteRecupFeuille -> execute(["id" =>$id]);
        
             require "view/editerFeuille.php";
    }


    public function updateFeuille($id) {
        
        $pdo = Connect::seConnecter();
        // si je soumets le formulaire
        if (isset($_POST["submitFeuille"])) {

            // $schema = filter_input(INPUT_POST, "schema", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $nomFeuille = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $nomImage = filter_input(INPUT_POST, "imgFeuille", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            //var_dump($nomImage);die;

            $descriptionLettre = filter_input(INPUT_POST, "descriptionLettre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $dir = "uploads/";  // Répertoire de destination pour stocker les fichiers téléchargés
            $nameFile = $_FILES["img"]['name']; // Nom du fichier téléchargé


            $nameFile = filter_var($nameFile, FILTER_SANITIZE_SPECIAL_CHARS);
            $nameFile =  uniqid(mt_rand()).$nameFile;

            $tmpFile = $_FILES["img"]['tmp_name'];  // Chemin temporaire du fichier téléchargé
            $tmpFile = filter_var($tmpFile, FILTER_SANITIZE_SPECIAL_CHARS);
            $typeFile = explode(".", $nameFile)[1];  // Extraction de l'extension du fichier
            $correctExtensions = array("png", 'jpg', "svg", "gif");  // Extensions de fichiers autorisées

            if (in_array($typeFile, $correctExtensions)) {
                move_uploaded_file($tmpFile, $dir . $nameFile);
            }
            else{
               $_SESSION['message'] = "Le format de fichier image n'est pas autorisé. Veuillez utiliser une image au format PNG, JPG, SVG ou GIF.";
               
               
                header("Location:index.php?action=DetailFeuille&id=".$id);
                die;
            }

            if ($nomFeuille && $tmpFile && $descriptionLettre) {

                $updateFeuille = $pdo -> prepare ("UPDATE feuille
                SET nom = :nom,
                    img = :img,
                    descriptionLettre = :descriptionLettre
                WHERE id_feuille = :id_feuille");
                   
                $updateFeuille -> execute([
                    "nom" => $nomFeuille,
                    "img" => $nameFile,
                    "descriptionLettre" => $descriptionLettre,
                    "id_feuille" => $id
                ]);
                    
                header("Location:index.php?action=DetailFeuille&id=$id");
                
            } else{
                //////////// ajouter message erreur en session
                header("Location:index.php?action=AjouterFeuille&id=".$id);
                die;
            }                                                                                       
        }
        // header("Location:index.php?action=formUpdateFeuille&id=$id");
    }
 
     
         public function DeleteFeuille($id) {
         $pdo = Connect::seConnecter();
            if (isset($_GET["id"])) {
                $selectLettre  = $pdo -> prepare("SELECT nomLettre FROM lettre WHERE id_lettre= :id");
                $selectLettre -> execute(["id"=> $id]);
                // requete pour récup $idLettre


            $supprimerFeuille = $pdo ->prepare("DELETE FROM feuille 
            WHERE id_feuille = :id" );
            $supprimerFeuille ->execute(["id" =>$id]);
        }
         header("Location:index.php?action=DetailLettres&id=$id");
    }

         public function formAjouterAudio($id) {
         require "view/ajouterAudio.php";
            
    }

         public function AjouterAudio($id) {
        $pdo = Connect::seConnecter();
       
        if (isset($_POST["submitAudio"])) {
            $audio = filter_input(INPUT_POST, "enregistrement", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $dir = "uploadsAudio/";  // Répertoire de destination pour stocker les audios téléchargés
            $nameFile = $_FILES["enregistrement"]['name']; // Nom du fichier téléchargé
            $nameFile = filter_var($nameFile, FILTER_SANITIZE_SPECIAL_CHARS);
            $nameFile =  uniqid(mt_rand()).$nameFile;

            $tmpFile = $_FILES["enregistrement"]['tmp_name'];  // Chemin temporaire du fichier téléchargé
            $tmpFile = filter_var($tmpFile, FILTER_SANITIZE_SPECIAL_CHARS);
            $typeFile = explode(".", $nameFile)[1];  // Extraction de l'extension du fichier

            $correctExtensions = array("mp3"); 

           if (in_array($typeFile, $correctExtensions)) {
                move_uploaded_file($tmpFile, $dir . $nameFile);
            }
                else {
                $_SESSION['message'] = "Le format audio inséré n'est pas autorisé. Veuillez insérer un fichier mp3.";
            }

            if ($tmpFile) {
                $requeteAudio = $pdo ->prepare("UPDATE lettre SET enregistrement = :enregistrement WHERE id_lettre = :id_lettre");
                $requeteAudio -> execute([
                    "enregistrement" => $nameFile,
                    "id_lettre" => $id
                ]);

                header("Location: index.php?action=DetailLettres&id=$id");
            }
        }
    }

    public function ajouterCommentaire($id) {
        $pdo = Connect::seConnecter(); 

        if (isset($_POST["submitCommentaire"])) {
            $commentaire = filter_input(INPUT_POST, "commentaire", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $id_utilisateur = $_SESSION["user"]["id_utilisateur"];

            $ajouterCommentaire = $pdo ->prepare("INSERT INTO commentaire (texte, id_feuille, id_utilisateur)
            VALUES (:texte, :id_feuille, :id_utilisateur)");

            $ajouterCommentaire -> execute([
               "texte" => $commentaire,
                "id_feuille" => $id,
                "id_utilisateur" => $id_utilisateur
            ]);

            header("Location: index.php?action=DetailFeuille&id=$id");
            

        }
    }

    
   


   
   
   
   
   
   
   
   
}
