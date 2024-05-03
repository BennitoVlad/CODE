<!DOCTYPE html>
<html lang="uk">
<head>
    <title>Project</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/project.css">
</head>
<body>
<form action="delete-project.php" method="post">
    <input type="hidden" id="id">
    <label for="title">Назва проєкту</label>
    <label id="title"></label>
    <label for="description">Опис проєкту</label>
    <label id="description"></label>
    <label for="type">Тип проєкту</label>
    <label id="type"></label>
    <label for="price">Оплата</label>
    <label id="price"></label>
    <span>UAH</span>

    <label for="client">Опублікований: </label>
    <label id="client"></label>
    <label for="date">Дата: </label>
    <label id="date"></label>

    <label for="completed">Завершений? </label>
    <label id="completed"></label>
    <label for="contractor">Фрилансер: </label>
    <label id="contractor"></label>

    <a href="edit-project.php">Редагувати</a>
    <input type="submit" value="Видалити"/>
</form>


</body>
<?php

