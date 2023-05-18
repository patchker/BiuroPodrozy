<html>
<head>
    <title>Akati - biuro podróży</title>
    <link rel="stylesheet" href="style_login_site.css" type="text/css"/>
    <meta charset="utf-8">
    <meta name="author" content="Patryk Sioła, Michał Maj, Martyna Gryt, Szymon Musialik">
</head>

<body>
<div id="container">

    <?php
    if ($_SERVER['REQUEST_URI'] != '/index.php?action=login') {

        ?>

        <div id="menu">

            <ul>
                <?php
                if (array_key_exists('user_site', @$_SESSION)) {
                    if ($_SESSION['user']['Uprawnienia'] == 'Administrator') {
                        ?>
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a href="index.php">Użytkownicy</a></li>
                        <li><a href="index.php">Katalog wycieczek</a></li>
                        <li><a href="index.php">Zamówienia</a></li>
                        <li><a href="index.php">Oceny</a></li>
                        <li><a href="index.php?logout=true">Wyloguj <?php echo $_SESSION['user_site']['username'] ?></a></li>


                        <?php
                    } else {
                        ?>

                        <li><a href="index.php">Dashboard</a></li>
                        <li><a href="index.php">Użytkownicy</a></li>
                        <li><a href="index.php">Katalog wycieczek</a></li>
                        <li><a href="index.php">Zamówienia</a></li>
                        <li><a href="index.php">Oceny</a></li>
                        <li><a href="index.php?logout=true">Wyloguj <?php echo $_SESSION['user_site']['username'] ?></a></li>


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



