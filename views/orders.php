<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top.php');
if ($_SESSION['user']['Uprawnienia'] == "Administrator") {
    ?>
    <div id="content2">

        <br><br><h2>Zamówienia</h2>

        <table>
            <thead>
            <tr>
                <td>Lp.</td>
                <td>ID_wycieczki</td>
                <td>Login uzytkownika</td>

                <td>Data rozpoczęcia</td>
                <td>Data zakończenia</td>
                <td>Oplacone?</td>

            </tr>
            </thead>
            <script>

                function elo(p)
                {


                    location.href="index.php?id5="+p;


                }
            </script>
            <?php

            $NameLoggedUser = $_SESSION['user']['username'];


            for ($i = 0; $i < count($row); $i++) {

                ?>

                <tr onclick="elo(<?php echo $row[$i]['Lp']?>)">
                    <td><?php echo $row[$i]['Lp'] ?></td>
                    <td><?php echo $row[$i]['ID_wycieczki'] ?></td>
                    <td><?php echo $row[$i]['Login'] ?></td>
                    <td><?php echo $row[$i]['date1'] ?></td>
                    <td><?php echo $row[$i]['date2'] ?></td>
                    <td class="oplacone">

                        <?php

                        if( $row[$i]['oplacone']==1)
                        {
                            echo 'TAK';
                            echo "<script>document.getElementsByClassName('oplacone')[$i].style='background-color:green'</script>";
                        }

                        else
                        {
                            echo 'NIE';
                            echo "<script>document.getElementsByClassName('oplacone')[$i].style='background-color:red'</script>";
                        }

                        ?>

                    </td>






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