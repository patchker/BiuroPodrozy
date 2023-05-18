<?php

if (array_key_exists('user', @$_SESSION)) {

        $stmt = $db->query('SELECT * from orders order by data_zamowienia DESC limit 3');
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $stmt2 = $db->query('SELECT * from ratings_biuro order by data DESC limit 3');
        $row2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);




} else {
    header('Location:index.php?action=login');
}

?>