<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['theme'])) {
        $_SESSION['theme'] = $_POST['theme'];
        header("Location: ToDo.php");
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
    <title>ToDo</title>
    <link rel="stylesheet" href="stest.css">
    <?php include 'style.php' ?>
</head>

<body id="divid" >
    <header id="page-top">
    <?php
        if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Hack') {
            echo '<div class="glitch-container">';
            echo '<div class="glitch-text">To do tijdens stage</div>';
            echo '</div>';
        }
        else echo '<h1>To do tijdens stage</h1>';	
            
        ?>
        
    </header>

    <?php include 'navbar.php' ?>
    <div class="sticky-block">

        <p>Onderdelen</p>
        <ul>
            <li><a href="#todo-section">To Do</a></li>
            <li><a href="#notes-section">Side Notes</a></li>
            <li><a href="#done-section">Brick breaker color = multiple hits to break</a></li>

        </ul>
    </div>
    <!-- -----------------------------------To do list----------------------------------- -->
    <div class="tododiv" id="todo-section">

        <div class="todo-text" id="texT">
            <h1>Wat is er to do?</h1>

            <ul id="todo-list">
                <li><input type="checkbox">Gespreksverslagen</li>
                <li><input type="checkbox">Host website for free</li>
                <li><input type="checkbox"></li>
            </ul>
        </div>
        <div class="doto-img">
            <img class="todo-image" src="todo.png" alt="todo">
        </div>

    </div>

    <div class="divid"></div>

    <!-- -----------------------------------Side Notes----------------------------------- -->
    <div class="notesdiv" id="notes-section">

        <div class="notes-text" id="texT">
            <h1>Side notes</h1>

            <ul id="notes-list">
                <li>salesforce, commerce cloud en service cloud</li>
                <li>branch strategie</li>
                <li>Hey</li>
            </ul>
        </div>
        <div class="bnot-img">
            <img class="notes-image" src="notes.png" alt="notes">
        </div>

    </div>

    <div class="divid"></div>

    <!-- -----------------------------------Done----------------------------------- -->
    <div class="donediv" id="done-section">

        <div class="done-text" id="texT">
            <h1>Done</h1>

            <ul id="done-list">
                <li></li>
                <li></li>
                <li>Hey</li>
            </ul>
        </div>
        <div class="gedaan-img">
            <img class="done-image" src="done.png" alt="done">
        </div>

    </div>

    <div class="divid"></div>



    <script src="script.js"></script>
    <?php if ($theme === 'Hack'): ?>
        <script src="hack.js"></script>
    <?php endif; ?>
</body>

</html>