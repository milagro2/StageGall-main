<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stest.css">
</head>

<body>
    <header class="todo-header" id="page-top">
        <h1>To do tijdens stage</h1>
    </header>

    <?php include 'navbar.php' ?>

    <div class="sticky-block">

        <p>Onderdelen</p>
        <ul>
            <li><a href="#todo-section">To Do</a></li>
            <li><a href="#progress-section">In progress</a></li>
            <li><a href="#notes-section">Side Notes</a></li>
            <li><a href="#done-section">Done</a></li>
        </ul>
    </div>
<!-- -----------------------------------To do list----------------------------------- -->
    <div class="todo-content" id="todo-section">

        <div class="todo-text">
            <h1>Wat is er to do?</h1>

            <ul id="todo-list">
                <li><input type="checkbox"> Urenverandwoording ondertekenen dag 1-20 Maurice</li>
                <li><input type="checkbox"> Presentatie DevOps wanneer?</li>
                <li><input type="checkbox"> Taak 3</li>
            </ul>
        </div>
        <div class="doto-img">
            <img class="todo-image" src="todo.png" alt="todo">
        </div>

    </div>

    <div class="divid"></div>
<!-- -----------------------------------In Progress----------------------------------- -->

<!-- -----------------------------------Side Notes----------------------------------- -->
<div class="notes-content" id="notes-section">

        <div class="notes-text">
            <h1>Side notes</h1>

            <ul id="notes-list">
                <li><input type="checkbox">salesforce, commerce cloud en service cloud</li>
                <li><input type="checkbox">branch strategie</li>
                <li><input type="checkbox">welke automations pipeline</li>
            </ul>
        </div>
        <div class="bnot-img">
            <img class="notes-image" src="notes.png" alt="notes">
        </div>

    </div>

    <div class="divid"></div>



    <script src="script.js"></script>
</body>

</html>