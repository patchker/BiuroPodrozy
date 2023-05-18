<?php
if (array_key_exists('user', @$_SESSION)) {


    $help = $_SESSION['edited_trip'];



        //usunięcie wycieczki
        $db->query("DELETE FROM trips where IDwycieczki='$help'");


        header("Location:index.php?action=trips");





} else {
    header('Location:index.php?action=login');
}


?>