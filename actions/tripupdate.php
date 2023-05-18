<?php


if (array_key_exists('user', @$_SESSION)) {

    @$nazwa = $_POST['Nazwa'];
    @$typ = $_POST['Typ'];
    @$cena = $_POST['Cena'];
    @$kraj = $_POST['Kraj'];
    @$dni = $_POST['dni'];
    @$opis = $_POST['Opis'];

    $temp = $_SESSION['edited_trip'];

        if(!empty($nazwa))
        {
            $stmt = $db->query("UPDATE trips set Nazwa = '$nazwa' where IDwycieczki = '$temp'");
        }else if(!empty($typ))
        {
            $stmt = $db->query("UPDATE trips set Typ = '$typ' where IDwycieczki = '$temp'");
        }if(!empty($cena))
        {
            $stmt = $db->query("UPDATE trips set Cena = '$cena' where IDwycieczki = '$temp'");
        }if(!empty($kraj))
        {
            $stmt = $db->query("UPDATE trips set Kraj = '$kraj' where IDwycieczki = '$temp'");
        }if(!empty($opis))
        {
            $stmt = $db->query("UPDATE trips set Opis = '$opis' where IDwycieczki = '$temp'");
        }if(!empty($dni))
         {
        $stmt = $db->query("UPDATE trips set dni = '$dni' where IDwycieczki = '$temp'");
         }



        header('Location:index.php?action=tripedit');




} else {

    header('Location:index.php?action=login');
}

?>

