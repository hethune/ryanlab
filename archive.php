<?php require('headers.php'); ?>
<?php
// Get content
$archive = $sql->getRows("SELECT Title, Link, Month, Day, Year FROM news ORDER BY Year DESC, Month DESC, Day DESC");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="/styles/screen.css" />
	<title>News &amp; Awards Archive | The Liwei Lin Lab</title>
</head>

<body id="archive">
<div id="wrap">
	<div id="main">
		<div class="padAll">
			<div id="sidebar">
				<?php include("sidebar.php"); ?>
			</div>
			
			<div id="content">		  
				<h1>News &amp; Awards Archive</h1>
			  
			  <h2>Archive</h2>
				<?php outputNews($archive); ?>
			</div>
		</div>
	</div>
</div>

</body>

</html>