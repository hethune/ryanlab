<?php require('headers.php'); ?>
<?php
// Get content
$profile = $sql->getRows("SELECT Biography, Research, Address, Phone, Fax, Email FROM linprofile WHERE id = 1 LIMIT 1");
$profile = $profile[0];
$honors = $sql->getRows("SELECT Honor, Link, Year FROM linhonors ORDER BY Year DESC");
$courses = $sql->getRows("SELECT Course, Link, Semester, Year FROM lincourses ORDER BY Year DESC, Course DESC");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="/styles/screen.css" />
	<title>Professor Liwei Lin | The Liwei Lin Lab</title>
</head>

<body id="lin">
<div id="wrap">
	<div id="main">
		<div class="padAll">
			<div id="sidebar">
				<?php include("sidebar.php"); ?>
			</div>
			
			<div id="content">	
				<h1>Professor Liwei Lin</h1>
				
				<h2>Contact</h2>
				<div id="profile">
					<p class="columnSlim floatL padR">
						<?php
						$lines = explode("\n", $profile[2]);
						for($i=0; $i<=count($lines); $i++){
							if($i == 0){
								echo '<b>' . $lines[$i] . '</b><br />' . "\n";
							}
							elseif($i < count($lines)) {
								echo $lines[$i] . '<br />' . "\n";
							}
							else {
								echo $lines[$i];
							}
						}
						?>
					</p>
					
					<p class="columnSlim floatL">
						<b>Phone:</b> <?php echo $profile[3]; ?><br />
						<b>Fax:</b> <?php echo $profile[4]; ?><br />
						<b>Email:</b> <a href="mailto:<?php echo $profile[5]; ?>"><?php echo $profile[5]; ?></a>
					</p>
				</div>

				<h2>Biography</h2>
				<div id="biography">
					<?php outputBiography($profile[0]); ?>
				</div>
				
				<div class="column floatL">
					<h2>Courses</h2>
					<?php outputCourses($courses); ?>
				</div>
				
				<div class="column floatR">
					<h2>Honors</h2>
					<?php outputHonors($honors); ?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

</html>
