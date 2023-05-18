<?php



$login = $_POST['username'];
$haslo = $_POST['password'];
$haslo2 = $_POST['password2'];
$email = $_POST['email'];

$_SESSION['login1'] = $login;
$_SESSION['haslo1'] = $haslo;
$_SESSION['email1'] = $email;


//do usuniecia
$imie = 'test';
$nazwisko = 'testowy';
$wiek = 44;
$uprawnienia='Użytkownik';

$wyr_login="/^[a-zA-Z0-9]{6,15}$/";
$wyr_haslo="/^[a-zA-Z0-9]{6,15}$/";
$wyr_email="/^([a-zA-Z0-9]{4,20})@([a-zA-Z0-9]{2,10})\\.(pl|gr|com)$/";

$tablica_bledow = [];


if(preg_match($wyr_login,$login))
{



if(preg_match($wyr_email,$email))
{
    if($haslo==$haslo2) {
        $addhaslo = sha1($haslo);

        //$db->query("INSERT INTO user(Lp,Imię,Nazwisko,Login,Haslo,Wiek,Uprawnienia) values ('','$imie','$nazwisko','$login','$addhaslo','$wiek','$uprawnienia')");


        if (preg_match($wyr_haslo, $haslo)) {



                $stmt = $db->query('SELECT * from user');
                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                {
$znaleziono=0;
                    for ($i = 0; $i < count($row); $i++) {

                        if ($login == $row[$i]['Login']) {

                            $znaleziono=1;


                        }

                    }

                    if($znaleziono==0)
                    {
                        if ($haslo == $haslo2) {



                        $addhaslo = sha1($haslo);

                        $_SESSION['reg_successful']=1;
                        $db->query("INSERT INTO user(Lp,Imię,Nazwisko,Login,Haslo,Wiek,Uprawnienia) values ('','$imie','$nazwisko','$login','$addhaslo','$wiek','$uprawnienia')");

                        }
                    }

                }



                header("Location:index.php?action=login");


        } else {

           array_push($tablica_bledow,'Hasło za krótkie');
        }
    }else
    {

        array_push($tablica_bledow,'Hasła sie różnią');
    }
}else {

    array_push($tablica_bledow,'email niepoprawny');
}

}else {

    array_push($tablica_bledow,'Login niepoprawny');
}











?>

