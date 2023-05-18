<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'top_login.php');

?>



    <div class="center">
        <img src="img/logocms.png" width='480' height="150"><br>
        <h1>Rejestracja</h1>



       <h4 style="text-align: center; margin-top:100px; color:red">
        <?php

        foreach($tablica_bledow as $item)
        {
            echo $item;
        }

        ?>
       </h4>

    </div>

<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'bottom_site.php'); ?>

<meta http-equiv="refresh" content="1.5;url=site.php?action=register">
