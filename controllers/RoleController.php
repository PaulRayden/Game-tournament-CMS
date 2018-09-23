<?php
/**
 * Created by PhpStorm.
 * User: InsideGo
 * Date: 23.09.2018
 * Time: 17:02
 */

namespace Controllers;

use Flight;

class RoleController
{

    public static function role($role)
    {
        if ($_SESSION['user']->role != $role)
        {
            Flight::render('panel/layouts/no_access', array('title' => 'У вас нет доступа к этой странице'));
            exit();
        }else{}

    }


}