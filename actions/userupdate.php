<?php


if (array_key_exists('user', @$_SESSION)) {

    @$login = $_POST['Login'];
    @$imie = $_POST['Imie'];
    @$nazwisko = $_POST['Nazwisko'];
    @$wiek = $_POST['Wiek'];
    @$uprawnienia = $_POST['Uprawnienia'];

    $elo = $_SESSION['edited_user'];

        if(!empty($login))
        {
            $stmt = $db->query("UPDATE user_biuro set Login = '$login' where Lp = '$elo'");
        }else if(!empty($imie))
        {
            $stmt = $db->query("UPDATE user_biuro set Imię = '$imie' where Lp = '$elo'");
        }if(!empty($nazwisko))
        {
            $stmt = $db->query("UPDATE user_biuro set Nazwisko = '$nazwisko' where Lp = '$elo'");
        }if(!empty($wiek))
        {
            $stmt = $db->query("UPDATE user_biuro set Wiek = '$wiek' where Lp = '$elo'");
        }if(!empty($uprawnienia))
        {
            $stmt = $db->query("UPDATE user_biuro set Uprawnienia = '$uprawnienia' where Lp = '$elo'");
        }



        header('Location:index.php?action=useredit');



} else {

    header('Location:index.php?action=login');
}

?>

