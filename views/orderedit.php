<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top.php');
if ($_SESSION['user']['Uprawnienia'] == "Administrator") {
    ?>
    <div id="content2">
        <a href="index.php?action=orders"><input class='back' type="button" value = "Wróć" width="100px"></a>

        <br><br><h2>Szczegóły zamówienia [<?php echo $row[0]['Lp']?>]</h2><br>


        <div id="tripedit"
        <form action="tak">
            <br>
            <table id="ordersTab">
                <thead>
                <tr>
                <td>Pole</td>
                <td>Wartość</td>
                </tr>
                </thead>
                <tr>
                <td>Numer zamówienia</td>
                <td><?php echo $row[0]['Lp'] ?></td>
                </tr>
                <tr>
                    <td>ID zamówionej wycieczki</td>
                    <td><?php echo $row[0]['ID_wycieczki'] ?></td>
                </tr>

                <tr>
                    <td>Login</td>
                    <td><?php echo $row[0]['Login'] ?></td>
                </tr>
                <tr>
                    <td>Oplacone?</td>
                    <td id="oplacone">

                        <?php

                        if( $row[0]['oplacone']==1)
                            {
                                echo 'TAK';
                                echo "<script>document.getElementById('oplacone').style='background-color:green'</script>";
                            }

                        else
                        {
                            echo 'NIE';
                            echo "<script>document.getElementById('oplacone').style='background-color:red'</script>";
                        }

                        ?>

                    </td>
                </tr>
                <tr>
                    <td>Data rozpoczęcia</td>
                    <td><?php echo $row[0]['date1'] ?></td>
                </tr>
                <tr>
                    <td>Data zakończenia</td>
                    <td><?php echo $row[0]['date2'] ?></td>
                </tr>


            </table>
            <br><br><br><br><br><br>

        </form>
    </div>
    Zamówione wycieczki:<br><br>
    <table id="ordersTab">
        <tr>
            <td>Zdjęcie</td>
            <td>Nazwa</td>
            <td>Ilość</td>
            <td>Cena</td>
        </tr>
        <tr>
            <td><img src='<?php echo $row2[0]['path'] ?>'></td>
            <td><?php echo $row2[0]['Nazwa'] ?></td>
            <td> <?php echo $row2[0]['ilość'] ?></td>
            <td><?php echo $row2[0]['Cena'] ?></td>
        </tr>
    </table>


    <?php
} else {
    echo "<h1>Brak uprawnień</h1>";
}

?>
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'bottom.php'); ?>