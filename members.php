<?php require('headers.php'); ?>
<?php


$advisors = $sql->getRows("SELECT Title, FirstName, LastName, Email, Photo, Biography, Research, Degree FROM members WHERE Degree = 'Advisor' ORDER BY LastName");
$program_directors = $sql->getRows("SELECT Title, FirstName, LastName, Email, Photo, Biography, Research, Degree FROM members WHERE Degree = 'ProgramDirector' ORDER BY LastName");
$co_directors = $sql->getRows("SELECT Title, FirstName, LastName, Email, Photo, Biography, Research, Degree FROM members WHERE Degree = 'CoDirector' ORDER BY LastName");
$researchers = $sql->getRows("SELECT Title, FirstName, LastName, Email, Photo, Biography, Research, Degree FROM members WHERE Degree = 'Researcher' ORDER BY LastName");
$visitors = $sql->getRows("SELECT Title, FirstName, LastName, Email, Photo, GraduationMonth, GraduationYear FROM members WHERE Degree = 'Visitor' ORDER BY LastName ASC");
$alumni = $sql->getRows("SELECT Title, FirstName, LastName, GraduationMonth, GraduationYear, Biography FROM members WHERE Degree = 'Alumni' ORDER BY LastName ASC");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="../styles/screen.css" />
	<title>Members | The M3B LAB</title>
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

        <h2>Faculty Director/Collaborators</h2>
        <?php outputMembers($advisors); ?>

        <h2>Program Director</h2>
        <?php outputFaculty($program_directors); ?>

        <h2>Co-Directors</h2>
        <?php outputMembers($co_directors); ?>
        
        <h2>Researchers</h2>
        <?php outputMembers($researchers); ?>
        
        <h2>Visitors</h2>
        <?php outputMembers($visitors); ?>   

        <h2>Alumni</h2>
        <?php outputMembersPast($alumni); ?>

		<div class="top"><a href="#">Back to Top</a></div>
      </div>
      
    </div>
  </div>
</div>
</body>

</html>
