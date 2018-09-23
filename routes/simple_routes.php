<?php
    Flight::route('/', function(){
        if(!isset($_SESSION['user']))
        {
            Flight::redirect('/login');
        }else{
            Flight::render('index', array('title' => 'Главная')); 
        }
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

    Flight::map('notFound', function(){
        Flight::render('404', array('title' => 'Страница не найдена'));
    });