<?php
    //add reservation
    

    include_once "connexion_bdd.inc.php";

    if(isset($_POST['reservation'])){

        $id_reservation = $_GET["id_event"];
        $id_client = $_SESSION["id"];
        $_date = new DateTime();
        $_date = $_date->format('Y-m-d');

        $_req = $bdd->prepare("SELECT * FROM reservation WHERE id_reservation = :id_reservation AND id_client = :id_client");
        $_req->execute(array(
            'id_reservation' => $id_reservation,
            'id_client' => $id_client,
        ));

        if($_req->rowCount() == 0){
            $_reqs = $bdd->prepare("INSERT INTO reservation(id_client, id_reservation, date_reservation) VALUES(?,?,?)");
            $_reqs->execute(array(
                $id_client,
                $id_reservation,
                $_date,
            ));
            $_reqs->closeCursor();
        }
        else{
            echo "Vous avez déjà réservé cet événement";
        }

}
?>