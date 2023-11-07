<?php

namespace Controller;
use Model\Connect;

class SecurityController {
    public function register() {
        $pdo = Connect::seConnecter();
        
                    if(isset($_POST['submit'])){
                   
                   
                    // Récupérer les données du formulaire et les filtrer
                    $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_SPECIAL_CHARS);
                    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS, FILTER_VALIDATE_EMAIL);
                    $pass1 = filter_input(INPUT_POST, "pass1", FILTER_SANITIZE_SPECIAL_CHARS);
                    $pass2 = filter_input(INPUT_POST, "pass2", FILTER_SANITIZE_SPECIAL_CHARS);

                    // Vérifier si les données du formulaire sont valides
                    if($pseudo && $email && $pass1 && $pass2) {
                        
                        // Vérifier si l'email existe déjà dans la base de données
                        $requete = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
                        $requete->execute(["email" => $email]);
                        $user = $requete->fetch();

                        if($user) {
                            // Rediriger vers la page d'inscription en cas de doublon d'email
                            header("Location: register.php");
                            exit;
                        } else {
                            // Vérifier si les mots de passe correspondent et ont une longueur minimale
                            if($pass1 == $pass2 && strlen($pass1) > 8) {
                                // Hacher le mot de passe avant de l'insérer dans la base de données
                                $hashedPassword = password_hash($pass1, PASSWORD_DEFAULT);

                                // Insérer l'utilisateur dans la base de données avec un mot de passe haché
                                $insertUser =  $pdo->prepare("INSERT INTO utilisateur (pseudo, email, password) VALUES(:pseudo, :email, :password)");
                                $insertUser->execute([
                                    "pseudo" => $pseudo,
                                    "email" => $email,
                                    "password" => $hashedPassword
                                ]);

                                // Rediriger vers la page de connexion après l'inscription
                                header("Location: login.php");
                                exit;
                            } else {
                                echo "Les mots de passe ne sont pas identiques ou n'ont pas la longueur minimale requise.";
                            }
                        }
                    } else {
                        echo "Problème de saisie dans les champs de formulaire.";
                    }
                }
                    require "view/register.php";
                
            }

    public function login(){
            $pdo = Connect::seConnecter();

                    if(isset($_POST["submit"])) {
                        // Protège contre les failles XSS -> permet d'éviter d'insérer du code malveillant dans le formulaire 
                        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS, FILTER_VALIDATE_EMAIL);
                        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

                        // si les filtres sont valides
                        if($email && $password) {
                            // Permet d'éviter les failles contre les injections SQL
                            $requete = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
                            $requete->execute(["email" => $email]);
                            $user = $requete->fetch();

                            // si l'utilisateur existe
                            if($user) {
                                $hash = $user["password"];
                                if(password_verify($password, $hash)) {
                                    $_SESSION["user"] = $user;
                                    header("Location: home.php");
                                    exit;
                                } else {
                                    header("Location: login.php");
                                    exit;
                                    // Message utilisateur inconnu ou mot de passe incorrect
                                }
                            } else {
                                header("Location: login.php");
                                exit;
                            }
                        }
                    }
                    require "login.php";
                }

            //     case "profile":
            //         header("Location: profile.php");
            //         exit;
            //         break;

            //     case "logout":
            //         unset($_SESSION["user"]);
            //         header("Location: home.php");
            //         require "home.php";
            //         exit;
                   
            //         break;

            //     default:
            //         echo "Action non reconnue.";
            // }
        
    
}
?>
