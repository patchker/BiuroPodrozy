<?php


        $stmt = $db->query('SELECT *,avg(Ocena) from trips LEFT JOIN ratings ON trips.IDwycieczki=ratings.ID_wycieczki group by IDwycieczki order by Nazwa ASC');


        if(isset($_SESSION['sort']))
        {

            if($_SESSION['sort']=='nazwa')
            {

                $stmt = $db->query('SELECT *,avg(Ocena) from trips LEFT JOIN ratings ON trips.IDwycieczki=ratings.ID_wycieczki group by IDwycieczki order by Nazwa ASC');
            }else if($_SESSION['sort']=='ocena')
            {

                $stmt = $db->query('SELECT *,avg(Ocena) from trips LEFT JOIN ratings ON trips.IDwycieczki=ratings.ID_wycieczki group by IDwycieczki order by avg(Ocena) DESC');

            } else if($_SESSION['sort']=='cena')
            {

                $stmt = $db->query('SELECT *,avg(Ocena) from trips LEFT JOIN ratings ON trips.IDwycieczki=ratings.ID_wycieczki group by IDwycieczki order by Cena ASC');
            }else if($_SESSION['sort']=='typ')
            {

                $stmt = $db->query('SELECT *,avg(Ocena) from trips LEFT JOIN ratings ON trips.IDwycieczki=ratings.ID_wycieczki group by IDwycieczki order by Typ ASC');
            }


        }



        //srednia ocena
       $stmt2 = $db->query('SELECT avg(Ocena) from ratings group by ID_wycieczki');
        $row2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);



        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);






?>

