<?php

use \RedBeanPHP\R as R;

R::setup( 'mysql:host=localhost;dbname=tournament-cms', 'root', '' );
Flight::set('flight.views.path', '../templates/default');
