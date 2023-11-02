<?php

namespace Controller;
use Model\Connect;

class LettreController {

    public function DetailLettres($id) {
        $pdo = Connect::seConnecter();

        $requeteDetailLettre = $pdo->prepare("SELECT id_feuille, nomLettre, descriptionLettre 
             FROM feuille
             INNER JOIN lettre
             ON lettre.id_lettre = feuille.id_lettre
             INNER JOIN utilisateur
             ON utilisateur.id_utilisateur = feuille.id_utilisateur
             WHERE lettre.id_lettre = :id");
        $requeteDetailLettre->execute(["id" => $id]);

        require "view/detailLettres.php";
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
           
            $description = filter_input(INPUT_POST, "descriptionLettre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $dir = "uploads/";  // Répertoire de destination pour stocker les fichiers téléchargés
            $nameFile = $_FILES['schema']['name']; // Nom du fichier téléchargé
            $nameFile = filter_var($nameFile, FILTER_SANITIZE_SPECIAL_CHARS);

            $tmpFile = $_FILES['schema']['tmp_name'];  // Chemin temporaire du fichier téléchargé
            $tmpFile = filter_var($tmpFile, FILTER_SANITIZE_SPECIAL_CHARS);
            $typeFile = explode(".", $nameFile)[1];  // Extraction de l'extension du fichier

            $correctExtensions = array("png", 'jpg', "svg", "gif");  // Extensions de fichiers autorisées

            if (in_array($typeFile, $correctExtensions)) {
                move_uploaded_file($tmpFile, $dir . $nameFile);
            }

            if ($nomFeuille && $tmpFile && $description) {

                // var_dump("INSERT INTO feuille (nom, schéma, descriptionLettre, id_lettre, id_utilisateur) VALUES ('$nomFeuille', '$nameFile',  '$description', $id, 1)");die;

                $requeteFeuille = $pdo->prepare("INSERT INTO feuille (nom, schéma, descriptionLettre, id_lettre, id_utilisateur) VALUES (:nom, :schema,  :descriptionLettre, :id_lettre, :id_utilisateur)");
                $requeteFeuille->execute([
                    "nom" => $nomFeuille,
                    "schema" => $nameFile,
                    "descriptionLettre" => $description,
                    "id_lettre" => $id,
                    "id_utilisateur" => 1
                ]);
            }
        }
        header("Location:index.php?action=DetailLettres&id=$id");
    }


   
   
   
   
   
   
   
    public function FormAjouterImg() {
        require "view/ajouterImg.php";
    }

    public function AjouterImg() {
        $pdo = Connect::seConnecter();

        // si je soumets le formulaire
        if (isset($_POST["submitImg"])) {
            $dir = "uploads/";  // Répertoire de destination pour stocker les fichiers téléchargés
            $nameFile = $_FILES['fileImg']['name']; // Nom du fichier téléchargé
            $nameFile = filter_var($nameFile, FILTER_SANITIZE_SPECIAL_CHARS);

            var_dump($nameFile);
            die;

            $tmpFile = $_FILES['fileImg']['tmp_name'];  // Chemin temporaire du fichier téléchargé
            $tmpFile = filter_var($tmpFile, FILTER_SANITIZE_SPECIAL_CHARS);
            $typeFile = explode(".", $nameFile)[1];  // Extraction de l'extension du fichier

            $correctExtensions = array("png", 'jpg', "svg", "gif");  // Extensions de fichiers autorisées

            if (in_array($typeFile, $correctExtensions)) {
                // Vérifier si l'extension du fichier est autorisée
                if (move_uploaded_file($tmpFile, $dir . $nameFile)) {
                    // Si l'extension est autorisée, essayer de déplacer le fichier vers le répertoire de destination
                    echo "Téléchargement réussi";
                } else {
                    echo "Échec du téléchargement";
                }
            } else {
                echo "Format de fichier non valide";
            }
        }

        require "view/ajouterImg.php";
    }
}
