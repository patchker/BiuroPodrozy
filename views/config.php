<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top.php');
if ($_SESSION['user']['Uprawnienia'] == "Administrator") {
    ?>
    <div id="content2">


        <h1>Konfiguracja twojej strony</h1>

        <ul id="listakafelkow">


            <li><button onclick="window.location.href='index.php?action=tlo'" class="kafelek">Tło strony</button></li>
            <li><button onclick="window.location.href='index.php?action=logoupload'" class="kafelek">Logo strony</button></li>
            <li><button onclick="window.location.href='index.php?action=zakladki'" class="kafelek">Konfiguracja zakładek</button></li>
        </ul>



    </div>
    <?php
}
    ?>
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'bottom.php'); ?>