<?php
    include_once "./src/connexion_bdd.inc.php";

    if(isset($_GET["id_combats"]) && isset($_SESSION["id"])){

        $id_reservation = $_GET["id_combats"];
        $id_client = $_SESSION["id"];
        $_date = new DateTime();
        $_date = $_date->format('Y-m-d H:i:s');

        $insert = $bdd->prepare('INSERT INTO reservation (id_client, id_reservation, date_reservation) VALUES (:id_reservation, :id_client, :date_reservation)');
        $insert->execute(array( 
            'id_reservetation' => $id_reservation,
            'id_client' => $id_client,
            'date_reservation' => $_date,
        ));

        $insert->closeCursor();
        header('Location: ./member.php');
    }
?>