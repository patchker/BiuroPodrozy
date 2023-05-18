<?php


if(isset($_SESSION['user_site']['username'])) {

    header("Location:site.php?action=main");

}

$login = $_POST['username'];
$haslo = $_POST['password'];
$haslo2 = $_POST['password2'];
$email = $_POST['email'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];

$_SESSION['login1'] = $login;
$_SESSION['haslo1'] = $haslo;
$_SESSION['email1'] = $email;
$_SESSION['imie1'] = $imie;
$_SESSION['nazwisko1'] = $nazwisko;

$uprawnienia='Administrator';


$wyr_login="/^[a-zA-Z0-9\.\-_]{6,20}$/";
$wyr_haslo="/^[a-zA-Z0-9]{6,20}$/";
$wyr_email="/^([a-zA-Z0-9\.\-_]{4,20})@([a-zA-Z0-9]{2,10})\\.(pl|gr|com)$/";

$tablica_bledow = [];


if(preg_match($wyr_login,$login))
{



if(preg_match($wyr_email,$email))
{
    if($haslo==$haslo2) {
        $addhaslo = sha1($haslo);




        if (preg_match($wyr_haslo, $haslo)) {



                $stmt = $db->query('SELECT * from user_biuro');
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

                        $_SESSION['reg_successful2']=1;
                        $db->query("INSERT INTO user_biuro(Lp,Imię,Nazwisko,Login,Haslo,Uprawnienia,Zniżka) values ('','$imie','$nazwisko','$login','$addhaslo','$uprawnienia',0)");
                        }
                    }

                }



                header("Location:site.php?action=login");


        } else {

           array_push($tablica_bledow,'Hasło za krótkie');
        }
    }else
    {

        array_push($tablica_bledow,'Hasła sie różnią');
    }
}else {

    array_push($tablica_bledow,'Email niepoprawny');
}

}else {

    array_push($tablica_bledow,'Login niepoprawny');
}











?>

