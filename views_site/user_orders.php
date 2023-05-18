<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'top_site.php');
if ($_SESSION['user_site']['Uprawnienia'] == "Administrator") {
    ?>
    <div id="content2">

        <br><br><h2>Zamówienia &nbsp </h2>
        <br>





        <br><br>
        <table id="ordertable">
            <thead>
            <tr>


                <td>Lp</td>
                <td>Nazwa wycieczki</td>
                <td>Oplacone?</td>
                <td>Ilość osób</td>
                <td>Data rozpoczęcia</td>
                <td>Data zakończenia</td>
                <td>Oceń</td>

            </tr>
            </thead>

            <?php

            $NameLoggedUser = $_SESSION['user_site']['username'];
            $_SESSION['liczbaadminow'] = 0;
            $suma = 0;
            for ($i = 0; $i < count($row); $i++) {

                ?>

                <tr>

                    <td><?php echo $row[$i]['Lp'] ?></td>
                    <td><?php echo $row[$i]['Nazwa'] ?></td>
                    <td><?php if($row[$i]['oplacone']==1) echo "TAK"; else echo "NIE"; ?></td>
                    <td><?php echo $row[$i]['ilość'] ?></td>
                    <td><?php echo $row[$i]['date1'] ?></td>
                    <td><?php echo $row[$i]['date2'] ?></td>
                    <td><button style="background:none; border:0;" onclick='location.href="site.php?ocenwycieczkeid=<?php echo $row[$i]['ID_wycieczki']  ?>"'><i class="fa-solid fa-star-half-stroke"></i></button></td>






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
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'bottom_site.php'); ?>

