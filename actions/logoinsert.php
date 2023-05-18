<?php


if (array_key_exists('user', @$_SESSION)) {




    if (is_uploaded_file(@$_FILES['plik2']['tmp_name'])) {


        $max = 32000000; // 4MB
        $size = $_FILES['plik2']['size'];
        $type = $_FILES['plik2']['type'];

            $name = 'logo_site.png';


        $temp_name = $_FILES['plik2']['tmp_name'];
        $destination = './img/' . $name;
        if ($size <= 0) {
            $errors2['size'] = 'Plik jest pusty.';


        } elseif ($size > $max) {
            $errors2['size'] = 'Plik jest za duży maksymalnie można wysłać ' . $max . '.';


        } else if ($type != "image/png" && $type != "image/jpeg") {


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
        $_SESSION['errors2']=$errors2;
        $_SESSION['success']=$success;

        header('Location:index.php?action=logoupload');


    }












} else {

    header('Location:index.php?action=login');
}

?>

