<?php

use \RedBeanPHP\R as R;

R::setup( 'mysql:host=localhost;dbname=tournament-cms', 'root', '' );

Flight::register('template', 'Controllers\SystemController::template');
Flight::register('FolderTemplate', 'Controllers\SystemController::FolderTemplate');

//Flight::set('flight.views.path', '../'.Flight::FolderTemplate().'/'.Flight::template());

Flight::set('flight.views.path', '../templates/'.Flight::template());
