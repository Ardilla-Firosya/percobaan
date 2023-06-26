<?php
session_start();
?>

<html>
    <body>
    <?php 
    $a=1;
    echo $a;
    ?>
    </body>
    <a href ="page2.php">click</a>
    <?php
    $_SESSION["varku"]=$a;
    ?>
</html>
