<?php
$current_page = basename($_SERVER["SCRIPT_FILENAME"]);
$onderdelen = array(
    "Agile.php" => array("Agile", "Agile Manifesto", "Agile Principes", "Lean & Mu's", "Scrum"),
    "DevOps.php" => array("Wat is DevOps?", "CI/CD"),
    // Add other pages and their respective links here
);

function displayOnderdelen($current_page, $onderdelen)
{
    if (array_key_exists($current_page, $onderdelen)) {
        foreach ($onderdelen[$current_page] as $onderdeel) {
            echo '<li><a href="#' . strtolower(str_replace(' ', '-', $onderdeel)) . '-section">' . $onderdeel . '</a></li>';
        }
    }
}
?>

<body>

    <nav id="navbar">
        <ul>

            <li><a href="StHome.php" <?php if ($current_page == "StHome.php") echo 'class="active"'; ?>>Home</a></li>
            <li><a href="Agile.php" <?php if ($current_page == "Agile.php") echo 'class="active "'; ?>>Agile</a></li>
            <li><a href="DevOps.php" <?php if ($current_page == "DevOps.php") echo 'class="active"'; ?>>DevOps</a></li>
            <li><a href="Gesprek.php" <?php if ($current_page == "CICD.php") echo 'class="active"'; ?>>Gespreksverslag</a></li>
            <li><a href="ToDo.php" <?php if ($current_page == "ToDo.php") echo 'class="active"'; ?>>To do</a></li>
            <li><a href="stageVerslag.php" <?php if ($current_page == "stageVerslag.php") echo 'class="active"'; ?>>Stage-Verslag</a></li>
            <li><a href="about.php" <?php if ($current_page == "about.php") echo 'class="active"'; ?>>About</a></li>
            <li><button onmouseover="toggleOnderdelen(true)" onmouseout="toggleOnderdelen(false)">Onderdelen</button></li>
        </ul>

        <ul class="right-nav">
            <li><a href="#page-top">Page top</a></li>
            <li><img src="sun.png" id="sun-moon" class="sun-moon" alt="sun-moon" onclick="toggleBackground()" /></li>
        </ul>
    </nav>

    <div class="sticky-block" id="texT" style="display: none;">
        <p>Onderdelen</p>
        <ul>
            <?php displayOnderdelen($current_page, $onderdelen); ?>
        </ul>
    </div>

    <script>
        function toggleOnderdelen(hovering) {
            var onderdelen = document.getElementById('texT');
            if (hovering) {
                onderdelen.style.display = 'block';
            } else {
                onderdelen.style.display = 'none';
            }
        }
    </script>
</body>
