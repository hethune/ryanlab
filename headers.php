<?php
	error_reporting(0);
	require("mysqlbridge.class.php");
	require("functions.php");

	static $DOCUMENTROOT = "/";

	// Initialize Database
	$sql = new mysqlBridge();

	// Database login info
	$db = array('server'	=>	'localhost',
				'database'	=>	'linlab',
				'login'		=>	'qianqian',
				'password'	=>	'111111'
				);

	$sql->init($db['server'], $db['database'], $db['login'], $db['password']);
	$sql->connect();
?>
