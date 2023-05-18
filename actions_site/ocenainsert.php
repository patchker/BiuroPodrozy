<?php
if(!isset($_SESSION['user_site']['username'])) {

    header("Location:site.php?action=main");

}
else {
    $aktualny = $_SESSION['user_site']['username'];

    $ocena = $_POST['ocena'];
    $tresc = $_POST['tresc'];


        $stmt = $db->query("INSERT INTO ratings_biuro values('','$ocena',now(),'$tresc','$aktualny')");






}
?>

