<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'top_site.php');
if ($_SESSION['user_site']['Uprawnienia'] == "Administrator") {
    ?>
    <div id="content2">

        <br><br><h2>Pomyślnie dodano opinię </h2>
        Zaraz zostaniesz przekierowany.


        <meta http-equiv="refresh" content="2; url=site.php?action=main">
        <br>





        <br><br>







    </div>
    <?php
} else {
    echo "<h1>Brak uprawnień</h1>";
}

?>
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'bottom_site.php'); ?>

<script>


    function zmiana(n) {
        location.href = "site.php?help="+n;
    }




</script>
