<?php
session_start();
define('_ROOT_PATH', dirname(__FILE__));


@$elo = $_SESSION['edited_trip'];
@$aktualnyuser = $_SESSION['user_site']['username'];
try {
    $db = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');




$actions = array('login', 'logout','main','register','userinsert','trips','tripshow','cart','cartdelete2','orderadd','user_orders','ocen','ocenainsert','ocenwycieczke','ocenawycieczkiinsert');


$action = 'main';
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        $action = $_GET['action'];
    } else {
        $action = 'pageNotFound';
    }
}

if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'register') {
            $action = 'register';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'userinsert') {
            $action = 'userinsert';

        }
    }
}

if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'trips') {
            $action = 'trips';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'tripshow') {
            $action = 'tripshow';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'cart') {
            $action = 'cart';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'cartdelete2') {
            $action = 'cartdelete2';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'orderadd') {
            $action = 'orderadd';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'user_orders') {
            $action = 'user_orders';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'ocen') {
            $action = 'ocen';

        }
    }
}

if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'ocenainsert') {
            $action = 'ocenainsert';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'ocenwycieczke') {
            $action = 'ocenwycieczke';

        }
    }
}

if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'ocenawycieczkiinsert') {
            $action = 'ocenawycieczkiinsert';

        }
    }
}




if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: site.php?action=main');
}

if (array_key_exists('id3', $_GET)) {
    $_SESSION['edited_trip'] = $_GET['id3'];
    echo "<script type='text/javascript'>window.top.location='site.php?action=tripshow';</script>"; exit;

}
if (array_key_exists('cartdelete', $_GET)) {
    $_SESSION['cartdelete'] = $_GET['cartdelete'];
    echo "<script type='text/javascript'>window.top.location='site.php?action=cartdelete2';</script>"; exit;

}

if (array_key_exists('ocenwycieczkeid', $_GET)) {
    $_SESSION['ocenwycieczkeid'] = $_GET['ocenwycieczkeid'];
    echo "<script type='text/javascript'>window.top.location='site.php?action=ocenwycieczke';</script>"; exit;

}

if (array_key_exists('help', $_GET)) {
    $_SESSION['sort'] = $_GET['help'];
    echo "<script type='text/javascript'>window.top.location='site.php?action=trips';</script>"; exit;

}
if (array_key_exists('addtocart', $_GET)) {

$wycieczka = $_GET['addtocart'];
    $aktualny = $_SESSION['user_site']['username'];

    $data1 = $_POST['date1'];
    $data2 = $_POST['date2'];
    $liczba = $_POST['liczba'];
    echo $wycieczka;
    echo $aktualny;

        $stmt = $db->query("INSERT INTO cart(ID,user,ID_wycieczki,date1,date2,liczba_osob) values('','$aktualny','$wycieczka','$data1','$data2','$liczba')");


        header('Location:site.php?action=cart');



}


include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'actions_site' . DIRECTORY_SEPARATOR . $action . '.php');
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . $action . '.php');
    $db = null;


} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>