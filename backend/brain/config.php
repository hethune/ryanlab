<?php
// Brain configuration

// ----------------------------------------------------------

// Full paths to directories
// Do NOT include trailing slash!

$BACKEND = $_SERVER[DOCUMENT_ROOT];

$FOLDER ="/";

// Where is the brain stored?
$BRAIN_PATH = $BACKEND.$FOLDER.'backend/brain';

// Where are the templates stored?
$TEMPLATE_PATH = $BACKEND.$FOLDER.'backend/brain/templates';

// What top level directory do you want to contain uploads?
$UPLOAD_PATH = $BACKEND.$FOLDER.'images';

// ----------------------------------------------------------

// Do you want to return to the menu after each action?
$MENU_RETURN = true;

// ----------------------------------------------------------

// Database login info
$db = array('server'	=>	'localhost',
			'database'	=>	'linlab',
			'login'		=>	'qianqian',
			'password'	=>	'111111'
			);


?>
