<?php
if(!isset($_SESSION['user_site']['username'])) {

    header("Location:site.php?action=main");

}
else {
    $temp = $_SESSION['ocenwycieczkeid'];
    $aktualny = $_SESSION['user_site']['username'];

    $ocena = $_POST['ocena'];
    $tresc = $_POST['tresc'];


        $stmt = $db->query("INSERT INTO ratings values('','$temp','$ocena',now(),'$tresc','$aktualny')");





}
?>

