<?php
if(isset($_SESSION['user']['username'])) {

    header("Location:index.php?action=home");

}

//plik pusty ale potrzebny, ponieważ najpierw jest includowany plik actions a potem view, w tym wypadku view ma zawartość.


?>
