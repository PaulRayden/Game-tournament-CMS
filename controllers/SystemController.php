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

}