<?php
    include_once "connexion_bdd.inc.php";

    if(isset($_POST['modifier'])){
        $id = $_SESSION['id'];
        $names = $_POST['names'];
        $firstname = $_POST['firstname'];
        $mail = $_POST['mail'];
        $passwords = $_POST['passwords'];
        $mdphash = password_hash($passwords, PASSWORD_DEFAULT);
        $phone = $_POST['phone'];
        $fav = $_POST['fav'];
        $update = $bdd->prepare('UPDATE users SET names = :names, firstname = :firstname, mail = :mail, passwords = :passwords, phone = :phone, fav = :fav WHERE id = :id');
        $update->execute(array(
            'names' => $names,
            'firstname' => $firstname,
            'mail' => $mail,
            'passwords' => $mdphash,
            'phone' => $phone,
            'fav' => $fav,
            'id' => $id,
        ));
        $update->closeCursor();
        header('Location: ../member.php');
    }else{
        echo "Veuillez remplir tous les champs";
    }
?>