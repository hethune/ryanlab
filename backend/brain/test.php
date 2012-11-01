<?php
// require('config.php');
// require($BRAIN_PATH . '/mysqlbridge.class.php');
// require($BRAIN_PATH . '/form.class.php');
// require($BRAIN_PATH . '/list.class.php');
// require($BRAIN_PATH . '/processing.php');

// Initialize Database
// Database login info
phpinfo();

echo 'Try to connect';

$db = mysql_connect("localhost", "root", "5_4fusas");

if (!$db) {

        die('Could not connect: ' . mysql_error());

}

echo 'Connected successfully';






?>