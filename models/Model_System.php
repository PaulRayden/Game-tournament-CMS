<?php
/**
 * Created by PhpStorm.
 * User: InsideGo
 * Date: 23.09.2018
 * Time: 8:48
 */

namespace Models;

use \RedBeanPHP\R as R;
use \RedBeanPHP\SimpleModel as Model;

class Model_System extends Model
{
    public static function findTemplate()
    {
        $system = R::findAll('system')['1'];
        return $system->template;

    }
    public static function findFolderTemplate()
    {
        $system = R::findAll('system')['1'];
        return $system->FolderTemplate;

    }


}