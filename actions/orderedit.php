<?php

if (array_key_exists('user', @$_SESSION)) {

    $elo = $_SESSION['edited_order'];

        $stmt = $db->query("SELECT * from orders where Lp = '$elo'");
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);



        $stmt2 = $db->query(" SELECT * FROM `orders` INNER JOIN trips ON orders.ID_wycieczki=trips.IDwycieczki where Lp='$elo'");
        $row2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);




} else {

    header('Location:index.php?action=login');
}

?>

