<?php
require_once("../connect/session.php");
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <title><?=$MSG['project']?></title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/crud-project.css">
</head>
<body>

    <form action="add-project-action.php" method="post">
        <label for="title" class="block-label-white"><?=$MSG['project_name']?></label>
        <input id="title" name="title" class="transparent-input">
        <label for="description" class="block-label-white"><?=$MSG['project_desc']?></label>
        <input id="description" name="title" class="transparent-input">
        <label for="type" class="block-label-white"><?=$MSG['project_type']?></label>
        <?php require("../fragments/project-type.php"); ?>
        <label for="price" class="block-label-white"><?=$MSG['project_reward']?></label>
        <div class="payment">
            <input name="price" id="price" type="number" class="transparent-input">
            <label id="currency" class="block-label-white"><?=$MSG['currency_uah']?></label>
        </div>
        <input type="submit" value="<?=$MSG['action_post']?>" class="block-label-blue">
    </form>

</body>
<?php

