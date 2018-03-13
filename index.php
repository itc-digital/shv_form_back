<?php

// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');
$f3->config('routes.cfg');
// Set DB
$db = new DB\SQL(
	'mysql:host='.$f3->get('db_host').';port=3306;dbname='.$f3->get('db_name'),
	$f3->get('db_user'),
	$f3->get('db_pwd')
);
$f3->set('DB', $db);

//Run framework
$f3->run();
