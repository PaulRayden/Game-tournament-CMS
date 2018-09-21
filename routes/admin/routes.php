<?php

Flight::route('/panel', function(){
	Flight::render('panel/index', array('title' => 'Панель администратора'));
});

Flight::route('/panel/login', function(){
	Flight::render('panel/login', array('title' => 'Авторизация - Панель администратора'));
});

Flight::route('POST /panel/login', function(){
	Controller\AuthController::login($_POST['email'],$_POST['password']);
});