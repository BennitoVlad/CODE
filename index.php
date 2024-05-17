<?php
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

header("Location: http://$host$uri/pages/index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><Vacant title></title>
</head>
<body style="text-align: center">
    <h1>Index page placeholder.</h1>
    <img src="For%20luck.jpg" alt="Uzi for luck."/>
    <h6>That's Uzi.</h6>
    <br/>
    <h1><a href="pages/">Main page.</a></h1>
</body>
</html>

<!-- DONE!      Delete projects with commentaries! -->
<!-- DONE!      Show projects for clients and contractors. -->
<!-- DONE!      Page switching. -->
<!-- Nah.       Add bottom panel. -->
<!-- Extend top panel functions. -->
<!-- -->
