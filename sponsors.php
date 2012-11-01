<?php require('headers.php'); ?>
<?php
// Get content
$sponsors = $sql->getRows("SELECT Company, Link, Logo FROM sponsors ORDER BY id DESC");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="/styles/screen.css" />
	<title>Sponsors | The Liwei Lin Lab</title>
</head>

<body id="sponsors">
<div id="wrap">
	<div id="main">
		<div class="padAll">
			<div id="sidebar">
				<?php include('sidebar.php'); ?>
			</div>
			
			<div id="content">		  
				<h1>Sponsors</h1>
			  
				<?php
				foreach($sponsors as $sponsor){
					$company = $sponsor[0];
					$link = $sponsor[1];
					$logo = $sponsor[2];
					
					echo '<div class="sponsor"><a href="' . $link . '"><img src="' . $logo . '" alt="' . $company . '" /></a></div>' . "\n";
				}
				?>
				
			</div>
		</div>
	</div>
</div>
</body>

</html>