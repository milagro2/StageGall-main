<?php
$current_page = basename($_SERVER["SCRIPT_FILENAME"]);
?>
<nav id="navbar">
    <ul>
        <li><a href="StHome.php" <?php if ($current_page == "StHome.php") echo 'class="active"'; ?>>Home</a></li>
        <li><a href="Agile.php" <?php if ($current_page == "Agile.php") echo 'class="active "'; ?>>Agile</a></li>
        <li><a href="stageVerslag.php" <?php if ($current_page == "stageVerslag.php") echo 'class="active"'; ?>>Stage-Verslag</a></li>
        <li><a href="CICD.php" <?php if ($current_page == "CICD.php") echo 'class="active"'; ?>>CICD</a></li>
        <li><a href="about.php" <?php if ($current_page == "about.php") echo 'class="active"'; ?>>About</a></li>

    </ul>
</nav>