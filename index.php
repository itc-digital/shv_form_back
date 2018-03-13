<?php

// Kickstart the framework
$f3=require('lib/base.php');

// Load configuration
$f3->config('config.ini');
$f3->config('routes.ini');
// Set DB
$db = new DB\SQL(
	'mysql:host='.$f3->get('db_host').';port=3306;dbname='.$f3->get('db_name'),
	$f3->get('db_user'),
	$f3->get('db_pwd')
);
$f3->set('DB', $db);

//Run framework
$f3->run();
