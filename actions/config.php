<?php
if (array_key_exists('user', @$_SESSION)) {



//plik pusty ale potrzebny, ponieważ najpierw jest includowany plik actions a potem view, w tym wypadku view ma zawartość.

} else {
    header('Location:index.php?action=login');
}
?>
