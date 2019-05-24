<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice6sPartie6</title>
    </head>
    <body>
        <?php
        if (isset($_GET['building']) && isset($_GET['room'])) {
            ?>
            <p><?= $_GET['building'] . ' ' . $_GET['room']; ?></p>
            <?php
        } else {
            ?>
            <p>this room not existing.
            <?php
        }
        ?>
    </body>   
</html>