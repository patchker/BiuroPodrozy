<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'top_site.php');

    ?>
    <div id="content2">

        <br><br><h2>Katalog wycieczek &nbsp </h2>
<br>



        Sortuj po:
        <select id="select_sort" onchange="zmiana(this.value)">
            <option disabled selected>Wybierz</option>
            <option value="nazwa">Nazwa wycieczki</option>
            <option value="ocena">Ocena</option>
            <option value="cena">Cena</option>
            <option value="typ">Typ</option>
        </select>


        <br><br>
        <table>
            <thead>
            <tr>
                <td></td>

                <td>Nazwa</td>
                <td>Typ</td>
                <td>Cena</td>
                <td>Ilość dni</td>
                <td>Kraj</td>
                <td>Ocena</td>
                <td>Opis</td>

            </tr>
            </thead>
            <script>

                function elo(p)
                {


                    location.href="site.php?id3="+p;


                }
            </script>
            <?php

           // $NameLoggedUser = $_SESSION['user_site']['username'];
            $_SESSION['liczbaadminow'] = 0;

            for ($i = 0; $i < count($row); $i++) {

                ?>

                <tr onclick="elo(<?php echo $row[$i]['IDwycieczki']?>)">
                    <td><img width="100%" style="" src="<?php echo $row[$i]['path'] ?>"></td>

                    <td><?php echo $row[$i]['Nazwa'] ?></td>
                    <td><?php echo $row[$i]['Typ'] ?></td>
                    <td><?php echo $row[$i]['Cena'] ?></td>
                    <td><?php echo $row[$i]['dni'] ?></td>
                    <td><?php echo $row[$i]['Kraj'] ?></td>
                    <td><?php if(empty($row[$i]['avg(Ocena)'])) echo "Brak ocen"; else {echo round($row[$i]['avg(Ocena)'],1); echo "⭐";} ?></td>
                    <td class="opis"><?php echo $row[$i]['Opis'] ?></td>



                </tr>

                <?php
            }
            ?>

        </table>
    </div>

<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'bottom_site.php'); ?>

<script>


    function zmiana(n) {
        location.href = "site.php?help="+n;
    }




</script>
