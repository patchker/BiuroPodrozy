<?php

if (array_key_exists('user', @$_SESSION)) {




} else {
    header('Location:index.php?action=login');
}

?>

