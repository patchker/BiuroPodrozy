<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top.php');
if ($_SESSION['user']['Uprawnienia'] == "Administrator") {
    ?>
    <div id="content2">
    <a href="index.php?action=users"><input class='back' type="button" value = "Wróć" width="100px"></a>
    <a href="index.php?action=userdelete"><input class = 'back' type="button" value = "Usuń użytkownika"></a>
    <br><br><h2>Szczegóły użytkownika <?php echo $row[0]['Login']?></h2>



<form action="tak">
    <span class="tekst">Login </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Login'] ?>"></span><a href="index.php?id2=1"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
    <span class="tekst">Imię </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Imię'] ?>"></span><a href="index.php?id2=2"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
    <span class="tekst">Nazwisko </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Nazwisko'] ?>"></span><a href="index.php?id2=3"><span class="editicon"><i class="fa-solid fa-gear"></i></a></span><br>
    <span class="tekst">Uprawnienia </span><span class="pole"><input disabled class="editeduserinput"  type="text" value="<?php echo $row[0]['Uprawnienia'] ?>"></span><span class="editicon"><a href="index.php?id2=4"><i class="fa-solid fa-gear"></i></a></span><br>
<br><br><br><br><br><br>

</form>


    <?php
} else {
    echo "<h1>Brak uprawnień</h1>";
}

?>
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'bottom.php'); ?>