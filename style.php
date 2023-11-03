<style>
    <?php
    if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Dark') {
        // Dark-mode styles
        echo ".sticky-block a { color: #ffffffba; text-shadow: 0 0 5px #ff4900b0; position: relative; }";
        echo ".sticky-block a:hover { color: #ff4900b0; }";
        echo ".sticky-block a::after { content: ''; position: absolute; width: 100%; height: 2px; background: #ff4900b0; left: 0; bottom: -5px; transform: scaleX(0); transition: transform 0.5s ease; }";
        echo ".sticky-block a:hover::after { transform: scaleX(1); }";
        echo ".sticky-block { background: #00000085; }";
        echo ".sticky-block p { color: #ff4900b0; }";
        echo "body {";
        echo "background-color: #191919;";
        echo "color: #ffffffba;";
        echo "}";
        echo "#texT { background-color: black; }";
        echo "#agpri { background-color: #ffffffad; }";
        echo "header { background: black; }";
        echo "header { color: #ff4900b0; }";
        echo "strong { color: #ffffffe0; }";

    } else if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Neon') {
        // Neon-mode styles
        echo ".sticky-block a { color: #00ff2b; text-shadow: 0 0 5px #f4ff00; position: relative; }";
        echo ".sticky-block a:hover { color: #f4ff00; }";
        echo ".sticky-block a::after { content: ''; position: absolute; width: 100%; height: 2px; background: #f4ff00; left: 0; bottom: -5px; transform: scaleX(0); transition: transform 0.5s ease; }";
        echo ".sticky-block a:hover::after { transform: scaleX(1); }";
        echo ".sticky-block p { color: #f4ff00; text-shadow: 0 0 5px #f4ff00; position: relative; }";
        echo ".sticky-block { background: #0000008f; box-shadow: -2px 3px 12px -1px #ff0081; }";
        echo "nav a { color: red; text-shadow: 0 0 2px red; position: relative; }";
        echo "nav a::after { content: ''; position: absolute; width: 100%; height: 2px; background: #FFA500; left: 0; bottom: -5px; transform: scaleX(0); transition: transform 0.5s ease; }";
        echo "nav a:hover::after { transform: scaleX(1); }";
        echo "#navbar a:hover { color: #FFA500; text-shadow: 0px 0px 12px #FFA500; }";
        echo "#navbar .active { color: #FFA500; text-shadow: 0px 0px 12px #FFA500; }";
        echo "#navbar { background-color: #ff008100; box-shadow: 0px 0px 12px #ff0081; }";
        echo "body { background-color: black; }";
        echo "#texT { color: #00ff2b; text-shadow: 0 0 12px #f4ff00; background-color: black; }";
        echo "#cool { color: #00ff2b; text-shadow: 0 0 12px #f4ff00; }";
        echo "#agpri { background-color: #0381ff85; }";
        echo "header { background: black; }";
        echo "h1 { color: #ff0081 !important; text-shadow: 0 0 10px #ff0081; }";
        echo "strong { color: #f4ff00; text-shadow: 0 0 10px #f4ff00; }";
        echo "button { background: #1a1a1a; color: #00ffd0; text-shadow: 0 0 5px #00ffd0; }";
        echo "button.selected { background-color: red; box-shadow: 0 0 6px red; }";
        echo ".divid { background-color: #ff008100; box-shadow: 0px 0px 17px 1px #ffffff; }";
    } else if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Hack') {
        // Hack-mode styles
        echo ".sticky-block a { color: #00ff00; text-shadow: 0 0 5px #00ff00; position: relative; font-family: monospace; }";
        echo ".sticky-block a:hover { color: #00ff00; }";
        echo ".sticky-block a::after { content: ''; position: absolute; width: 100%; height: 2px; background: #00ff00; left: 0; bottom: -5px; transform: scaleX(0); transition: transform 0.5s ease; }";
        echo ".sticky-block a:hover::after { transform: scaleX(1); }";
        echo ".sticky-block { background: #00000085; }";
        echo "nav a { color: #00ff2b; text-shadow: 0 0 2px #00ff2b; position: relative; }";
        echo "nav a::after { content: ''; position: absolute; width: 100%; height: 2px; background: #00ff00; left: 0; bottom: -5px; transform: scaleX(0); transition: transform 0.5s ease; }";
        echo "nav a:hover::after { transform: scaleX(1); }";
        echo "#navbar a:hover { color: #00ff00; }";
        echo "#navbar .active { color: #00ff00; }";
        echo "#navbar { background-color: #ff008100; box-shadow: 0px 0px 2px 0px #04ff00; }";
        echo "body {";
        echo "background-color: #000000;";
        echo "color: #00ff00;";
        echo "font-family: monospace;";
        echo "}";
        echo "#texT { background-color: #000000; }";
        echo "#agpri { background-color: #000000; }";
        echo "header { background: #000000; }";
        echo "header { color: #00ff00; }";
        echo "h1 { color: #00ff00 !important; text-shadow: 0 0 10px #00ff00; }";
        echo "button { background: #000000; color: #00ff00; text-shadow: 0 0 5px #00ff00; }";
        echo "button.selected { background-color: #00ff00; box-shadow: 0 0 6px #00ff00; }";
        echo "button.selected { color: black; }";
        echo ".divid { background-color: #000000; box-shadow: 0px 0px 17px 1px #00ff00; }";


    } else {
        // Light-mode styles
        echo ".sticky-block a { color: black; position: relative; }";
        echo ".sticky-block a:hover { color: #ff3a03; }";
        echo ".sticky-block a::after { content: ''; position: absolute; width: 100%; height: 2px; background: #ff3a03; left: 0; bottom: -5px; transform: scaleX(0); transition: transform 0.5s ease; }";
        echo ".sticky-block a:hover::after { transform: scaleX(1); }";
        echo ".sticky-block p { color: #ff4900b0; }";
        echo "body {";
        echo "background-color: white;";
        echo "color: black;";
        echo "}";
        echo "#texT { background-color: #f4f4f4; }";
        echo "#agpri { background-color: #f4f4f4; }";
        echo "header { background: linear-gradient(to right, #881700, #ff6000, #881700); }";
        echo "strong { color: #ff4900b0; }";
    }
    ?>
</style>