<?php
if (array_key_exists('user', @$_SESSION)) {


    $temp = $_SESSION['edited_user'];



            //usunięcie użytkownika
            $db->query("DELETE FROM user_biuro where Lp='$temp'");


            header("Location:index.php?action=users");




} else {
    header('Location:index.php?action=login');
}


?>