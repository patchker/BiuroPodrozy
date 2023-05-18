<?php
if(!isset($_SESSION['user_site']['username'])) {

    header("Location:site.php?action=main");

}
else {
    $aktualny = $_SESSION['user_site']['username'];


        $stmt = $db->query("SELECT * from cart INNER JOIN trips ON cart.ID_wycieczki=trips.IDwycieczki where user= '$aktualny'");


        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $stmt3 = $db->query("SELECT * FROM user_biuro where Login = '$aktualny'");


        $row3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);





}

?>

