<?php require('headers.php'); ?>
<?php

$heads = $sql->getRows("SELECT Title, FirstName, LastName, Email, Photo, Biography, Research, Degree FROM members WHERE Degree = 'Head' ORDER BY LastName");
$grants = $sql->getRows("SELECT Title, FirstName, LastName, Email, Photo, Biography, Research, Degree FROM members WHERE Degree = 'Grants' ORDER BY LastName");

$phds = $sql->getRows("SELECT Title, FirstName, LastName, Email, Photo, GraduationMonth, GraduationYear FROM members WHERE Degree = 'Ph.D.' ORDER BY LastName ASC");
$masters = $sql->getRows("SELECT Title, FirstName, LastName, Email, Photo, GraduationMonth, GraduationYear FROM members WHERE Degree = 'M.S.' ORDER BY LastName ASC");
$postDocs = $sql->getRows("SELECT Title, FirstName, LastName, Email, Photo, GraduationMonth, GraduationYear FROM members WHERE Degree = 'Post Doc' ORDER BY LastName ASC");
$undergrads = $sql->getRows("SELECT Title, FirstName, LastName, Email, Photo, GraduationMonth, GraduationYear FROM members WHERE Degree = 'Undergrad' ORDER BY LastName ASC");
$visitors = $sql->getRows("SELECT Title, FirstName, LastName, Email, Photo, GraduationMonth, GraduationYear FROM members WHERE Degree = 'Visitor' ORDER BY LastName ASC");
$alumni = $sql->getRows("SELECT Title, FirstName, LastName, GraduationMonth, GraduationYear, Biography FROM members WHERE Degree = 'Alumni' ORDER BY LastName ASC");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="/styles/screen.css" />
	<title>Members | The Liwei Lin Lab</title>
</head>

<body id="members">
<div id="wrap">
  <div id="main">
    <div class="padAll">
    
      <div id="sidebar">
		<?php include("sidebar.php"); ?>
      </div>
      
      <div id="content">
      	<h1>Members</h1>

        <h2>Faculty Director</h2>
        <?php outputFaculty($heads); ?>

        <h2>Grants Specialist</h2>
        <?php outputFaculty($grants); ?>

        <h2>Post Doctorate Members</h2>
        <?php outputMembers($postDocs); ?>
        
        <h2>Doctorate Students</h2>
        <?php outputMembers($phds); ?>
        
        <h2>Masters Students</h2>
        <?php outputMembers($masters); ?>

        <h2>Undergraduate Students</h2>
        <?php outputMembers($undergrads); ?>

        <h2>Visiting Scholars</h2>
        <?php outputMembers($visitors); ?>

 <!--
        <h2>Alumni</h2>
        <?php outputMembersPast($alumni); ?>
-->
		<div class="top"><a href="#">Back to Top</a></div>
      </div>
      
    </div>
  </div>
</div>
</body>

</html>
