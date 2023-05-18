<?php

if(!isset($_SESSION['user_site']['username'])) {

    header("Location:site.php?action=main");

}
else {
    $aktualny = $_SESSION['user_site']['username'];


        $stmt = $db->query("SELECT * from orders INNER JOIN trips ON orders.ID_wycieczki=trips.IDwycieczki where Login='$aktualny'");


        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);





}


?>

