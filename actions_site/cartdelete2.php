<?php
if (array_key_exists('user_site', @$_SESSION)) {


    $usuwany= $_SESSION['cartdelete'];
    $aktualnyuser= $_SESSION['user']['username'];




        //usunięcie użytkownika
        $db->query("DELETE FROM cart where ID='$usuwany'");


        header("Location:site.php?action=cart");





} else {
    header('Location:site.php?action=form');
}


?>