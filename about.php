<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['theme'])) {
        $_SESSION['theme'] = $_POST['theme'];
        header("Location: About.php");
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
    <title>About</title>
    <link rel="stylesheet" href="stest.css">
    <?php include 'style.php' ?>
    <style>
        body {
            background-color: black;
            color: green;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        canvas {
            border: 2px solid green;
            cursor: none;
        }
    </style>
</head>

<body id="divid">
    <header>
        <?php
        if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Hack') {
            echo '<div class="glitch-container">';
            echo '<div class="glitch-text">About</div>';
            echo '</div>';
        } else
            echo '<h1>About/CD</h1>';

        ?>

    </header>
    <?php include 'navbar.php' ?>


    <canvas id="gameCanvas" width="800" height="400"></canvas>

    <script>
        // Add JavaScript for the air hockey game here

        const canvas = document.getElementById('gameCanvas');
        const context = canvas.getContext('2d');

        const tableColor = '#3c3c3c';
        const puckColor = '#ff0000';
        const paddleColor = '#0000ff';

        const tableWidth = 800;
        const tableHeight = 400;

        const paddleWidth = 100;
        const paddleHeight = 10;

        let puckX = tableWidth / 2;
        let puckY = tableHeight / 2;
        let puckSpeedX = 2;
        let puckSpeedY = 1;

        let paddleX = tableWidth / 2 - paddleWidth / 2;
        let paddleY = tableHeight - 2 * paddleHeight;

        function draw() {
            // Draw the air hockey table
            context.fillStyle = tableColor;
            context.fillRect(0, 0, tableWidth, tableHeight);

            // Draw the puck
            context.fillStyle = puckColor;
            context.beginPath();
            context.arc(puckX, puckY, 10, 0, 2 * Math.PI);
            context.fill();

            // Draw the paddle
            context.fillStyle = paddleColor;
            context.fillRect(paddleX, paddleY, paddleWidth, paddleHeight);

            // Update the puck's position
            puckX += puckSpeedX;
            puckY += puckSpeedY;

            if (puckX <= 0 || puckX >= tableWidth) {
                puckSpeedX = -puckSpeedX;
            }

            if (puckY <= 0 || puckY >= tableHeight) {
                puckSpeedY = -puckSpeedY;
            }

            requestAnimationFrame(draw);
        }

        draw();
    </script>
    <div class="content">

        <p>Welcome!</p>


    </div>



    <script src="script.js"></script>
    <?php if ($theme === 'Hack'): ?>
        <script src="hack.js"></script>
    <?php endif; ?>
</body>

</html>