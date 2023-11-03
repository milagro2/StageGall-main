<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: black;
            color: green;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        canvas {
            border: 2px solid green;
        }

        #gameOverMessage {
            margin-bottom: 20px;
        }

        #playAgainButton {
            display: none;
        }

        #nextGameButton {
            display: none;
        }

        #autoPlayButton {
            margin-bottom: 10px;
        }

        #speedButton {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <canvas id="gameCanvas" width="900" height="700"></canvas>
    <p id="gameOverMessage"></p>
    <button id="playAgainButton" onclick="resetGame()">Play Again</button>
    <button id="nextGameButton" onclick="startNextGame()" style="display: none;">Next Game</button>
    <button id="autoPlayButton" onclick="toggleAutoPlay()">Auto Play</button>
    <button id="speedButton" onclick="toggleSpeed()">Speed Up</button>

    <script>
        const canvas = document.getElementById('gameCanvas');
        const context = canvas.getContext('2d');
        const gameOverMessage = document.getElementById('gameOverMessage');
        const playAgainButton = document.getElementById('playAgainButton');
        const nextGameButton = document.getElementById('nextGameButton');
        const autoPlayButton = document.getElementById('autoPlayButton');
        const speedButton = document.getElementById('speedButton');

        const tableColor = '#3c3c3c';
        const puckColor = '#ff0000';
        const paddleColor = '#0000ff';
        const brickColor = '#ffffff';

        const tableWidth = 900;
        const tableHeight = 700;

        const paddleWidth = 100;
        const paddleHeight = 10;

        let puckX = tableWidth / 2;
        let puckY = tableHeight / 2;
        let puckSpeedX = 5;
        let puckSpeedY = 5;
        let gameStarted = false;

        let paddleX = tableWidth / 2 - paddleWidth / 2;
        let paddleY = tableHeight - 2 * paddleHeight;

        const brickWidth = 70;
        const brickHeight = 20;
        const bricks = [];

        let autoPlay = false;
        let speedUp = false;
        let maxSpeed = 15;
        let intervalId;

        canvas.addEventListener('mousemove', (event) => {
            if (!autoPlay) {
                paddleX = event.clientX - canvas.getBoundingClientRect().left - paddleWidth / 2;
            }
        });

        function toggleAutoPlay() {
            autoPlay = !autoPlay;
            if (autoPlay) {
                autoPlayButton.textContent = 'Manual Play';
                intervalId = setInterval(() => {
                    paddleX = puckX - paddleWidth / 2;
                }, 10);
            } else {
                autoPlayButton.textContent = 'Auto Play';
                clearInterval(intervalId);
            }
        }

        function toggleSpeed() {
            if (speedUp) {
                puckSpeedX = 5;
                puckSpeedY = 5;
                speedButton.textContent = 'Speed Up';
            } else {
                puckSpeedX = 25;
                puckSpeedY = 25;
                speedButton.textContent = 'Slow Down';
            }
            speedUp = !speedUp;
        }

        function generateRandomBricks() {
            let numBricks = Math.floor(Math.random() * 16) + 10; // Random number of bricks (between 10 and 25)
            let brickY = 0;

            for (let i = 0; i < numBricks; i++) {
                let brickX = Math.random() * (tableWidth - brickWidth);
                bricks.push({
                    x: brickX,
                    y: brickY,
                    width: brickWidth,
                    height: brickHeight,
                    broken: false,
                });

                if (brickY + brickHeight < tableHeight) {
                    brickY += brickHeight + 2;
                }
            }
        }

        generateRandomBricks();

        function draw() {
            context.fillStyle = tableColor;
            context.fillRect(0, 0, tableWidth, tableHeight);

            if (gameStarted) {
                puckX += puckSpeedX;
                puckY += puckSpeedY;
            }

            context.fillStyle = puckColor;
            context.beginPath();
            context.arc(puckX, puckY, 10, 0, 2 * Math.PI);
            context.fill();

            context.fillStyle = paddleColor;
            context.fillRect(paddleX, paddleY, paddleWidth, paddleHeight);

            context.fillStyle = brickColor;
            bricks.forEach((brick) => {
                if (!brick.broken) {
                    context.fillRect(brick.x, brick.y, brick.width, brick.height);
                }
            });

            if (puckY + 10 >= tableHeight) {
                gameOver();
            }

            if (puckY <= 0) {
                puckSpeedY = -puckSpeedY;
            }

            if (puckX <= 0 || puckX >= tableWidth) {
                puckSpeedX = -puckSpeedX;
            }

            if (
                puckY + 10 >= paddleY &&
                puckX >= paddleX &&
                puckX <= paddleX + paddleWidth
            ) {
                puckSpeedY = -puckSpeedY;
            }

            bricks.forEach((brick) => {
                if (!brick.broken) {
                    if (
                        puckY - 10 <= brick.y + brick.height &&
                        puckY - 10 >= brick.y &&
                        puckX >= brick.x &&
                        puckX <= brick.x + brick.width
                    ) {
                        puckSpeedY = -puckSpeedY;
                        brick.broken = true;

                        if (bricks.every((brick) => brick.broken)) {
                            nextGameButton.style.display = 'block';
                        }
                    }
                }
            });

            requestAnimationFrame(draw);
        }

        function gameOver() {
            context.clearRect(0, 0, tableWidth, tableHeight);
            gameOverMessage.textContent = 'Game Over';
            playAgainButton.style.display = 'block';
        }

        function startNextGame() {
            bricks.length = 0;
            generateRandomBricks();
            playAgainButton.style.display = 'none';
            nextGameButton.style.display = 'none';
            puckX = tableWidth / 2;
            puckY = tableHeight / 2;
            puckSpeedX = 5;
            puckSpeedY = 5;
            gameStarted = false;
        }

        function resetGame() {
            bricks.length = 0;
            generateRandomBricks();
            gameOverMessage.textContent = '';
            playAgainButton.style.display = 'none';
            nextGameButton.style.display = 'none';
            puckX = tableWidth / 2;
            puckY = tableHeight / 2;
            puckSpeedX = 5;
            puckSpeedY = 5;
            gameStarted = false;
        }

        canvas.addEventListener('click', function () {
            if (!gameStarted) {
                gameStarted = true;
            }
        });

        draw();
    </script>
</body>

</html>
