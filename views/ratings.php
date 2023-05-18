<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top.php');

    ?>
    <div id="content2">

        <br><br><h2>Oceny</h2>

        <table>
            <thead>
            <tr>
                <td>Lp.</td>
                <td>Ocena</td>
                <td>Data</td>
                <td>Treść</td>

            </tr>
            </thead>
            <?php

            $NameLoggedUser = $_SESSION['user']['username'];


            for ($i = 0; $i < count($row); $i++) {

                ?>

                <tr>
                    <td><?php echo $row[$i]['Lp'] ?></td>
                    <td><?php echo $row[$i]['Ocena'] ?> ⭐</td>
                    <td><?php echo $row[$i]['Data'] ?></td>
                    <td><?php echo $row[$i]['Treść'] ?></td>






                </tr>

                <?php
            }
            ?>

        </table>
    </div>



<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'bottom.php'); ?>