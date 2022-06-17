<?php

    include_once "./connexion_bdd.inc.php";

    //show reservation 
    $_id = $_SESSION["id"];
    $reservation = $bdd->prepare("SELECT * FROM reservation INNER JOIN combats ON reservation.id_reservation=combats.id_combats WHERE id_client = :id");
    $reservation->execute(array(
        'id' => $_id,
    ));
    $reservation = $reservation->fetchAll();
/*     foreach($reservation as $reservation){
        echo $reservation['id_combats'];
        echo $reservation['date_combats'];
        echo $reservation['nom_combats'];
        echo $reservation['desc_combats'];
        echo $reservation['id_client'];
        echo $reservation['id_reservation'];
        echo $reservation['date_reservation'];
    }
     */
?>