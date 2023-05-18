<?php
session_start();
define('_ROOT_PATH', dirname(__FILE__));

require("config.php");
try {

    $db = new PDO(sprintf('mysql:host=%s;dbname=%s', $host, $dbname), $user, $pass);


    $actions = array('login', 'home', 'logout', 'site','register','users','trips','orders','ratings','config','useredit','userdelete','useredit2','userupdate','tripedit','tripdelete','tripedit2','tripupdate','userinsert','tripadd','tripinsert','orderedit','logoupload','logoinsert','tlo','colorset','zakladki','zakladkisave');


$action = 'login';
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        $action = $_GET['action'];
    } else {
        $action = 'pageNotFound';
    }
}


if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'home') {
            $action = 'home';

        }
    }
}

if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'site') {
            $action = 'site';

        }
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
        if (@$_GET['action'] == 'users') {
            $action = 'users';

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
        if (@$_GET['action'] == 'orders') {
            $action = 'orders';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'ratings') {
            $action = 'ratings';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'config') {
            $action = 'config';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'userdelete') {
            $action = 'userdelete';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'useredit2') {
            $action = 'useredit2';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'userupdate') {
            $action = 'userupdate';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'tripedit') {
            $action = 'tripedit';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'tripdelete') {
            $action = 'tripdelete';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'tripedit2') {
            $action = 'tripedit2';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'tripupdate') {
            $action = 'tripupdate';

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
        if (@$_GET['action'] == 'tripadd') {
            $action = 'tripadd';

        }
    }
}

if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'tripinsert') {
            $action = 'tripinsert';

        }
    }
}
if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'logoupload') {
            $action = 'logoupload';

        }
    }

}

if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'logoinsert') {
            $action = 'logoinsert';

        }
    }

}

if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'tlo') {
            $action = 'tlo';

        }
    }

}

if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'colorset') {
            $action = 'colorset';

        }
    }

}

if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'zakladki') {
            $action = 'zakladki';

        }
    }

}

if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        if (@$_GET['action'] == 'zakladkisave') {
            $action = 'zakladkisave';

        }
    }

}

if (array_key_exists('id1', $_GET)) {
    $_SESSION['edited_user'] = $_GET['id1'];
    echo "<script type='text/javascript'>window.top.location='index.php?action=useredit';</script>"; exit;

}
if (array_key_exists('id2', $_GET)) {
    $_SESSION['edited_pole'] = $_GET['id2'];
    echo "<script type='text/javascript'>window.top.location='index.php?action=useredit2';</script>"; exit;

}
if (array_key_exists('id3', $_GET)) {
    $_SESSION['edited_trip'] = $_GET['id3'];
    echo "<script type='text/javascript'>window.top.location='index.php?action=tripedit';</script>"; exit;

}
if (array_key_exists('id4', $_GET)) {
    $_SESSION['edited_trippole'] = $_GET['id4'];
    echo "<script type='text/javascript'>window.top.location='index.php?action=tripedit2';</script>"; exit;

}
if (array_key_exists('id5', $_GET)) {
    $_SESSION['edited_order'] = $_GET['id5'];
    echo "<script type='text/javascript'>window.top.location='index.php?action=orderedit';</script>"; exit;

}


if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
}



include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'actions' . DIRECTORY_SEPARATOR . $action . '.php');
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $action . '.php');
    $db = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>