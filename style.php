<style>

    body {
        <?php
        if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Dark') {
            echo "background-color: #191919;";
            echo "color: #ffffffba;";
            echo "#texT { background-color: black; }";


        } else {
            echo "background-color: white;";
            echo "color: black;";
            echo "#texT { background-color: #f4f4f4; }";


        }
        ?>
    }

    header {
        <?php
        if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Dark') {
            echo "background: black;";
            echo "color: #ff4900b0;";
        } else {
            echo "background: linear-gradient(to right, #881700, #ff6000, #881700);";
        }
        ?>
    }  
    .sticky-block a {
        <?php
        if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Dark') {
            echo "color: #red;";
        } else {
            echo "color: #green;";
        }
        ?>
    }  
    


    


    button.selected {
        background-color: hotpink;

    }
</style>