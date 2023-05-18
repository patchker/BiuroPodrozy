<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'top_site.php');

?>
    <div id="content2">



        <div id="mainleft">
        <div class="slideshow-container">


            <div class="mySlides fade">
                <div class="numbertext">1 / 5</div>
                <img src="img_trips/1wyjazdnadmorze.jpg" >
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 5</div>
                <img src="img_trips/2narciarstwowalpach.jpg" >
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 5</div>
                <img src="img_trips/3safariwtanzanii.jpg" ">
                <div class="text"></div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img src="img_trips/4zwiedzaniejaponii.jpg" ">
                <div class="text"></div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img src="img_trips/5.wędrówkipopatagonii.jpg" ">
                <div class="text"></div>
            </div>


            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
<br>

            <div id="dots" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>

            </div>
        </div>
        <br>


        <script>
            let slideIndex = 1;
            showSlides(slideIndex);


            function plusSlides(n) {
                showSlides(slideIndex += n);
            }


            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
            }


            setInterval(plusSlides, 5000,slideIndex); // Change image every 2 seconds

        </script>
        </div>
        <div id="mainright">
            <h3>Wczasy za granicą z biurem podróży Akati</h3>
            Leżysz na pięknej plaży, słońce, morze, palmy, a do tego All Inclusive na wyciągnięcie ręki. <br>
            Widzisz to? <br>
            Marzenia?<br> Może i tak, ale możesz sprawić, by zmieniły się w Twoje własne, cudowne, wakacyjne wspomnienia. Już dziś spraw sobie beztroskie wczasy za granicą. <br><br>
            Do wyboru masz tysiące hoteli i wiele ciepłych krajów, gdzie jesteś pod opieką polskich rezydentów naszego biura. W szczycie sezonu latamy codziennie z 12 lotnisk w Polsce, co gwarantuje elastyczne wakacje. Lecisz na tyle dni, ile chcesz z lotniska, które najbardziej Ci odpowiada.<br><br>
            Wybierz swoje wakacyjne miejsce, korzystając z wiedzy naszych doradców. Zabierz kochanego towarzysza podróży, radość i dobry humor - to mieszanka gwarantująca cudowne wakacje.

        </div>
    </div>

<div id="ocenki">

    <h1>Oceny naszego biura:</h1><br>
    <?php  for ($i = 0; $i < count($row); $i++) { ?>
    <div class="jednatrzecia">
        <i class="fa-regular fa-circle-user"></i><br>
       <?php echo $row[$i]['Login']?>
<br>
<br>


        <?php echo $row[$i]['Ocena']?><i class="fa-solid fa-star"></i><br><br>
        <?php echo $row[$i]['Treść']?>

    </div>
    <?php } ?>


</div>




    <br><br><br><br><br><br><br>
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'bottom_site.php'); ?>