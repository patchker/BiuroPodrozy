<?php

$jeden = $_POST['1'];
$dwa = $_POST['2'];
$trzy = $_POST['3'];
$cztery = $_POST['4'];

if (array_key_exists('user', @$_SESSION)) {



        if($jeden)
        {
            $db->query("UPDATE site_config SET 1_visible = 1");
        }else{
            $db->query("UPDATE site_config SET 1_visible = 0");
        }
        if($dwa)
        {
            $db->query("UPDATE site_config SET 2_visible = 1");
        }else{
            $db->query("UPDATE site_config SET 2_visible = 0");
        }
        if($trzy)
        {
            $db->query("UPDATE site_config SET 3_visible = 1");
        }else{
            $db->query("UPDATE site_config SET 3_visible = 0");
        }
        if($cztery)
        {
            $db->query("UPDATE site_config SET 4_visible = 1");
        }else{
            $db->query("UPDATE site_config SET 4_visible = 0");
        }


        header('Location:index.php?action=config');



} else {

    header('Location:index.php?action=login');
}

?>

