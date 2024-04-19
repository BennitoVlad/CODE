<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Main page</title>
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/index.css">
    </head>
    <body>
        <?php
            require_once("../connect/session.php");
            require("../fragments/sign-out-form.php");

            if(@$login){
                ?><hr><?php

             }
        ?>

        <?php
            require ("../fragments/index-intro.php");
        ?>
    </body>

</html>
