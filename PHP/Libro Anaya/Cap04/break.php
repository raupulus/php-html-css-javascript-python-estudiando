<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Break</title>
    </head>
    <body>
        <?php
        for ($x = 1; $x < 20; $x++) {
            if ($x == 10) {
                break;
            } else {
                echo "$x<br>";
            }
        }
        ?>
    </body>
</html>