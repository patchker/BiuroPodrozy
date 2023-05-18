<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'top_site.php');

    ?>
    <div id="content2">
    <a href="site.php?action=trips"><input class='back' type="button" value = "Wróć" width="100px"></a>

    <br><br><h2>Szczegóły wycieczki "<?php echo $row[0]['Nazwa']?>"</h2><br>


<div id="tripedit">
    <form action="site.php?addtocart=<?php echo $row[0]['IDwycieczki'] ?>" method="POST" onsubmit="return validateForm()">


        <span class="tekst">Typ: </span><span class="pole"><?php echo $row[0]['Typ'] ?></span><br><br>
        <span class="tekst">Kraj: </span><span class="pole"><?php echo $row[0]['Kraj'] ?></span><br><br>
        <span class="tekst">Opis: </span><span class="pole"><?php echo $row[0]['Opis'] ?></span><br><br>
        <span class="tekst">Cena: </span><span class="pole"><?php echo $row[0]['Cena'] ?> PLN</span><br><br>
        <span class="tekst">Ilość dni: </span><span class="pole"><?php echo $row[0]['dni'] ?> </span><br><br>
        <span class="tekst">Data rozpoczęcia: </span><span class="pole"><input onchange="funk()" id="date1" name="date1" type="date"></span><br><br>
        <span class="tekst">Data zakończenia: </span><span class="pole"><input readonly id="date2" name="date2" type="date"></span><br><br>
        <span class="tekst">Ilość osób </span><span class="pole"><input required min="1" value="1" name="liczba" type="number"></span><br><br>


        <script>
            var today = new Date();
            var dateee = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 7);
            document.getElementById("date1").min = dateee.toISOString().slice(0,10);

            function funk()
{
    var startDateInput = document.getElementById("date1");
    var startDate = new Date(startDateInput.value);
    var endDate = new Date(startDate.getFullYear(), startDate.getMonth(), startDate.getDate() + <?php echo $row[0]['dni'] ?>);
    document.getElementById("date2").value = endDate.toISOString().slice(0, 10);


}
            function validateForm() {
                var dateValue = document.getElementById("date1").value;
                if (dateValue === "") {
                    alert("Wybierz poprawną datę.");
                    return false;
                }
                return true;
            }


        </script>

                        <?php if(isset($_SESSION['user_site']['username'])){ ?>
        <span class="tekst">Możliwy rabat: </span><span class="pole">
                            <?php

                       $znizka = $row3[0]['Zniżka']*10;
                       if($row3[0]['Zniżka']==4)
                           {

                           echo  $znizka/2; ?>% czyli <?php echo $row[0]['Cena']*(($znizka/2)/100) ?> PLN<br><br>

                            <?php

                           }else{

                            echo  "0"; ?>% czyli <?php echo 0 ?> PLN<br><br>
                            <?php
                       }


 ?>

            <input type="submit" class="back" value="Dodaj do koszyka">

        <?php

        }else
            {?>
                Zaloguj się aby dodać do koszyka.


                <?php
            }

            ?>

        <br><br><br><br><br><br>
    </form>
    </div>
    <div class="tripimage">

<img src="<?php echo $row[0]['path'] ?>">
    </div>  <br><br><br><br><br><br>
    <br><br><br><br><br><br>




<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'bottom_site.php'); ?>