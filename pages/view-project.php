<!DOCTYPE html>
<html lang="uk">
<head>
    <title>Project</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/crud-project.css">
</head>
<body>
<form action="delete-project.php" method="post">
    <input type="hidden" id="id" name="id">
    <label for="title" class="block-label-white">Назва проєкту</label>
    <label id="title" class="transparent-input"></label>
    <label for="description" class="block-label-white">Опис проєкту</label>
    <label id="description" class="transparent-input"></label>
    <label for="type" class="block-label-white">Тип проєкту</label>
    <label id="type" class="transparent-input"></label>
    <label for="price" class="block-label-white">Оплата</label>
    <div class="payment">
        <label id="price" class="transparent-input"></label>
        <label  class="block-label-white">UAH</label>
    </div>

    <label for="client" class="block-label-white">Опублікований: </label>
    <label id="client" class="transparent-input"></label>
    <label for="date" class="block-label-white">Дата: </label>
    <label id="date" class="transparent-input"></label>

    <label for="completed" class="block-label-white">Завершений? </label>
    <label id="completed" class="transparent-input"></label>
    <label for="contractor" class="block-label-white">Фрилансер: </label>
    <label id="contractor" class="transparent-input"></label>

    <a href="edit-project.php" class="block-label-blue">Редагувати</a>
    <input type="submit" value="Видалити" class="block-label-red"/>
</form>


</body>
<?php

