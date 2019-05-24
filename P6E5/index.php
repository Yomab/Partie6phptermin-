<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice5Partie6</title>
    </head>
    <body>
        <?php
        if (isset($_GET['week'])) {
            ?>
            <p><?= $_GET['week']; ?></p>
            <?php
        } else {
            ?>
            <p>Désolé les semaines ne sont pas renseignées.</p>
            <?php
        }
        ?>
    </body>   
</html>