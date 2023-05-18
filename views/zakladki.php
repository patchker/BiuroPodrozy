<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top.php');
if ($_SESSION['user']['Uprawnienia'] == "Administrator") {
    ?>
    <div id="content2">
    <a href="index.php?action=config"><input class='back' type="button" value = "Wróć" width="100px"></a><br>
    <a
    <br><br><h2>Konfiguracja zakładek </h2>

    Wybierz które zakładki mają być widoczne.<br><br>


    <form action="index.php?action=zakladkisave" method="post">

        <span class="tekst"><input <?php if($row[0]['1_visible']) echo "checked" ?>  type="checkbox" name="1"/>Strona główna </span><br>
        <span class="tekst"><input <?php if($row[0]['2_visible']) echo "checked" ?> type="checkbox" name="2"/>Katalog wycieczek </span><br>
        <span class="tekst"><input <?php if($row[0]['3_visible']) echo "checked" ?> type="checkbox" name="3"/>Twoje zamówienia </span><br>
        <span class="tekst"><input <?php if($row[0]['4_visible']) echo "checked" ?> type="checkbox" name="4"/>Oceny </span><br>


        <br>
        <br>
        <br>


        <input type="submit" value="Zapisz" class="back">
    </form>


    <?php
} else {
    echo "<h1>Brak uprawnień</h1>";
}

?>
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'bottom.php'); ?>