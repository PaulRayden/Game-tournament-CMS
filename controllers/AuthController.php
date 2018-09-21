<?php

namespace Controllers;

use Models\Model_Auth as Auth;


class AuthController extends SystemController
{
    public static function login($email,$password)
    {

    }
    public static function register($name,$email,$password,$password_verify)
    {
        self::checkName($name);
        self::checkEmail($email);
        $hash = self::passwordHandler($password,$password_verify);
        self::create($name,$email,$hash);

    }

    protected static function checkName($name)
    {

        if ($name == ''){
            echo self::json([
                'message' => 'Введите имя',
                'status'  => 'error'
            ]);
            exit();
        }
    }

    protected static function checkEmail($email)
    {
        $user = Auth::FindEmail($email);

        if ($email == '')
        {
            echo self::json([
                'message' => 'Введите почту',
                'status'  => 'error'
            ]);
            exit();
        }
        if ($user){
            echo self::json([
                'message' => 'Такая почта уже существует',
                'status'  => 'error'
            ]);
            exit();
        }
    }
    protected static function passwordHandler($password,$password_verify)
    {

        if ($password == '')
        {
            echo self::json([
                'message' => 'Введите пароль',
                'status'  => 'error'
            ]);
            exit();
        }
        if ($password_verify == '')
        {
            echo self::json([
                'message' => 'Введите пароль повторно',
                'status'  => 'error'
            ]);
            exit();
        }
        if ($password != $password_verify)
        {
            echo self::json([
                'message' => 'Пароли не совпадают',
                'status'  => 'error'
            ]);
            exit();
        }else{
            return $password_hash = password_hash($password,PASSWORD_DEFAULT);
        }

    }

    protected static function create($name,$email,$password)
    {
        Auth::createAccount($name,$email,$password);

        echo self::json([
            'message' => 'Вы зарегистрировались',
            'status'  => 'success'
        ]);
        exit();
    }
}