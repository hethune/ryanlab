<?php
	include("flatHandler.class.php");
	$data = new flatHandler;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <link rel="stylesheet" type="text/css" media="print" href="styles/css/print.css" />
  <style type="text/css" media="screen">@import "/styles/screen.css";</style>
  <title>Members | The Liwei Lin Lab</title>
</head>

<body>
<div id="wrap">
  <div id="main">
    <div class="padAll">
    
      <div id="sidebar">
		<?php include("sidebar.php"); ?>
      </div>
      
      <div id="content">
      	<h1>Former Members</h1>
        
        <h2>Former Ph.D. Students</h2>
        <table class="former" border="0" cellpadding="0" cellspacing="0">
        <?php
        	$filename = "members/formerPhDStudentsList.txt";
        	$data->run($filename);
        	$data->clear();
        ?>
		</table>
		
		<div class="textR"><a href="#">Back to Top</a></div>
		

        <h2>Former M.S. Students</h2>
        <table class="former" border="0" cellpadding="0" cellspacing="0">
        <?php
        	$filename = "members/formerMSStudentsList.txt";
        	$data->run($filename);
        	$data->clear();
        ?>
		</table>

		<div class="textR"><a href="#">Back to Top</a></div>
		
        <h2>Former Post Doctorates</h2>
        <table class="former" border="0" cellpadding="0" cellspacing="0">
        <?php
        	$filename = "members/formerPostDocsList.txt";
        	$data->run($filename);
        	$data->clear();
        ?>
		</table>

		<div class="textR"><a href="#">Back to Top</a></div>
		
        <h2>Former Visitors</h2>
        <table class="former" border="0" cellpadding="0" cellspacing="0">
        <?php
        	$filename = "members/formerVisitorsList.txt";
        	$data->run($filename);
        	$data->clear();
        ?>
		</table>
		
		<div class="textR"><a href="#">Back to Top</a></div>
		</div>
      
    </div>
  </div>
</div>
</body>

</html>