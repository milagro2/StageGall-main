<style>
    <?php
    if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Dark') {
        // Dark-mode styles
        echo ".sticky-block a { color: #ffffffba; text-shadow: 0 0 5px #ff4900b0; }";
        echo ".sticky-block a:hover { color: #ff4900b0; }";
        echo "body {";
        echo "background-color: #191919;";
        echo "color: #ffffffba;";
        echo "}";
        echo "#texT { background-color: black; }";
        echo "#agpri { background-color: #ffffffad; }";
        echo "header { background: black; }";
        echo "header { color: #ff4900b0; }";

    } else if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Neon') {
        // Third-mode styles
        echo ".sticky-block a { color: #00ff2b; text-shadow: 0 0 5px #f4ff00; }";
        echo ".sticky-block p { color: #f4ff00; text-shadow: 0 0 5px #f4ff00; }";
        echo ".sticky-block a:hover { color: #f4ff00; }";
        echo "nav a { color: #00ff2b; text-shadow: 0 0 5px #f4ff00; }";
        echo "#navbar a:hover { color: #f4ff00; }";
        echo "#navbar .active { color: #f4ff00; }";
        echo "body {";
        echo "background-color: black;";
        echo "color: red; text-shadow: 0 0 5px red;";
        echo "}";
        echo "#texT { background-color: black; }";
        echo "#agpri { background-color: red; }";
        echo "header { background: black; }";
        echo "header { color: red; }";
        echo "h1 { color: #ff0081 !important; text-shadow: 0 0 10px #ff0081; }";
        echo "button { color: #00ffd0; text-shadow: 0 0 5px #00ffd0; }";
        echo "button.selected { background-color: red; box-shadow: 0 0 10px red; }";

    } else {
        // Light-mode styles
        echo ".sticky-block a { color: black; }";
        echo ".sticky-block a:hover { color: #ff3a03; }";
        echo "body {";
        echo "background-color: white;";
        echo "color: black;";
        echo "}";
        echo "#texT { background-color: #f4f4f4; }";
        echo "#agpri { background-color: #f4f4f4; }";
        echo "header { background: linear-gradient(to right, #881700, #ff6000, #881700); }";
    }
    ?>
</style>

<!-- with glow /\ -->
<!-- without glow \/-->

<!-- <style>
    <?php
    if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Dark') {
        // Dark-mode
        echo ".sticky-block a { color: #ffffffba; }";
        echo ".sticky-block a:hover { color: #ff4900b0; }";
        echo "body {";
        echo "background-color: #191919;";
        echo "color: #ffffffba;";
        echo "}";
        echo "#texT { background-color: black; }";
        echo "#agpri { background-color: #ffffffad; }";
        echo "header { background: black; }";
        echo "header { color: #ff4900b0; }";

    } else if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Neon') {
        // Third-mode
        echo ".sticky-block a { color: #00ff2b; }";
        echo ".sticky-block p { color: #f4ff00; }";
        echo ".sticky-block a:hover { color: #f4ff00; }";
        echo "nav a { color: #00ff2b; }";
        echo "#navbar a:hover { color: #f4ff00; }";
        echo "#navbar .active { color: #f4ff00; }";
        echo "body {";
        echo "background-color: black;";
        echo "color: red;";
        echo "}";
        echo "#texT { background-color: black; }";
        echo "#agpri { background-color: red; }";
        echo "header { background: black; }";
        echo "header { color: red; }";
        echo "h1 { color: red !important; }";
        echo "button { color: #00ffd0; }";
        echo "button.selected { background-color: red; }";

    } else {
        // Light-mode
        echo ".sticky-block a { color: black; }";
        echo ".sticky-block a:hover { color: #ff3a03; }";
        echo "body {";
        echo "background-color: white;";
        echo "color: black;";
        echo "}";
        echo "#texT { background-color: #f4f4f4; }";
        echo "#agpri { background-color: #f4f4f4; }";
        echo "header { background: linear-gradient(to right, #881700, #ff6000, #881700); }";
    }
    ?>
</style> -->