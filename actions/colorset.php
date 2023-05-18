<?php

$backgroundcolor = $_POST['backgroundcolor'];
$menucolor = $_POST['menucolor'];
$aktualnyuser = $_SESSION['user']['username'];




    //aktualizacja kolorów w bazie
    $db->query("UPDATE site_config set backgroundcolor = '$backgroundcolor'");
    $db->query("UPDATE site_config set menucolor = '$menucolor'  ");


    header("Location:index.php?action=tlo");



?>