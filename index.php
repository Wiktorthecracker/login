<?php


    include 'functions.php';
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home Pagina</title>
</head>
<body>
    <h1>Login en Registration</h1>
    <section>
        <h2>Welkom op de home pagina</h2>
        <?php
            Overzicht();
        ?>
    </section>
</body>
</html>