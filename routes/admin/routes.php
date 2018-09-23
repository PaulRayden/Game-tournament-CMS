<?php

    Flight::route('/panel', array('Controllers\PageController','index'));
    Flight::route('/panel/settings', array('Controllers\PageController','settings'));
    Flight::route('/panel/profile', array('Controllers\PageController','profile'));