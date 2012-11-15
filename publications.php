<?php require('headers.php'); ?>
<?php
// Get content
$pubs = $sql->getRows("SELECT Bibliography, Link, Type, Image, Month, Year FROM publications ORDER BY Type, Year DESC, Month DESC");
foreach($pubs as $pub){
	$grouping[$pub[2]][] = $pub;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="/styles/screen.css" />
	<title>Publications | The M3B Lab</title>
</head>

<body id="publications">
<div id="wrap">
	<div id="main">
		<div class="padAll">
			<div id="sidebar">
				<?php include('sidebar.php'); ?>
			</div>
			
			<div id="content">		  
				<h1>Publications</h1>
				<?php
				foreach($grouping as $type => $pub){
					switch($type){
						case 'Journal Article':	$type = 'Journal Publications'; break;
						case 'Proceeding':		$type = 'Refereed Conference Proceedings'; break;
					}
					
					echo '<h3>' . $type . '</h3>' . "\n";
					
					outputPublications($pub);
				}
				echo '<div class="top"><a href="#">Back to Top</a></div>';
				?>
			</div>
		</div>
	</div>
</div>
</body>

</html>