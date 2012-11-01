<?php
# --------------------------------
#
#   Brain Form Class
#
#   Created by Rich Winslow
#   http://www.richwinslow.com/
#
# --------------------------------

class form{
	var $data;		// Associative array for each piece of form data
	var $table;		// Defines which table the data is associated with
	var $command;	// Defines which command is to be performed
	var $id;		// Defines which ID to edit from table
	var $dir;		// Defines which directory to upload to
	
	// Define variable via argument from URI in $_GET global
	function get($var, $key){
		if(isset($_GET[$key])){
			$this->$var = $_GET[$key];
		}
	}

	// Insert new line character for more readable code
	function nl(){
		echo "\n";
	}
	
	// Insert tab character for more readable code
	function tab(){
		echo "\t";
	}
	
	// Argument processing
	function arguments($args = array()){
		foreach($args as $key => $value){
			echo $key . '="' . $value . '" ';
		}
	}

	function label($label){
		echo '<label for="' . $label . '">' . $label . '</label>';
	}
	
	function open($label){
		$this->tab();
		$this->label($label);
	}
	
	function close(){
		$this->nl();
	}
	
	// Form manipulators
	// ----------------------------------------
	
	// Begin form block
	function start($args = array(null)){
		global $sql;			// Reference MySQL Bridge
		global $MENU_RETURN;	// Check if user wants to return to menu after actions

		// Retrieve table and command from URI if set
		$this->get('table', 't');
		$this->get('command', 'do');
		
		// Check for ID if editing and save data
		if($this->command == 'edit'){
			$this->get('id', 'id');
			$this->data = $sql->getAssocs('SELECT * FROM ' . $this->table . ' WHERE id = \'' . $this->id . '\'');
			$this->data = $this->data[0];
		}
		if($this->command == 'delete'){
			$this->get('id', 'id');
			$this->data['id'] = $this->id;
		}
		
		// Start form
		echo '<form ';
		if(count($args) > 0 && $args != array(null)){ $this->arguments($args); }
		
		// Checks config if user wants to return to menu or not after action
		$uri = $_SERVER['PHP_SELF'];
		if($MENU_RETURN){
			$uri .= '?t=' . $this->table . '&do=' . $this->command;
		}
		
		echo 'action="' . $uri . '" method="post">';
		$this->nl();
	}
	
	function startUpload($maxFileSize, $args = array(null)){
		global $MENU_RETURN;	// Check if user wants to return to menu after actions

		// Retrieve upload directory name and command from URI
		$this->get('dir', 'dir');
		$this->get('command', 'do');
		
		// Start form
		echo '<form enctype="multipart/form-data" ';
		if(count($args) > 0 && $args != array(null)){ $this->arguments($args); }
		
		// Checks config if user wants to return to menu or not after action
		$uri = $_SERVER['PHP_SELF'];
		if($MENU_RETURN){
			$uri .= '?dir=' . $this->dir . '&do=' . $this->command;
		}
		
		echo 'action="' . $uri . '" method="post">';
		$this->nl();
		$this->tab();
		echo '<input type="hidden" name="MAX_FILE_SIZE" value="' . $maxFileSize . '" />';
		$this->nl();
		$this->tab();
		echo '<input type="hidden" name="_dir" value="' . $this->dir . '" />';
		$this->nl();
	}
	
	// End form block
	function end(){
		// Check for id of edited option
		if(isset($this->data['id'])){
			$this->tab();
			echo '<input type="hidden" name="_id" value="' . $this->data['id'] . '" />';
			$this->nl();
		}
		if(isset($this->table)){
			$this->tab();
			echo '<input type="hidden" name="_table" value="' . $this->table . '" />';
			$this->nl();
		}
		echo '</form>';
	}

	// Input manipulators
	// ----------------------------------------
	
	// Output a regular text field with a label
	function text($label, $class = null){
		$this->open($label);
		
		echo '<input type="text" name="' . $label . '" id="' . $label . '" ';
		if($class != null){
			echo 'class="' . $class . '" ';
		}
		
		// Insert value to edit in form item
		if(isset($this->data[$label])){
			echo 'value="' . stripslashes(htmlentities($this->data[$label], ENT_QUOTES)) . '" ';
		}
		
		echo '/>';
		
		$this->close();
	}
	
	// Output a textarea with a label
	function area($label, $args = array(null)){
		$this->open($label);
		
		echo '<textarea name="' . $label . '" id="' . $label . '" ';
		if(count($args) > 0 && $args != array(null)){
			$this->arguments($args);
		}
		echo '>';

		// Insert value to edit in form item
		if(isset($this->data[$label])){
			echo stripslashes(htmlentities($this->data[$label], ENT_QUOTES));
		}
		echo '</textarea>';
		
		$this->close();
	}
	
	// Output a radio button with a label
	function radio($label, $args = array(null)){
		$checked = null;	// Start unchecked in case of editing
		$count = 0;			// For checking radio button
		
		$this->open($label);
		
		if(count($args) > 0 && $args != array(null)){
			foreach($args as $key => $value){
				$this->tab();

				// Switch on if values match
				if(isset($this->data[$label])){
					if($this->data[$label] == $value){
						$checked = ' checked="checked" ';
					}
				}
				elseif($this->command == 'add' && $count == 0){
					$checked = ' checked="checked" ';
					$count++;
				}
				
				echo '<input type="radio" class="radio" name="' . stripslashes(htmlentities($label, ENT_QUOTES)) . '" id="' . htmlentities($label, ENT_QUOTES) . '" value="' . htmlentities($value, ENT_QUOTES) . '"' . $checked . '/>';
				
				$checked = null;	// Reset for editing
				
				$this->nl();
				echo $key;
				echo '<br />';
			}
		}
		
		$this->close();
	}
	
	// Output a select box with prescribed options
	function select($label, $options = array(), $args = array(null)){
		$this->open($label);
		
		echo '<select name="' . $label . '" ';
		if(count($args) > 0 && $args != array(null)){
			$this->arguments($args);
		}
		echo '>';
		$this->nl();
		
		foreach($options as $key => $value){
			$this->tab();
			
			if($this->data[$label] == $value){
				$selected = ' selected="selected"';
			} else {
				$selected = null;
			}
			
			echo '<option value="' . stripslashes(htmlentities($value, ENT_QUOTES)) . '"' . $selected . '>' . $key . '</option>';
			$this->nl();
		}
		
		echo '</select>';
		
		$this->close();
	}
	
	// Output a select box with prescribed options
	function relate($label, $table, $field, $args = array(null)){
		global $sql;	// Reference MySQL Bridge
		
		$query = 'SELECT DISTINCT id,' . $field . ' FROM ' . $table;
		$data = $sql->getRows($query);
		foreach($data as $array){
			$list[$array[0]] = $array[1];
		}
		$this->open($label);
		
		echo '<select name="' . $label . '" ';
		if(count($args) > 0 && $args != array(null)){
			$this->arguments($args);
		}
		echo '>';
		$this->nl();

		foreach($list as $key => $value){
			$this->tab();
			
			if($this->data[$label] == $key){
				$selected = ' selected="selected"';
			} else {
				$selected = null;
			}
			
			echo '<option value="' . stripslashes(htmlentities($key, ENT_QUOTES)) . '"' . $selected . '>' . $value . '</option>';
			$this->nl();
		}
		
		echo '</select>';
		
		$this->close();
	}
	
	// Output a select box with prescribed options
	function relateMany($label, $table, $fields = array(), $args = array(null)){
		global $sql;	// Reference MySQL Bridge
		
		$columns = implode(',', $fields);
		$query = 'SELECT DISTINCT id,' . $columns . ' FROM ' . $table . ' ORDER BY ' . $columns;
		$data = $sql->getRows($query);
		foreach($data as $array){
			for($i=1; $i<=count($fields); $i++){
				if($i == 1){
					$list[$array[0]] = $array[$i];
				}
				else {
					$list[$array[0]] .= ', ' . $array[$i];
				}
			}
		}
		$this->open($label);
		
		echo '<select name="' . $label . '" ';
		if(count($args) > 0 && $args != array(null)){
			$this->arguments($args);
		}
		echo '>';
		$this->nl();

		foreach($list as $key => $value){
			$this->tab();
			
			if($this->data[$label] == $key){
				$selected = ' selected="selected"';
			} else {
				$selected = null;
			}
			
			echo '<option value="' . stripslashes(htmlentities($key, ENT_QUOTES)) . '"' . $selected . '>' . $value . '</option>';
			$this->nl();
		}
		
		echo '</select>';
		
		$this->close();
	}
	
	// Output date list based on argument
	function date($label, $type, $args = array(null)){
		$this->open($label);
		$type = strtolower($type);	// Convert type to lowercase for processing
		
		echo '<select name="' . $label . '" ';
		if(count($args) > 0 && $args != array(null)){
			$this->arguments($args);
		}
		echo '>';
		$this->nl();
		
		switch($type[0]){
			case 'm':	$start = 1;
						$end = 12;
						break;
			case 'd':	$start = 1;
						$end = 31;
						break;
			case 'y':	$start = date('Y') - 20;
						$end = date('Y');
						break;
		}
		
		if(isset($type[1]) && $type[1] = '+'){
			$operation = $type[1];
			$quantity = substr($type, 2, strlen($type)-2);
			$type = $type[0];
			switch($operation){
				case '+':	$end = $end + $quantity;
							break;
				case '-':	$end = $end - $quantity;
							break;
			}
		}
		
		// Run through possibilities
		if($type[0] == 'y'){
			// Descending order
			for($i=$end; $i>=$start; $i--){
				$this->tab();
				
				if($this->data[$label] == $i){
					$selected = ' selected="selected"';
				} else {
					$selected = null;
				}
				
				echo '<option value="' . $i . '"' . $selected . '>' . $i . '</option>';
				$this->nl();
			}
		} else {
			// Ascending order
			for($i=$start; $i<=$end; $i++){
				$this->tab();
				
				if($this->data[$label] == $i){
					$selected = ' selected="selected"';
				} else {
					$selected = null;
				}
				
				echo '<option value="' . $i . '"' . $selected . '>' . $i . '</option>';
				$this->nl();
			}
		}
		echo '</select>';
		
		$this->close();
	}
	
	// Output a browse button for file uploading
	function file($label, $args = array(null)){
		$this->open($label);
		
		echo '<input type="file" name="' . $label . '" id="' . $label . '" ';
		if(count($args) > 0 && $args != array(null)){
			$this->arguments($args);
		}
		echo ' />';
		
		$this->close();
	}
	
	// Output a submit button
	function submit($class = null){
		$this->tab();
		
		echo '<input type="submit" name="_submit" value="';
		switch($this->command){
			case 'add': echo 'Add'; break;
			case 'edit': echo 'Edit'; break;
			case 'delete': echo 'Delete'; break;
			case 'upload': echo 'Upload'; break;
		}
		echo '" ';

		if($class != null){
			echo 'class="' . $class . '" ';
		}
		echo '/>';
		
		$this->close();
	}
}
?>