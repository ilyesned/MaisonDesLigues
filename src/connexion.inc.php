<?php 
    include_once "connexion_bdd.inc.php";

    if(isset($_POST["connexion"]) && isset($_POST["email"]) && isset($_POST["passwords"])) {
        $email = $_POST["email"];
        $passwords = $_POST["passwords"];
        
        $users = $bdd->prepare('SELECT * FROM `users` WHERE mail = :mail');
        $users->execute(array(
            'mail' => $email,
        ));

        if ($users->rowCount() == 0) {
            echo "Ce mail n'existe pas";
        } else {
            $user = $users->fetch();
            if(password_verify($_POST['passwords'], $user['passwords'])){
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['names'] = $user['names'];
                $_SESSION['firstname'] = $user['firstname'];
                $_SESSION['mail'] = $user['mail'];
                $_SESSION['passwords'] = $user['passwords'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['fav'] = $user['fav'];
                $_SESSION['city'] = $user['city'];
                header('Location: member.php');
                $users->closeCursor();
            } else {
                echo "Mot de passe incorrect";
            }
        }
    }
/* 
    session_abort(); */
?>