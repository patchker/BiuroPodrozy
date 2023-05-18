<?php

if (isset($_SESSION['user_site']['username'])) {
    header("Location:site.php?action=main");
}


$fields['username'] = array_key_exists('username', $_POST) ?
    $_POST['username'] : '';
$fields['password'] = array_key_exists('password', $_POST) ?
    $_POST['password'] : '';

$errors = array();


if (count($_POST) > 0) {
    if (empty($fields['username'])) {
        $errors['username'] = 'Pole jest wymagane.';
    }

    if (empty($fields['password'])) {
        $errors['password'] = 'Pole jest wymagane.';
    }


    $fields['passsha'] = sha1($fields['password']);


        $stmt = $db->query("SELECT * from user_biuro");
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $udalosie = 0;

        //sprawdzanie czy istnieje uzytkownik o podanym loginie
        for ($i = 0; $i < count($row); $i++) {

            if ($fields['username'] == $row[$i]['Login'] && $fields['passsha'] == $row[$i]['Haslo']) {
                $udalosie = 1;

                if ($udalosie == 1) {

                    $fields['ID'] = $row[$i]['Lp'];
                    $fields['Uprawnienia'] = $row[$i]['Uprawnienia'];

                }
            }
        }




    if (count($errors) == 0 && !($udalosie == 1)) {
        $errors['all'] = 'Niepoprawny login lub hasło.';
        $_SESSION['login2'] = $fields['username'];

    }

    if (count($errors) == 0) {
        $_SESSION['user_site'] = $fields;
        header('Location: site.php?action=main');

    }

}


?>