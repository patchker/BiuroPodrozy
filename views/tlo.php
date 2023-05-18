<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top.php');
if ($_SESSION['user']['Uprawnienia'] == "Administrator") {
    ?>
    <div id="content2">
    <a href="index.php?action=config"><input class='back' type="button" value = "Wróć" width="100px"></a><br>
    <a
    <br><br><h2>Konfiguracja kolorów </h2>



    <form action="index.php?action=colorset" method="post">

        <span class="tekst">Wybierz kolor tła strony </span><span class="pole"> <input value="<?php echo $row[0]['backgroundcolor'] ?>" type="color" name="backgroundcolor"/></span><br>
        <span class="tekst">Wybierz kolor tła menu głównego </span><span class="pole"> <input value="<?php echo $row[0]['menucolor'] ?>" type="color" name="menucolor"/></span><br>

        <span class="green">
    <?php
    if(!empty($_SESSION["success"]))
    {

        echo $_SESSION["success"];

        $_SESSION["success"]="";

    }

    ?>
</span>
        <br>
        <br>
        <br>
        <span class="czerwony">
              <?php
              if(!empty($_SESSION["errors2"]))
              {


                  if(isset($_SESSION["errors2"]['type'])) echo $_SESSION["errors2"]['type'];
                  if(isset($_SESSION["errors2"]['all'])) echo $_SESSION["errors2"]['all'];
                  if(isset($_SESSION["errors2"]['size'])) echo $_SESSION["errors2"]['size'];
                  $_SESSION["errors2"]="";
              }

              ?>
        </span>
        <br>
        <br>
        <br>
        <br>

        <input type="submit" value="Dodaj" class="back">
    </form>


    <?php
} else {
    echo "<h1>Brak uprawnień</h1>";
}

?>
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'bottom.php'); ?>