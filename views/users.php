<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top.php');
if ($_SESSION['user']['Uprawnienia'] == "Administrator") {
    ?>
    <div id="content2">

    <br><br><h2>Użytkownicy biura podróży</h2>

    <table>
        <thead>
        <tr>
            <td>Lp.</td>
            <td>Imie</td>
            <td>Nazwisko</td>
            <td>Login</td>
            <td>Uprawnienia</td>
        </tr>
        </thead>
        <?php

        $NameLoggedUser = $_SESSION['user']['username'];
        $_SESSION['liczbaadminow'] = 0;

        for ($i = 0; $i < count($row); $i++) {

            ?>
<script>

    function elo(p)
    {


        location.href="index.php?id1="+p;


    }
</script>

            <tr onclick="elo(<?php echo $row[$i]['Lp']?>)">
                <td><?php echo $row[$i]['Lp'] ?></td>
                <td><?php echo $row[$i]['Imię'] ?></td>
                <td><?php echo $row[$i]['Nazwisko'] ?></td>
                <td><?php echo $row[$i]['Login'] ?></td>
                <td><?php echo $row[$i]['Uprawnienia'] ?></td>
            </tr>


                <?php

        }
        ?>

    </table>
    </div>


    <?php
} else {
    echo "<h1>Brak uprawnień</h1>";
}

?>
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'bottom.php'); ?>