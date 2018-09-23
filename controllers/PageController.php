<?php
/**
 * Created by PhpStorm.
 * User: InsideGo
 * Date: 23.09.2018
 * Time: 17:09
 */

namespace Controllers;

use Controllers\RoleController as RoleController;
use Flight;

class PageController extends RoleController
{

    public static function index()
    {
        self::role('admin');
        Flight::render('panel/index', array('title' => 'Панель администратора'));
    }
    public function settings()
    {
        self::role('admin');
        Flight::render('panel/settings', array('title' => 'Панель администратора - Настройки'));
    }
    public function profile()
    {
        self::role('admin');
        Flight::render('panel/profile', array('title' => 'Панель администратора - Профиль'));
    }
}