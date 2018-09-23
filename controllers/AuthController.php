<?php

namespace Controllers;

use Models\Model_Auth as Auth;


class AuthController extends SystemController
{

    /**
     * @param $email
     * @param $password
     */
    public static function login($email, $password)
    {

        self::CheckEmptinessEmail($email);
        self::ValidationEmail($email);
        self::CheckEmptinessPassword($password);
        $user = self::FindUserForEmail($email);
        self::checkPassword($password,$user->password);
        self::authorization($user);

    }

    /**
     * @param $name
     * @param $email
     * @param $password
     * @param $password_verify
     */
    public static function register($name, $email, $password, $password_verify)
    {
        self::checkName($name);
        self::ValidationEmail($email);
        self::checkEmail($email);
        $hash = self::passwordHandler($password,$password_verify);
        self::createAccount($name,$email,$hash);

    }

    /**
     * @param $email
     */
    private static function CheckEmptinessEmail($email)
    {
        if ($email == '')
        {
            echo self::json([
                'message' => 'Введите почту',
                'status'  => 'error'
            ]);
            exit();
        }
    }

    /**
     * @param $email
     */
    private static function ValidationEmail($email)
    {
        $position = strpos($email, '@', 0);
        if($position == 0){
            echo self::json([
                'message' => 'Проверьте правильность почты',
                'status'  => 'error'
            ]);
            exit();
        }
    }

    /**
     * @param $password
     */
    private static function CheckEmptinessPassword($password)
    {
        if ($password == '')
        {
            echo self::json([
                'message' => 'Введите пароль',
                'status'  => 'error'
            ]);
            exit();
        }
    }

    /**
     * @param $email
     * @return NULL|\RedBeanPHP\OODBBean
     */
    private static function FindUserForEmail($email)
    {
        $user = Auth::FindEmail($email);

        if(!$user)
        {
            echo self::json([
                'message' => 'Такого пользоватея не существует',
                'status'  => 'error'
            ]);
            exit();
        }else{
            return $user;
        }
    }

    /**
     * @param $password
     * @param $hash
     */
    private static function checkPassword($password, $hash)
    {
        if(password_verify($password,$hash))
        {
           session_start();
        }else{
            echo self::json([
                'message' => 'Не верный пароль',
                'status'  => 'error'
            ]);
            exit();
        }
    }

    /**
     * @param $data
     */
    private static function authorization($data)
    {
        $_SESSION['user'] = $data;
        echo self::json([
            'message' => 'Вы вошли',
            'status'  => 'success'
        ]);
        exit();
    }

    /**
     * @param $name
     */
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

    /**
     * @param $email
     */
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

    /**
     * @param $password
     * @param $password_verify
     * @return bool|string
     */
    protected static function passwordHandler($password, $password_verify)
    {

        if ($password == '')
        {
            echo self::json([
                'message' => 'Введите пароль',
                'status'  => 'error'
            ]);
            exit();
        }

        /** @var TYPE_NAME $long */
        $long = strlen($password);
        if ($long < 6)
        {
            echo self::json([
                'message' => 'Короткий пароль',
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

    /**
     * @param $name
     * @param $email
     * @param $password
     */
    protected static function createAccount($name, $email, $password)
    {
        Auth::createAccount($name,$email,$password);

        echo self::json([
            'message' => 'Вы зарегистрировались',
            'status'  => 'success'
        ]);
        exit();
    }
}