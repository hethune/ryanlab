<?php require('headers.php'); ?>
<?php
// Get content
$pics = $sql->getRows("SELECT Description, Image, Month, Year FROM groupPicture ORDER BY Year DESC, Month DESC");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="../styles/screen.css" />
	<title>Group Pictures | The M3B Lab</title>
</head>

<body id="groupPictures">
<div id="wrap">
	<div id="main">
		<div class="padAll">
			<div id="sidebar">
				<?php include('sidebar.php'); ?>
			</div>
			
			<div id="content">		  
				<h1>Group Pictures</h1>
				<?php
				outputGroupPictures($pics);
				echo '<div class="top"><a href="#">Back to Top</a></div>';
				?>
			</div>
		</div>
	</div>
</div>
</body>

</html>