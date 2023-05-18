<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top.php');
if ($_SESSION['user']['Uprawnienia'] == "Administrator") {
    ?>
    <div id="content2">
    <a href="index.php?action=config"><input class='back' type="button" value = "Wróć" width="100px"></a><br>
    <a
    <br><br><h2>Zamiana logo strony</h2>



    <form action="index.php?action=logoinsert" method="post" enctype='multipart/form-data'>

        <span class="tekst">Wybierz logo </span><span class="pole"> <input type="file" name="plik2" accept="image/png, image/jpeg"/></span><br>
<br><br>
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