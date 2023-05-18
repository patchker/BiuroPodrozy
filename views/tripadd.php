<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top.php');

    ?>
    <div id="content2">
    <a href="index.php?action=users"><input class='back' type="button" value = "Wróć" width="100px"></a><br>
    <a
    <br><br><h2>Dodawanie nowej wycieczki</h2>



    <form action="index.php?action=tripinsert" method="post" enctype='multipart/form-data'>
        <span class="tekst">Nazwa </span><span class="pole"><input required name="nazwa" class="editeduserinput"  type="text"></span><br>
        <span class="tekst">Typ </span><span class="pole"><input required name="typ" class="editeduserinput"  type="text"></span><br>
        <span class="tekst">Cena </span><span class="pole"><input required name="cena" class="editeduserinput"  type="number"></span><br>
        <span class="tekst">Kraj </span><span class="pole"><input required name="kraj" class="editeduserinput"  type="text"></span><br>
        <span class="tekst">Ilość dni </span><span class="pole"><input required name="dni" class="editeduserinput"  type="number"></span><br>
        <span class="tekst">Opis </span><span class="pole"><textarea required name="opis" id="opistextbox" class="editeduserinput"></textarea></span><br>
        <span class="tekst">Zdjęcie </span><span class="pole"> <input required type="file" name="plik" accept="image/jpeg"/></span><br>

        <span class="green">
    <?php
    if(!empty($success))
    {
        echo $success;
    }

    ?>
</span>
        <br>
        <br>
        <br>
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <input type="submit" value="Dodaj" class="back">
    </form>





<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'bottom.php'); ?>