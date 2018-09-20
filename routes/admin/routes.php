<?php

Flight::route('/panel', function(){
	Flight::render('panel/index', array('title' => 'Панель администратора'));
});

Flight::route('/panel/login', function(){
	Flight::render('panel/login', array('title' => 'Авторизация - Панель администратора'));
});

Flight::route('/panel/register', function(){
	Flight::render('panel/register', array('title' => 'Авторизация - Панель администратора'));
});
