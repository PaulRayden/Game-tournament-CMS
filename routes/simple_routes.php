<?php

    use Controllers\AuthController as Ac;

    Flight::route('/', function(){
        Ac::authorized();
        Flight::render('index', array(
            'title' => 'Главная',
            'session' => $_SESSION['user']
        ));
    });
    Flight::route('/user/@login', function($login){
        Ac::authorized();
        Flight::render('profile', array(
            'title' => 'Профиль '.$login,
            'session' => $_SESSION['user']
        ));
    });
    Flight::route('/login', function(){
        if(!isset($_SESSION['user']))
        {
            Flight::render('login', array('title' => 'Авторизация'));
        }else{
            Flight::redirect('/');
        }
    });

    Flight::route('/register', function(){
        if(!isset($_SESSION['user']))
        {
            Flight::render('register', array('title' => 'Регистрация'));
        }else{
            Flight::redirect('/');
        }
    });
    Flight::route('/logout', function(){
        session_unset($_SESSION['user']);
        session_destroy();
        Flight::redirect('login');
    });

    Flight::route('/login/steam', array('Controllers\SteamController','loginSteam'));

    Flight::map('notFound', function(){
        Flight::render('404', array('title' => 'Страница не найдена'));
    });