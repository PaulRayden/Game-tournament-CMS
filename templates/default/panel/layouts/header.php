<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/main-panel.css">
	<link rel="stylesheet" href="/css/mb.css">
	<link rel="icon" type="image/png" href="/assets/img/favicon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&subset=cyrillic">
</head>

<nav class="navbar navbar-expand-lg navbar-dark indigo">
    <a class="navbar-brand" href="/panel">Панель администратора</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/panel">Главная</a>
            </li>
        </ul>
        <span class="navbar-text white-text">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/panel/settings">Настройки</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">Выйти</a>
            </li>
        </ul>
        </span>
    </div>
</nav>
