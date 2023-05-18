<?php

if (array_key_exists('user', @$_SESSION)) {

    $temp = $_SESSION['edited_trip'];

        $stmt = $db->query("SELECT * from trips where IDwycieczki = '$temp'");
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);



} else {

    header('Location:index.php?action=login');
}

?>

