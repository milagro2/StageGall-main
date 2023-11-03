<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['theme'])) {
        $_SESSION['theme'] = $_POST['theme'];
        header("Location: stageVerslag.php");
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
    <title>Stageverslag</title>
    <link rel="stylesheet" href="stest.css">
    <?php include 'style.php'?>
</head>

<body id="divid" >
    <header>
    <?php
        if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Hack') {
            echo '<div class="glitch-container">';
            echo '<div class="glitch-text">Stage-verslag</div>';
            echo '</div>';
        }
        else echo '<h1>Stage-verslag</h1>';	
            
        ?>

    </header>
    <?php include 'navbar.php' ?>

    <div class="content">

        <p>Welcome!</p>


    </div>



    <script src="script.js"></script>
    <?php if ($theme === 'Hack'): ?>
        <script src="hack.js"></script>
    <?php endif; ?>
</body>

</html>