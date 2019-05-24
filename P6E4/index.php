<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice4Partie6</title>
    </head>
    <body>
        <?php
        if (isset($_GET['language']) && isset($_GET['server'])) {
            ?>
            <p><?= $_GET['language'] . ' ' . $_GET['server']; ?></p>
            <?php
        } else {
            ?>
            <p>Désolé les informations ne sont pas renseignées.</p>
            <?php
        }
        ?>
    </body>   
</html>