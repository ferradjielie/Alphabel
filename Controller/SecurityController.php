<?php

namespace Controller;
use Model\Connect;


class SecurityController { 
   
    
    public function register() {
        $pdo = Connect::seConnecter();
        
                    if(isset($_POST['submit'])){
                   
                        
                    // Récupérer les données du formulaire et les filtrer
                    $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_VALIDATE_EMAIL);
                    $pass1 = filter_input(INPUT_POST, "pass1", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $pass2 = filter_input(INPUT_POST, "pass2", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                    // Vérifier si les données du formulaire sont valides
                    if($pseudo && $email && $pass1 && $pass2) {
                        
                        // Vérifier si l'email existe déjà dans la base de données
                        $requete = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
                        $requete->execute(["email" => $email]);
                        $user = $requete->fetch();

                        if($user) {
                            // Rediriger vers la page d'inscription en cas de doublon d'email
                            header("Location: index.php?action=register");
                            exit;
                        } else {
                            // Vérifier si les mots de passe correspondent et ont une longueur minimale
                            $regex = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^\w\d\s]).{5,}$/';
                            if($pass1 == $pass2 && preg_match($regex, $pass1)) {
                                // Hacher le mot de passe avant de l'insérer dans la base de données
                                $hashedPassword = password_hash($pass1, PASSWORD_DEFAULT);

                                // Insérer l'utilisateur dans la base de données avec un mot de passe haché
                                $insertUser =  $pdo->prepare("INSERT INTO utilisateur (pseudo, email, password, role) VALUES(:pseudo, :email, :password, :role)");
                                $insertUser->execute([
                                    "pseudo" => $pseudo,
                                    "email" => $email,
                                    "password" => $hashedPassword,
                                    "role" => "ROLE_USER"
                                ]);

                                // Rediriger vers la page de connexion après l'inscription
                                header("Location: index.php?action=login");
                                exit;
                            } else {
                                $_SESSION['message'] = "Les mots de passe ne sont pas identiques ou ne respecte pas la forme suivante : 12 caractères dont 1 majuscule, 1 minuscule et un caractère spécial";
                            }
                        }
                    } else {
                        $_SESSION['message'] = "Problème de saisie dans les champs de formulaire.";
                    }
                }
                require "view/register.php";
                
            }

    public function login(){
            $pdo = Connect::seConnecter();
            
                         
                           // $requetePassword -> execute(["id_utilisateur" => $id_utilisateur]);

                        if(isset($_POST["submit"])) {
                            // Protège contre les failles XSS -> permet d'éviter d'insérer du code malveillant dans le formulaire 
                            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_VALIDATE_EMAIL);
                             $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

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
                                    header("Location: index.php?action=profile");
                                    exit;
                                }   else {
                                    header("Location: index.php?action=login");
                                    exit;
                                    // Message utilisateur inconnu ou mot de passe incorrect
                                }
                            } 
                            
                            else {
                                header("Location: index.php?action=login");
                                exit;
                            }
                        }
                    }
                    require "view/login.php";
                }

                public function formModifierPassword() {
                  require "view/updatePassword.php";
                }
                    
                    


                 public function modifierPassword() {
                    $pdo = Connect::seConnecter ();
                    $newPassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $newPassword2 = filter_input(INPUT_POST, "password2", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_VALIDATE_EMAIL);

                    // $recupPassword = $pdo -> prepare("SELECT password FROM utilisateur");
                    // $recupPassword -> execute();

                    // var_dump($_SESSION["user"]["email"]);
                    // die();

                   if (
                        // l'adresse email reçue doit être celle de l'utilisateur connecté
                        // $email === $_SESSION["user"]["email"]
                        $_SESSION["user"]["email"]
                        // les 2 mots de passe doivent correspondre
                        && $newPassword === $newPassword2
                    ) {
                       $updatePassword = $pdo -> prepare("UPDATE utilisateur SET
                        password = :password WHERE email = :email");

                        $updatePassword -> execute([
                            "password" => $newPassword,
                            // "email" => $email
                            "email" => $_SESSION["user"]["email"]
                        ]);

                        // notif succès
                    } else {
                        // les mots de passes sont différents
                        // notif refus
                    }

                    header("Location: index.php?action=login");

                 }

                public function home() {
                   require "view/home.php";
                }


                
                public function mentionsLegales() {
                    require "view/mentionsLegales.php";
                }


                
                
                public function conditionsGenerales() {
                    require "view/cg.php" ;
                }

                public function politiqueConfidentialite() {
                    require "view/politiqueConfidentialite.php";
                }
            
                
                public function profile() {
                    $pdo = Connect::seConnecter();
                    require "view/profile.php";
                    
                   }

                   public function logout () { 
                    $pdo = Connect::seConnecter();
                    if(isset($_SESSION["user"])){
                        unset($_SESSION["user"]);
                        header ("Location: index.php?action=home");
                        exit;
                    }
                }
            }
?>
