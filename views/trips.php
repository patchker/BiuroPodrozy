<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top.php');

    ?>
    <div id="content2">

        <br><br><h2>Katalog wycieczek &nbsp <a href="index.php?action=tripadd"><button type="button" class="back">Dodaj nową wycieczkę</button></a> </h2>

        <table>
            <thead>
            <tr>
                <td></td>
                <td>IDwycieczki</td>
                <td>Nazwa</td>
                <td>Typ</td>
                <td>Cena</td>
                <td>Kraj</td>
                <td>Liczba dni</td>
                <td>Opis</td>

            </tr>
            </thead>
            <script>

                function elo(p)
                {


                    location.href="index.php?id3="+p;


                }
            </script>
            <?php

            $NameLoggedUser = $_SESSION['user']['username'];
            $_SESSION['liczbaadminow'] = 0;

            for ($i = 0; $i < count($row); $i++) {

                ?>

                <tr onclick="elo(<?php echo $row[$i]['IDwycieczki']?>)">
                    <td><img width="100%" style="" src="<?php echo $row[$i]['path'] ?>"></td>
                    <td><?php echo $row[$i]['IDwycieczki'] ?></td>
                    <td><?php echo $row[$i]['Nazwa'] ?></td>
                    <td><?php echo $row[$i]['Typ'] ?></td>
                    <td><?php echo $row[$i]['Cena'] ?></td>
                    <td><?php echo $row[$i]['Kraj'] ?></td>
                    <td><?php echo $row[$i]['dni'] ?></td>
                    <td class="opis"><?php echo $row[$i]['Opis'] ?></td>



                </tr>

                <?php
            }
            ?>

        </table>
    </div>



<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'bottom.php'); ?>