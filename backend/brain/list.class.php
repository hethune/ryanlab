<?php
# --------------------------------
#
#   Brain List Class
#
#   Created by Rich Winslow
#   http://www.richwinslow.com/
#
# --------------------------------

class lister{
	var $orderBy = 'id';	// To determine how to retrieve data
	var $growth = 'desc';	// Ascending or descending order;
	
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
	
	function menu($class = null, $table, $options = array()){
		if($class != null){
			$class = ' class="' . $class . '"';
		}
		
		echo '<ul' . $class . '>';
		echo $this->nl();
		foreach($options as $option){
			switch(strtolower($option[0])){
				case 'a': $action = 'Add'; break;
				case 'e': $action = 'Edit'; break;
				case 'd': $action = 'Delete'; break;
			}
			
			$this->tab();
			echo '<li><a href="' . $_SERVER['PHP_SELF'] . '?t=' . $table . '&do=' . strtolower($action) . '">' . $action . '</a></li>';
			$this->nl();
		}
		echo '</ul>';
	}

	function menuUpload($class = null, $dir, $options = array()){
		global $UPLOAD_PATH;	// Path to index of uploads
		
		if($class != null){
			$class = ' class="' . $class . '"';
		}
		
		echo '<ul' . $class . '>';
		echo $this->nl();
		foreach($options as $option){
			switch(strtolower($option[0])){
				case 'u': $action = 'Upload'; break;
				case 'i': $action = 'Index'; break;
			}
			
			$this->tab();
			if($action == 'Index'){
				echo '<li><a href="' . $UPLOAD_PATH . '/' . $dir . '/">' . $action . '</a></li>';
			}
			else {
				echo '<li><a href="' . $_SERVER['PHP_SELF'] . '?dir=' . $dir . '&do=' . strtolower($action) . '">' . $action . '</a></li>';
			}
			$this->nl();
		}
		echo '</ul>';
	}
	
	function start($args = array(null)){
		// Start table
		echo '<table ';
		if(count($args) > 0){ $this->arguments($args); }
		echo 'border="0" cellpadding="0" cellspacing="0">';
		$this->nl();

	}
	
	function end(){
		echo '</table>';
	}
	
	function order($orderBy, $growth = null){
		$this->orderBy = $orderBy;
		if($growth != null && ($growth == strtolower('asc') || $growth == strtolower('desc'))){
			$this->growth = $growth;
		}
	}
	
	function titles($titles = array()){
		$this->tab();
		echo '<tr>';
		echo '<th>#</th>';
		foreach($titles as $title){
			echo '<th>' . $title . '</th>';
		}
		echo '</tr>';
		$this->nl();
	}

	function rows($columns){
		global $sql;	// Reference global MySQL Bridge
		global $do;		// Reference command for each link
		global $table;	// Reference global table
		$zebra = ' class="zebra"';	// Define zebra state

		$columnList = implode(',', $columns);
		$query = 'SELECT id,' . $columnList . ' FROM ' . $this->table . ' ORDER BY ' . $this->orderBy . ' ' . $this->growth;
		$data = $sql->getAssocs($query);
		foreach($data as $row){
			$this->tab();
			echo '<tr' . $zebra . '>';
			if($zebra == null){
				$zebra = ' class="zebra"';
			} else {
				$zebra = null;
			}
				foreach($row as $key => $value){
					echo '<td><a href="' . $_SERVER['PHP_SELF'] . '?t=' . $table . '&do=' . $do . '&id=' . $row['id'] . '">' . $value . '</a></td>';
				}
			echo '</tr>';
			$this->nl();
		}
	}
}
?>