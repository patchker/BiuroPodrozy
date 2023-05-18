<?php

    $stmt = $db->query("SELECT * FROM ratings_biuro order by Data DESC LIMIT 3");
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

