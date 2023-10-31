<style>
    body {
        <?php
        if (isset($_SESSION['theme']) && $_SESSION['theme'] === 'Dark') {
            echo "background-color: #333;";
        } else {
            echo "background-color: #f4f4f4;";
        }
        ?>
    }

    button.selected {
        background-color: yellow;
    }
</style>