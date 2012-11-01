<?php
# --------------------------------
#
#   Brain for CRUD
#
#   Created by Rich Winslow
#   http://www.richwinslow.com/
#
# --------------------------------

// Bring in other external scripts and classes
require('config.php');
require($BRAIN_PATH . '/mysqlbridge.class.php');
require($BRAIN_PATH . '/form.class.php');
require($BRAIN_PATH . '/list.class.php');
require($BRAIN_PATH . '/processing.php');

// Initialize Database
$sql = new mysqlBridge();
$sql->init($db['server'], $db['database'], $db['login'], $db['password']);
$sql->connect();


// Initialize Form
$form = new form();
$list = new lister();




// Pull table from url or post
if(isset($_GET['t'])){
	$table = $_GET['t'];
}
elseif(isset($_POST['_table'])) {
	$table = $_POST['_table'];
}
else {
	$table = null;
}

// Pull directory from url or post
if(isset($_GET['dir'])){
	$dir = $_GET['dir'];
}
elseif(isset($_POST['_dir'])) {
	$dir = $_POST['_dir'];
}
else{
	$dir = null;
}

// Tell list which table to pull data from
$list->table = $table;

if(isset($_GET['do'])){
	$do = $_GET['do'];
}
else {
	$do = null;
}

// Processing
if(isset($_POST['_submit'])){
	$run = strtolower($_POST['_submit']);
	$run();
}

// Run command from url
if($do == 'add'){
	include($TEMPLATE_PATH . '/' . $table . '/' . 'form.php');
}
elseif($do == 'edit'){
	if(isset($_GET['id'])){
		include($TEMPLATE_PATH . '/' . $table . '/' . 'form.php');
	} else {
		include($TEMPLATE_PATH . '/' . $table . '/' . 'list.php');
	}
}
elseif($do == 'delete'){
	if(isset($_GET['id'])){
		include($TEMPLATE_PATH . '/' . $table . '/' . 'confirm.php');
	} else {
		include($TEMPLATE_PATH . '/' . $table . '/' . 'list.php');
	}
}
elseif($do == 'upload'){
	include($TEMPLATE_PATH . '/' . 'upload_' . $dir . '/' . 'upload.php');
}
else {
	include($TEMPLATE_PATH . '/' . 'menu.php');
}

// Close Database connection
$sql->close();
?>