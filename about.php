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
    <?php include 'style.php'?>
</head>

<body>
    <header>
        <h1>About</h1>
    </header>
    <?php include 'navbar.php' ?>

    <div class="content">

        <p>Welcome!</p>

        
    </div>



    <script src="script.js"></script>
</body>

</html>