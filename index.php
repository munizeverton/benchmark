<?php

	define('MODELS','app/models/');
	define('VIEWS','app/views/');
	define('CONTROLLERS','app/controllers/');
	define('LIBS','libs/');

	require_once('libs/system.php');
	require_once('libs/controller.php');
	require_once('vendor/autoload.php');
	require_once('app/models/Mongo_Model.php');
	require_once('app/models/MySql_Model.php');

	$start = new System();
	$start->run();




