<?php

namespace Controllers;

use Models\Model_System as SystemModel;

class SystemController
{

    public static function dump($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    public static function template()
    {
        return SystemModel::findTemplate();
    }
    public static function FolderTemplate()
    {
        return SystemModel::findFolderTemplate();
    }

    protected static function json($array)
    {
        return json_encode($array);
    }

}