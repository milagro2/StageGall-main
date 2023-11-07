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
    <?php include 'style.php' ?>
</head>

<body id="divid">
    <header>
        <?php
        if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Hack') {
            echo '<div class="glitch-container">';
            echo '<div class="glitch-text">Gespreksverslag</div>';
            echo '</div>';
        } else
            echo '<h1>Gespreksverslag</h1>';

        ?>

    </header>
    <?php include 'navbar.php' ?>
    <div class="sticky-block">
        <p>Onderdelen</p>
        <ul>
            <li><a href="#gesprek1-section">Gesprek Vladimir</a></li>
            <li><a href="#gesprek2-section">Gesprek Wouter-Bas</a></li>
            <li><a href="#gesprek3-section">Gesprek Hugo</a></li>
            <li><a href="#gesprek4-section">Gesprek</a></li>

        </ul>
    </div>
    <!-- -----------------------------------Gesprek 1----------------------------------- -->
    <div class="gesprekdiv" id="gesprek1-section">
        <div class="gesprek-text" id="texT">
            <h1>Gesprek Vladimir</h1>
            <p>Vladimir Kurganov is a <strong>Cloud DevOps engineer</strong> with a software development background.
                He started as back-end software engineer and did this for 10 years. He was developing microservices and
                webservices with C#, .NET Framework, Javascript and Note.js. After that he switched to DevOps
                disipline. He learned Jenkins and Github Actions and is now mostly working with
                Microsoft Azure. He is <strong>building and maintaining ci/cd pipelines</strong> for different teams 
                and aplications. Those pipelines build and deploy aplications and infrastructure. The software engineer
                experience help him understand developer teams. He uses the code languages: C#, Javascript, Phyton, CSS,
                HTML and XML. He works with the team that Maurice leads.
            </p>

        </div>
        <div class="gesprek-img">
            <img class="gesprek-image" src="Gesprek.png" alt="Gesprek" id="texT">
        </div>
    </div>

    <div class="divid"></div>

    <!-- -----------------------------------Gesprek 2----------------------------------- -->
    <div class="gesprekdiv" id="gesprek2-section">
        <div class="gesprek-text" id="texT">
            <h1>Gesprek Wouter-Bas</h1>
            <p>IT portfolio control - houdt bij waar het geld precies heen gaat in Etos, Gall&Gall en AH. Maakt een
                duideljk
                overzicht in excel en deelt met Maurice. Zorgt ervoor dat er niet te veel geld naar het ene gaat en te
                weinig naar het andere.
            </p>

        </div>
        <div class="gesprek-img">
            <img class="gesprek-image" src="Gesprek.png" alt="Gesprek" id="texT">
        </div>
    </div>
    <div class="divid"></div>
    <!-- -----------------------------------Gesprek 3----------------------------------- -->

    <script src="script.js"></script>
    <?php if ($theme === 'Hack'): ?>
        <script src="hack.js"></script>
    <?php endif; ?>
</body>

</html>