<?php


    $elo = $_SESSION['edited_trip'];
    @$aktualnyuser = $_SESSION['user_site']['username'];

        $stmt = $db->query("SELECT * from trips where IDwycieczki = '$elo'");
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt3 = $db->query("SELECT * from user_biuro where Login = '$aktualnyuser' ");
        $row3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);








?>

