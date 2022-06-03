<?php
    include_once 'connexion_bdd.inc.php';

    $users = $bdd->prepare('SELECT * FROM `users` WHERE mail = ?');
                $users->execute(array($_POST['email']));
                if ($users->rowCount() == 0) {
                    if (isset($_POST['envoyer'])) {
    
                        // collect value of input field
                            $nom = $_POST['names'];
                            $prenom = $_POST['firstname'];
                            $email = $_POST['email'];
                            $mdp = $_POST['passwords'];
                            $mdphash = password_hash($mdp, PASSWORD_DEFAULT);
                            $phone = $_POST['phone'];
                            $preference = $_POST['preference'];
                            $city = $_POST['city'];
                        
                        
                        if(empty($nom) || empty($prenom) || empty($email) || empty($mdphash) || empty($phone) || empty($preference) || empty($city)) {
                            echo "Veuillez remplir tous les champs";
                        } else {
                            // Insert data into data base
                            $sql = $bdd->prepare("INSERT INTO users (names, firstname, mail, passwords, phone, fav, city) VALUES (?, ?, ?, ?, ?, ?, ?)");
                            
                            
                            $sql->execute(
                                array(htmlentities($nom), 
                                htmlentities($prenom), 
                                htmlentities($email), 
                                htmlentities($mdphash), 
                                htmlentities($phone), 
                                htmlentities($preference), 
                                htmlentities($city))
                            );
                            echo "Votre compte a bien été créé";
                        }
                    }
                } else {
                    echo "Ce mail existe déjà";
                }
?>