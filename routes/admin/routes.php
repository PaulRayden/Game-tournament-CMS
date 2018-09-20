<?php

Flight::route('/panel', function(){
	Flight::render('panel/index', array('title' => 'Панель администратора'));
});
