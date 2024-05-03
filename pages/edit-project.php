<!DOCTYPE html>
<html lang="uk">
<head>
    <title>Project</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/crud-project.css">
</head>
<body>
<form action="edit-project-action.php" method="post">
    <label for="title" class="block-label-white">Назва проєкту</label>
    <input id="title" name="title" class="transparent-input">
    <label for="description" class="block-label-white">Опис проєкту</label>
    <input id="description" name="title" class="transparent-input">
    <label for="type" class="block-label-white">Тип проєкту</label>
    <select name="type" id="type" class="block-label-blue">
        <option>A</option>
        <option>B</option>
    </select>
    <label for="price" class="block-label-white">Оплата</label>
    <div class="payment">
        <input name="price" id="price" type="number" class="transparent-input">
        <label class="block-label-white">UAH</label>
    </div>
    <input type="submit" value="Опублікувати" class="block-label-blue">
</form>

</body>
<?php

