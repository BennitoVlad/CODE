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
<form action="delete-project.php" method="post">
    <label for="title" class="block-label-white"><?=$MSG['project_name']?></label>
    <label id="title" class="transparent-input"></label>
    <label for="description" class="block-label-white"><?=$MSG['project_desc']?></label>
    <label id="description" class="transparent-input"></label>
    <label for="type" class="block-label-white"><?=$MSG['project_type']?></label>
    <label id="type" class="transparent-input"></label>
    <label for="price" class="block-label-white"><?=$MSG['project_reward']?></label>
    <div class="payment">
        <label id="price" class="transparent-input"></label>
        <label id="currency" class="block-label-white"><?=$MSG['currency_uah']?></label>
    </div>

    <label for="client" class="block-label-white"><?=$MSG['project_published']?>: </label>
    <label id="client" class="transparent-input"></label>
    <label for="date" class="block-label-white"><?=$MSG['project_date']?>: </label>
    <label id="date" class="transparent-input"></label>

    <label for="completed" class="block-label-white"><?=$MSG['project_completed']?>? </label>
    <label id="completed" class="transparent-input"></label>
    <label for="contractor" class="block-label-white"><?=$MSG['contractor']?>: </label>
    <label id="contractor" class="transparent-input"></label>

    <a href="edit-project.php?<?=$id?>" class="block-label-blue"><?=$MSG['action_edit']?></a>
    <input type="hidden" id="id" name="id" value="<?=$id?>">
    <input type="submit" value="<?=$MSG['action_delete']?>" class="block-label-red"/>
</form>
<?php
    include ("../fragments/commentary-form.php");
?>

</body>
<?php

