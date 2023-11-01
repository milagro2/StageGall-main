<style>
    <?php
    if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Dark') {
        echo ".sticky-block a { color: #ffffffba; }";
        echo ".sticky-block a:hover { color: #ff4900b0; }";
        echo "body {";
        echo "background-color: #191919;";
        echo "color: #ffffffba;";
        echo "}";
        echo "#texT { background-color: black; }";
        echo "header { background: black; }";
        echo "header { color: #ff4900b0; }";
    } else {
        echo ".sticky-block a { color: black; }";
        echo ".sticky-block a:hover { color: #ff3a03; }";
        echo "body {";
        echo "background-color: white;";
        echo "color: black;";
        echo "}";
        echo "#texT { background-color: #f4f4f4; }";
        echo "header { background: linear-gradient(to right, #881700, #ff6000, #881700; }";
    }
    ?>
</style>