<?php

Flight::route('/admin', function(){
	Flight::render('panel/index', array('title' => 'Панель администратора'));
});
