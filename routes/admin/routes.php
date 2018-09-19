<?php

Flight::route('/admin', function(){
	Flight::render('../templates/admin/index', array('title' => 'Панель администратора'));
});
