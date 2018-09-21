<?php
    
    Flight::route('/', function(){
        if(!isset($_SESSION['user']))
        {
            Flight::render('login', array('title' => 'Войти в систему')); 
        }else{
            Flight::render('index', array('title' => 'Главная')); 
        }
    });
    
    Flight::route('/register', function(){
        if(!isset($_SESSION['user']))
        {
            Flight::render('register', array('title' => 'Войти в систему')); 
        }else{
            Flight::render('index', array('title' => 'Главная')); 
        }
    });