<html>
<head>
    <title>Akati - biuro podróży</title>
    <link rel="stylesheet" href="style_site.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="img/icon.ico">
    <meta charset="utf-8">
    <meta name="author" content="Patryk Sioła, Michał Maj, Martyna Gryt, Szymon Musialik">
    <?php


        $stmt2 = $db->query('SELECT * from site_config');
        $row2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);




    ?>

<style>
    #menu
    {
        background-color:<?php echo $row2[0]['menucolor'] ?>;

    }
    #logo
    {
        background-color:<?php echo $row2[0]['menucolor'] ?>;
    }
    body
    {
        background-color:<?php echo $row2[0]['backgroundcolor'] ?>;
    }


</style>
</head>

<body>
<div id="container">

    <?php
    if ($_SERVER['REQUEST_URI'] != '/index.php?action=login') {

        ?>
        <div id="logo">
          <a href="site.php"><img src="img/logo_site.png"></a>

        </div>
        <div id="menu">

            <ul>
                <?php

                    $stmt2 = $db->query('SELECT * from site_config');
                    $row2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);





                if (array_key_exists('user_site', @$_SESSION)) {
?>

                            <?php if($row2[0]['1_visible']){ ?>
                        <li><a href="site.php">Strona główna</a></li>
                            <?php } ?>

                        <?php if($row2[0]['2_visible']){ ?>
                        <li><a href="site.php?action=trips">Katalog wycieczek</a></li>
                        <?php } ?>

                        <?php if($row2[0]['3_visible']){ ?>
                        <li><a href="site.php?action=user_orders">Twoje zamówienia</a></li>
                        <?php } ?>

                        <?php if($row2[0]['4_visible']){ ?>
                            <li><a href="site.php?action=ocen">Oceń nasze biuro</a></li>
                        <?php } ?>


                        <li id="koszyk"><a href="site.php?action=cart">Koszyk <i class="fa-solid fa-basket-shopping"></i></a></li>
                        <li id="lastLI"> <a href="site.php?logout=true"> Wyloguj </a></li>


                     <?php
                } else {
                    ?>
                    <?php if($row2[0]['1_visible']){ ?>
                        <li><a href="site.php">Strona główna</a></li>
                    <?php } ?>
                    <?php if($row2[0]['2_visible']){ ?>
                        <li><a href="site.php?action=trips">Katalog wycieczek</a></li>
                    <?php } ?>

                    <li id="lastLI"><a href="site.php?action=login">Zaloguj </a></li>

                <?php
                    } ?>


            </ul>

        </div>
        <?php

    }
    ?>

    <?php
    if ($_SERVER['REQUEST_URI'] == '/index.php?action=login')
    {
    ?>
    <div id="content_login">
        <?php
        }else
        {
        ?>
        <div id="content">
            <?php
            }

            ?>



