<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['theme'])) {
        $_SESSION['theme'] = $_POST['theme'];
        header("Location: Gesprek.php");
        exit();
    }
}

$theme = isset($_SESSION['theme']) ? $_SESSION['theme'] : "Light";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gespreksverslagen</title>
    <link rel="stylesheet" href="stest.css">
    <?php include 'style.php'?>
</head>

<body>
    <header>
        <h1>Gespreksverslag</h1>
    </header>
    <?php include 'navbar.php' ?>
    <div class="gesprekdiv" id="gesprek-section">
        <div class="gesprek-text" id="texT">
            <h1>Gesprek</h1>
            <!-- <p>IT portfolio control - houdt bij waar het geld precies heen gaat in Etos, Gall&Gall en AH. Maakt een
                duideljk
                overzicht in excel en deelt met Maurice. Zorgt ervoor dat er niet te veel geld naar het ene gaat en te
                weinig
                naar het andere.
            </p> -->

        </div>
        <div class="gesprek-img">
            <img class="gesprek-image" src="Gesprek.png" alt="Gesprek" id="texT">
        </div>
    </div>
    <div class="divid"></div>




    </div>



    <script src="script.js"></script>
    <?php if ($theme === 'Hack'): ?>
        <script src="hack.js"></script>
    <?php endif; ?>
</body>

</html>