<?php

if (array_key_exists('user', @$_SESSION)) {



        $stmt = $db->query('SELECT * from site_config');
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);



} else {
    header('Location:index.php?action=login');
}


?>

