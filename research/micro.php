<?php require('../headers.php'); ?>
<?php
// Get which field to pull content from
$id = mysql_real_escape_string($_GET['field']);

// Get Content
if($id != null){
  $projects = $sql->getRows("SELECT Title, LeadResearcher, Picture, Description, id FROM projects WHERE ResearchArea = '$id' ORDER BY id DESC");  
  $field = $sql->getRows("SELECT Name FROM areas WHERE id = '$id' LIMIT 1");
  $field = $field[0][0];
}
else {
  $field = 'Featured';
  $projects = $sql->getRows("SELECT Title, LeadResearcher, Picture, Description, id FROM projects WHERE Featured != 0 ORDER BY id DESC");  
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="/styles/screen.css" />


	<title>Research | The M3B Lab</title>
</head>

<body id="research" onload="slideMenu.build('sm',467,10,10,1)">

<div id="wrap">
  <div id="main">
    <div class="padAll">
    
      <div id="sidebar">
		<?php include("../sidebar.php"); ?>
      </div>
      
      <div id="content">
      	<h1>Research</h1>

      </div>
    </div>
  </div>
</div>
</body>

</html>	