<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top.php');

?>
<div id="content2">
    <div class="homebox1">
    <h2 style="height:200px">Witaj <?php echo $_SESSION['user']['username']; ?>! 👋</h2>
    </div>

    <div class="homebox4">
        <input id="site_href" type="button" onclick="location.href='site.php';"
               value="Przejdź na swoją stronę"/>

    </div>
    <div class="homebox2">
        <?php

        if($_SESSION['user']['Uprawnienia']=="Administrator")
        {
            ?>
        <h3>Ostatnie zamówienia:</h3>


        <table id="ordersTab">
            <thead>
            <tr>
                <td>Lp.</td>
                <td>ID_wycieczki</td>
                <td>Login</td>

            </tr>

            </thead>
            <?php
for ($i = 0; $i < count($row); $i++) {
            ?>
            <tr>
                <td><?php echo $row[$i]['Lp'] ?></td>
                <td><?php echo $row[$i]['ID_wycieczki'] ?></td>
                <td><?php echo $row[$i]['Login'] ?></td>

            </tr>

    <?php
}
    ?>

        </table>
                <?php
            }else
        {
                ?>



                <?php }?>

    </div>
    <div class="homebox3">
        <h3>Ostatnie oceny sklepu:</h3>

        <table id="ordersTab2">

            <thead>
            <tr>
                <td>Lp.</td>
                <td>Ocena</td>
                <td>Treść</td>
                <td>Login</td>

            </tr>

            </thead>
            <?php
            for ($i = 0; $i < count($row2); $i++) {
                ?>
                <tr>
                    <td><?php echo $row2[$i]['Lp'] ?></td>
                    <td><?php echo $row2[$i]['Ocena'] ?>⭐</td>
                    <td><?php echo $row2[$i]['Treść'] ?></td>
                    <td><?php echo $row2[$i]['Login'] ?></td>

                </tr>

                <?php
            }
            ?>

        </table>
    </div>

</div>



    <br><br><br><br><br><br><br>
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'bottom.php'); ?>