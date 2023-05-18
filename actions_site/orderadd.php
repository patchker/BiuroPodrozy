<?php
if (array_key_exists('user_site', @$_SESSION)) {


  $aktualnyuser = $_SESSION['user_site']['username'];



        $stmt = $db->query('SELECT * from cart');
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt2 = $db->query("SELECT * from user_biuro where Login='$aktualnyuser'");
        $row2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);


        for ($i = 0; $i < count($row); $i++) {

            if($row[$i]['user']==$_SESSION['user_site']['username']) {



$idwyc=$row[$i]['ID_wycieczki'];
$userr=$row[$i]['user'];
$idcart = $row[$i]['ID'];
$date1 = $row[$i]['date1'];
$date2 = $row[$i]['date2'];
$data_zamowienia = date("Y-m-d H:i:s");
//echo $idwyc;
echo $userr;
                $db->query("INSERT INTO orders (Lp,ID_wycieczki,Login,oplacone,ilość,date1,date2,data_zamowienia) VALUES ('','$idwyc','$userr',1,1,'$date1','$date2','$data_zamowienia')");

                $db->query("DELETE FROM cart where ID = '$idcart'");

echo "Zniżka: ".$row2[0]['Zniżka'];
                if($row2[0]['Zniżka']>=4)
                {
                    $db->query("UPDATE user_biuro set Zniżka = 0 where Login = '$userr'");
                }
                else
                {

                    $db->query("UPDATE user_biuro set Zniżka=Zniżka+1 where Login = '$userr'");
                }




            }
        }

        header("Location:site.php?action=main");





} else {
    header('Location:site.php?action=main');
}


?>