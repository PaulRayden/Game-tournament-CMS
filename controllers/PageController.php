<?php
namespace Controllers;

use Controllers\RoleController as RoleController;
use Flight;

class PageController extends RoleController
{

    public static function index()
    {
        self::role('admin');
        Flight::render('panel/index', array('title' => 'Панель управления - Главная'));
    }
}