<?php

namespace Controllers;

class SystemController
{

    protected static function dump($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    protected static function json($array)
    {
        return json_encode($array);
    }

}