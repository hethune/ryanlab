<?php
function message($message, $color = 'success'){
	echo '<div class="message ' . $color . '">' . $message . '</div>';
}

function getPairs(){
	$keys = array();
	$values = array();
	
	foreach($_POST as $key => $value){
		if($key[0] != '_'){
			$keys[] = $key;
			$values[] = $value;
		}
	}
	
	return(array('keys' => $keys, 'values' => $values));
}

function add(){
	global $sql; // Reference global MySQL Bridge
	global $table;	// Reference global table
	$valueList = null;
	
	// Get pairs and assemble query
	$pairs = getPairs();
	$keyList = implode(',', $pairs['keys']);
	foreach($pairs['values'] as $value){ $valueList .= '\'' . mysql_real_escape_string($value) . '\','; }
	$valueList = substr($valueList, 0, -1);
	
	$query = 'INSERT INTO ' . $table . ' (' . $keyList . ') VALUES (' . $valueList . ')';
	$sql->runQuery($query);
	message('Successfully added item to ' . $table);
}

function edit(){
	global $sql;	// Reference global MySQL Bridge
	global $table;	// Reference global table
	$id = $_POST['_id'];
	$setList = array();
	
	// Get pairs and assemble query
	$pairs = getPairs();
	$keys = $pairs['keys'];
	$values = $pairs['values'];
	for($i=0; $i<=(count($keys)-1); $i++){
		$setList[] = $keys[$i] . '= \'' . mysql_real_escape_string($values[$i]) . '\'';
	}
	$set = implode(',', $setList);
	$query = 'UPDATE ' . $table . ' SET ' . $set . ' WHERE id = \'' . $id . '\'';
	$sql->runQuery($query);
	message('Successfully edited item from ' . $table . ' with id ' . $id);
}

function delete(){
	global $sql;	// Reference global MySQL Bridge
	global $table;	// Reference global table
	$id = $_POST['_id'];
	$query = 'DELETE FROM ' . $table . ' WHERE id = \'' . $id . '\' LIMIT 1';
	$sql->runQuery($query);
	message('Successfully deleted item from ' . $table . ' with id ' . $id);
}

function upload(){
	global $UPLOAD_PATH;	// Reference absolute path to upload directory
	
	$target = $UPLOAD_PATH . '/' . $_POST['_dir'] . '/';
	foreach($_FILES as $key => $file){
		$name = $file['name'];
		$temp = $file['tmp_name'];
		
		$remove = array("\\", "'", '"', ' ', '`', '~');
		$filename = str_replace($remove, '', basename($name));
		
		if(strlen($filename) <= 0){
			$filename = date('dmyhis');
		}
		
		$target .= $filename;
		
		// Provide path to file
		message('File uploaded to: ' . $target, 'info');
		
		if(move_uploaded_file($temp, $target)){
			message('File successfully uploaded.');
		} else {
			message('File unsuccessfully uploaded.', 'error');
		}
	}
}
?>