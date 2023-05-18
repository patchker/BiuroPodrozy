<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'top_site.php');

?>
<div id="content2">
<div class="ocenacenter">
    <br><br><h2>Oceń biuro podróży Akati</h2>
    <br>


    <form action="site.php?action=ocenainsert" method="post">
        <span class="tekst">Ocena</span><br>
        <input id="ocenainput" required id="ocena" name="ocena" type="number" max="5" min="0" value="5"><span style="font-size: 30px"> / 5<i class="fa-solid fa-star"></i></span><br><br><br>
        <span class="tekst" >Co Ci sie podoba w naszym biurze?</span><br>
        <textarea required name="tresc" id="areaocena" ></textarea><br><br>


        <input type="submit" class="back" value="Prześlij"><br><br>
        <script>



        </script>
    </form>


    <br><br>

</div>
</div>

<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'bottom_site.php'); ?>

