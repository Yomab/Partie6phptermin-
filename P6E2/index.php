<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice2Partie6</title>
    </head>
    <body>
        <?php
        if (isset($_GET['lastname']) && isset($_GET['firstname']) && isset($_GET['age'])) {
            ?>
            <p><?= $_GET['lastname'] . ' ' . $_GET['firstname'] . ' ' . $_GET['age']; ?></p>
            <?php
        } else {
            ?>
            <p>Désolé il n'y pas le paramètre d'url age.
            <?php
        }
        ?>
    </body>   
</html>