<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'top_site.php');
if ($_SESSION['user_site']['Uprawnienia'] == "Administrator") {
    ?>
    <div id="content2">

        <br><br><h2>Koszyk &nbsp </h2>
<br>





        <br><br>
        <table id="ordertable">
            <thead>
            <tr>


                <td>Nazwa</td>
                <td>Typ</td>
                <td>Kraj</td>
                <td>Cena za osobę</td>
                <td>Data rozpoczęcia</td>
                <td>Data zakończenia</td>
                <td>Liczba osób</td>
                <td>Usuń</td>

            </tr>
            </thead>

            <?php

            $NameLoggedUser = $_SESSION['user_site']['username'];
            $_SESSION['liczbaadminow'] = 0;
$suma = 0;
            for ($i = 0; $i < count($row); $i++) {

                ?>

                <tr>

                    <td><?php echo $row[$i]['Nazwa'] ?></td>
                    <td><?php echo $row[$i]['Typ'] ?></td>
                    <td><?php echo $row[$i]['Kraj'] ?></td>
                    <td><?php echo $row[$i]['Cena'] ?></td>
                    <td><?php echo $row[$i]['date1'] ?></td>
                    <td><?php echo $row[$i]['date2'] ?></td>
                    <td><?php echo $row[$i]['liczba_osob'] ?></td>
                    <td><a href="site.php?cartdelete=<?php echo $row[$i]['ID'] ?>"<i class="fa-solid fa-trash"></i></td>





                </tr>

                <?php
                $suma=$suma+$row[$i]['Cena']*$row[$i]['liczba_osob'];
            }
            ?>

        </table>
        <?php if(4-$row3[0]['Zniżka']==0)
        {?>

            <h3>Otrzymujesz rabat 20% na kolejne zamówienie.</h3>

        <?php
            $suma = $suma * (0.8);
        }else
            {?>

                <h4>Zamów jeszcze <?php echo 4-$row3[0]['Zniżka']?> wycieczki aby otrzymać 20% rabatu.</h4>

               <?php
            }
        ?>


        <?php ?>


        <h2>Łączna cena: <?php echo $suma;?> PLN</h2>
        <br> <br> <br>

        <?php

        if($suma>0)
        {
        ?>
        <span id="hold">Przytrzymaj aby złożyć i opłacić zamówienie.</span>


        <button id="zaplacbutton" class="icon_close hold_trigger">
            <span >Zapłać</span>
            <span class="spinner"></span>
        </button>


        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
            //obsługa ładnego przycisku
        </script>
        <script>
            var timeout_id = 0,
                hold_time = 1000,
                hold_trigger = $('.hold_trigger');

            hold_trigger.mousedown(function() {
                timeout_id = setTimeout(menu_toggle, hold_time);

            }).bind('mouseup mouseleave', function() {
                clearTimeout(timeout_id);

               // $('.spinner').removeClass('active');

            });

            function menu_toggle() {
                $('.spinner').addClass('active');
                $('.spinner').html("<i class='fa-regular fa-circle-check'></i>");

                window.setTimeout(function(){
                    $(document).ready( function() {
                        url = "site.php?action=orderadd";
                        $( location ).attr("href", url);
                    });

                }, 2000);
            }

            //koniec obsługi ładnego przycisku
        </script>


<?php

        }
?>




    </div>
    <?php
} else {
    echo "<h1>Brak uprawnień</h1>";
}

?>
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'bottom_site.php'); ?>

<script>


    function zmiana(n) {
        location.href = "site.php?help="+n;
    }




</script>
