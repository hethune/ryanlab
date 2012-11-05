<?php require('headers.php'); ?>
<?php
// Get content
$news = $sql->getRows("SELECT Title, Link, Month, Day, Year FROM news ORDER BY id DESC, Year DESC, Month DESC, Day DESC LIMIT 5");

// Get accordion content
$mems = $sql->getRows("SELECT id, Title, ShortAbstract, TinyPicture FROM projects WHERE ResearchArea=1 LIMIT 3");
$nems = $sql->getRows("SELECT id, Title, ShortAbstract, TinyPicture FROM projects WHERE ResearchArea=2 LIMIT 3");
$nanomats = $sql->getRows("SELECT id, Title, ShortAbstract, TinyPicture FROM projects WHERE ResearchArea=3 LIMIT 3");
$biomems = $sql->getRows("SELECT id, Title, ShortAbstract, TinyPicture FROM projects WHERE ResearchArea=4 LIMIT 3");
$energy = $sql->getRows("SELECT id, Title, ShortAbstract, TinyPicture FROM projects WHERE ResearchArea=5 LIMIT 3");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="/styles/screen.css" />

	<script type="text/javascript" src="/slidemenu/slidemenu.js"></script>
	<link rel="stylesheet" type="text/css" href="/slidemenu/slidemenu.css" />
	
	<title>The M3B LAB</title>
</head>

<body id="home">
<div id="wrap">
  <div id="main">
    <div class="padAll">
    
      <div id="sidebar">
		    <?php include("sidebar.php"); ?>
      </div>
      
      <div id="content">      	
        <ul id="sm" class="sm">
          <h2>pics and descripitons</h2>
        </ul>
  		<br />
  		<div class="column floatL">
        <h3 style="text-align:center"><a href="/research/"><i>Micro/Nanoengineered<br/>Platforms for Cell Mechanobiology</i></a></h3>
  			<div style="text-align:center"><a href="/research/"><img src="/images/projects/project1.png" alt="Micro/Nanoengineered Platforms for Cell Mechanobiology" align="middle"> </a>
        </div>
  		</div>
          
      <div class="column floatR">
  			<h3 style="text-align:center"><a href="/research/"><i>Autonomous Microfluidic <br/> Components, Circuits and Systems</i></a></h3>
        <div style="text-align:center"><a href="/research/"><img src="/images/projects/project2.png" alt="Micro/Nanoengineered Platforms for Cell Mechanobiology" align="middle"> </a>
        </div>
      </div>
    </div>
    <div id="content">

      <div class="columnSuperWide">
        <h3><a href="/news/">News &amp; Awards</a></h3>
        <?php outputNews($news); ?>
      </div>
    </div>
      
    </div>
  </div>
</div>
</body>

</html>