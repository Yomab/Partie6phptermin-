<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice1Partie6</title>
    </head>
    <body>
        <?php
      if (isset($_GET['lastname']) AND isset($_GET['firstname'])) {
        ?>
        <p><?= $_GET['lastname'] . ' ' . $_GET['firstname']; ?> </p>
        <?php
        } else {
        ?>
        <p>Désolé</p>
        <?php
        }
        ?>
    </body>   
</html>
