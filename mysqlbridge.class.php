<?php
# --------------------------------
#
#   MySQL Bridge Class
#
#   Created by Rich Winslow
#   http://www.richwinslow.com/
#
# --------------------------------

class mysqlBridge{
  var $link;          // Variable as connection
  var $server;        // Server name
  var $database;      // Database name
  var $login;         // Database login
  var $pass;          // Database password
  var $databaseLink;  // Database link
  
  function init($server = NULL, $database = NULL, $login = NULL, $pass = NULL){
      $this->server = $server;
      $this->database = $database;
      $this->login = $login;
      $this->pass = $pass;
      $this->connect();
  }
  
  function setServer($server = NULL){
      $this->server = $server;
  }
  
  function setDatabase($database = NULL){
      $this->database = $database;
  }
  
  function setLogin($login = NULL){
      $this->login = $login;
  }
  
  function setPass($pass = NULL){
      $this->login = $pass;
  }
  
  function varsSet(){
      if($this->server != NULL && $this->database != NULL && $this->login != NULL && $this->pass != NULL){
          return true;
      } else { return false; }
  }
  
  function connect(){
      if($this->varsSet()){
          $this->link = mysql_connect($this->server, $this->login, $this->pass);
          if(!$this->link) die("Could not connect: " . mysql_error());
      }
      $this->databaseLink = mysql_select_db($this->database) or die("No database: " . mysql_error());
  }
  
  function close(){
      if($this->link) mysql_close($this->link);
  }
  
  function runQuery($query = NULL){
      $run = mysql_query($query) or die(mysql_error());
  }
  
  function numRows($query = NULL){
      $query = mysql_query($query);
      return mysql_num_rows($query);
  }
  
  function getRows($query = NULL){
      $query = mysql_query($query);
      while($result = mysql_fetch_row($query)){
          $info[] = $result;
      }
      return $info;
  }
  
  function getAssocs($query = NULL){
      $query = mysql_query($query);
      while($result = mysql_fetch_assoc($query)){
          $info[] = $result;
      }
      return $info;
  }
 
  function backupTable($table = NULL){
      $file = "backup/" . $table . "_" . date("d-m-y_H-i-s") . ".sql";
      $query = mysql_query("SELECT * INTO OUTFILE '$file' FROM $table");
  }
}
?>