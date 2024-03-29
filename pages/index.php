<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Main page</title>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
        <?php
            require_once("../connect/session.php");
            require("../fragments/sign-out-form.php");

            if(@$login){
                ?><hr><?php

            }
        ?>
    </body>

</html>
