<html>
<head>
    <title>CMS</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
<link rel="icon" href="img/cms_icon.ico">
    <meta charset="utf-8">
    <meta name="author" content="Patryk Sioła, Michał Maj, Martyna Gryt, Szymon Musialik">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



</head>

<body>
<div id="container">

    <?php
    if ($_SERVER['REQUEST_URI'] != '/index.php?action=login') {

        ?>
        <div id="logo">
            <a href="index.php?action=home"><img src="img/logo_text.png"></a>

        </div>
        <div id="menu">

            <ul>
                <?php
                if (array_key_exists('user', @$_SESSION)) {
                    if ($_SESSION['user']['Uprawnienia'] == 'Administrator') {
                        ?>
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a href="index.php?action=users">Użytkownicy</a></li>
                        <li><a href="index.php?action=trips">Katalog wycieczek</a></li>
                        <li><a href="index.php?action=orders">Zamówienia</a></li>
                        <li><a href="index.php?action=ratings">Oceny</a></li>
                        <li><a href="index.php?action=config">Konfiguracja Strony</a></li>
                        <li><a href="index.php?logout=true">Wyloguj <?php echo $_SESSION['user']['username'] ?></a></li>


                        <?php
                    } else {
                        ?>

                        <li><a href="index.php">Dashboard</a></li>
                        <li><a href="index.php?action=trips">Katalog wycieczek</a></li>

                        <li><a href="index.php?action=ratings">Oceny</a></li>

                        <li><a href="index.php?logout=true">Wyloguj <?php echo $_SESSION['user']['username'] ?></a></li>


                        <?php
                    }
                } else {
                    ?>


                <?php } ?>


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



