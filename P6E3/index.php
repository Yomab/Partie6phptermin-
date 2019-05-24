<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice3Partie6</title>
    </head>
    <body>
        <?php
        if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
            ?>
            <p><?= $_GET['startDate'] . ' ' . $_GET['endDate']; ?></p>
            <?php
        } else {
            ?>
            <p>Désolé la date n' est pas renseignée.
            <?php
        }
        ?>
    </body>   
</html>