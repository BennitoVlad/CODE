<!DOCTYPE html>
<html lang="uk">
<head>
    <title>Project</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/project.css">
</head>
<body>
    <form action="add-project-action.php" method="post">
        <label for="title">Назва проєкту</label>
        <input id="title" name="title">
        <label for="description">Опис проєкту</label>
        <input id="description" name="title">
        <label for="type">Тип проєкту</label>
        <select name="type" id="type">
            <option>A</option>
            <option>B</option>
        </select>
        <label for="price">Оплата</label>
        <input name="price" id="price" type="number">
        <span>UAH</span>

        <input type="submit" value="Опублікувати">
    </form>

</body>
<?php

