<?php

if (array_key_exists('user', @$_SESSION)) {

$elo = $_SESSION['edited_user'];

        $stmt = $db->query("SELECT * from user_biuro where Lp = '$elo'");
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);




} else {

    header('Location:index.php?action=login');
}

?>

