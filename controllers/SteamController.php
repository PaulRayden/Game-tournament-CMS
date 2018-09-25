<?php

namespace Controllers;

use Flight;
use Vikas5914\SteamAuth as SteamAuth;
use Models\Model_Auth as AuthModel;

class SteamController
{

    public static function loginSteam()
    {

        $config = Flight::get('steam');
        $steam = new SteamAuth($config);

        if ($steam->loggedIn()) {
            $user = AuthModel::FindSteamId($steam->steamid);    // Ищем пользователя по steamid
            if ($user)  // Проверяем существует ли пользователь
            {
                self::success($user);   // Создаем сессию и перенаправляем на главную
            }else{
                self::failed();    // Показываем страницу что стим не привзяан ни к одному из аккаунтов
            }

        } else {
            Flight::redirect( $steam->loginUrl());
        }
    }

    private static function success($data)
    {
        $_SESSION['user'] = $data;
        Flight::redirect('/');
        exit();
    }

    private static function failed()
    {
        Flight::render('no_access', array(
            'title' => 'Этот Steam не привязан ни к одному аккаунту!'
        ));
        session_destroy();
        exit();
    }
}
