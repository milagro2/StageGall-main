<?php
$current_page = basename($_SERVER["SCRIPT_FILENAME"]);
?>

<body id="divid">

    <nav id="navbar">
        <ul>

            <li><a href="StHome.php" <?php if ($current_page == "StHome.php")
                echo 'class="active"'; ?>>Home</a></li>
            <li><a href="Agile.php" <?php if ($current_page == "Agile.php")
                echo 'class="active "'; ?>>Agile</a></li>
            <li><a href="DevOps.php" <?php if ($current_page == "DevOps.php")
                echo 'class="active"'; ?>>DevOps</a></li>
            <li><a href="Gesprek.php" <?php if ($current_page == "CICD.php")
                echo 'class="active"'; ?>>Gespreksverslag</a>
            </li>
            <li><a href="ToDo.php" <?php if ($current_page == "ToDo.php")
                echo 'class="active"'; ?>>To do</a></li>
            <!-- <li><a href="stageVerslag.php" <?php if ($current_page == "stageVerslag.php")
                echo 'class="active"'; ?>>Stage-Verslag</a></li>
            <li><a href="about.php" <?php if ($current_page == "about.php")
                echo 'class="active"'; ?>>About</a></li> -->
        </ul>

        <ul class="right-nav">
            <li><a href="#page-top">Page top</a></li>
            <li>

                <form method="post" action="">
                    <button type="submit" name="theme" value="Light"
                        class="<?php echo $_SESSION['theme'] === 'Light' ? 'selected' : ''; ?>">Light</button>

                    <button type="submit" name="theme" value="Dark"
                        class="<?php echo $_SESSION['theme'] === 'Dark' ? 'selected' : ''; ?>">Dark</button>

                    <button type="submit" name="theme" value="Neon"
                        class="<?php echo $theme === 'Neon' ? 'selected' : ''; ?>">Neon</button>
                    <button type="submit" name="theme" value="Hack"
                        class="<?php echo $theme === 'Hack' ? 'selected' : ''; ?>">Hack</button>

                </form>

            </li>

        </ul>
    </nav>
</body>
<!-- <li><img src="sun.png" id="sun-moon" class="sun-moon" alt="sun-moon" onclick="toggleBackground()" /></li> -->