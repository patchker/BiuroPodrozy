<?php

if(!isset($_SESSION['user_site']['username']))
{
    header("Location:site.php?action=main");
}


?>