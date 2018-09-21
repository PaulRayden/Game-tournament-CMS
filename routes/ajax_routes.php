<?php

Flight::route('POST /auth/login', function(){
    Controllers\AuthController::login(
        $_POST['email'],
        $_POST['password']
    );
});
Flight::route('GET|POST /auth/register', function(){


    Controllers\AuthController::register(
        $_POST['name'],
        $_POST['email'],
        $_POST['password'],
        $_POST['password_verify']
    );

});