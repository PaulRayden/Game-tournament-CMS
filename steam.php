<?php

Flight::set('steam', array(
    'apikey' => '65D3D47392A557151F6357E808D8E84E', // Steam API KEY
    'domainname' => $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'],
    'loginpage' => $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/login/steam',
    "logoutpage" => $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']."/logout",
    "skipAPI" => false,
));
