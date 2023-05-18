<?php


if (array_key_exists('user', @$_SESSION)) {

    @$nazwa = $_POST['nazwa'];
    @$typ = $_POST['typ'];
    @$cena = $_POST['cena'];
    @$kraj = $_POST['kraj'];
    @$dni = $_POST['dni'];
    @$opis = $_POST['opis'];




    if (is_uploaded_file(@$_FILES['plik']['tmp_name'])) {


        $max = 32000000; // 4MB
        $size = $_FILES['plik']['size'];
        $type = $_FILES['plik']['type'];
        $name = $_FILES['plik']['name'];
        $temp_name = $_FILES['plik']['tmp_name'];
        $destination = './img_trips/' . $name;
        if ($size <= 0) {
            $errors2['size'] = 'Plik jest pusty.';


        } elseif ($size > $max) {
            $errors2['size'] = 'Plik jest za duży maksymalnie można wysłać ' . $max . '.';
        } elseif (file_exists($destination)) {
            $errors2['size'] = 'Wczytywany plik już istnieje na serwerze.';

        } else if ($type != "image/jpeg") {
            $errors2['type'] = "Błędny format pliku.";
        } else {
            if (!@move_uploaded_file($temp_name, $destination)) {
                $errors2['all'] = 'Błąd: Nie można zapisać pliku gdyż 
podana lokalizacja nie istnieje lub nie można 
w niej zapisywać';


            } else {
                $success = 'Przesyłanie pliku zakończyło się pomyślnie.';
            }
        }

    }









            $stmt = $db->query("INSERT INTO trips(IDwycieczki,Nazwa,Typ,Cena,dni,Kraj,Opis,path) values('','$nazwa','$typ','$cena','$dni','$kraj','$opis','$destination')");


        header('Location:index.php?action=trips');



} else {

    header('Location:index.php?action=login');
}

?>

