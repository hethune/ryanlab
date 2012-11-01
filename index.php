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
	
	<title>The Liwei Lin Lab</title>
</head>

<body id="home" onload="slideMenu.build('sm',467,10,10,1)">
<div id="wrap">
  <div id="main">
    <div class="padAll">
    
      <div id="sidebar">
		<?php include("sidebar.php"); ?>
      </div>
      
      <div id="content">      	
      <ul id="sm" class="sm">
        <li id="slideMems">
          <a class="label" href="/research/mems/">MEMS</a>
          <div class="content">
            <h3>Featured Projects</h3>
            <?php outputAccordionProjects($mems, 1); ?>
          </div>
        </li>
        <li id="slideNems">
          <a class="label" href="/research/nems/">NEMS</a>
          <div class="content">
            <h3>Featured Projects</h3>
            <?php outputAccordionProjects($nems, 2); ?>
          </div>
        </li>
        <li id="slideNanomats">
          <a class="label" href="/research/nanomaterials/">Nanomaterials</a>
          <div class="content">
            <h3>Featured Projects</h3>
            <?php outputAccordionProjects($nanomats, 3); ?>
          </div>
        </li>
        <li id="slideBiomems">
          <a class="label" href="/research/biomems/">BioMEMS</a>
          <div class="content">
            <h3>Featured Projects</h3>
            <?php outputAccordionProjects($biomems, 4); ?>
          </div>
        </li>
        <li id="slideEnergy">
          <a class="label" href="/research/energy/">Energy</a>
          <div class="content">
            <h3>Featured Projects</h3>
            <?php outputAccordionProjects($energy, 5); ?>
          </div>
        </li>
      </ul>
		<br />
		<div class="column floatL">
        	<h2>About Us</h2>
			<p>The Liwei Lin Lab at UC Berkeley focuses on applying the principles of mechanical engineering to a wide range of applications in growing fields, including <a href="/research/mems/">MEMS</a> (Microelectromechanical Systems), <a href="/research/nems/">NEMS</a> (Nanoelectromechanical Systems), Nanotechnology, Synthesis of <a href="/research/nanomaterials/">Nanomaterials</a>, <a href="/research/biomems/">BioMEMS</a> (Biological Microelectromechanical Systems), Microfluidics, Plasmonics, and <a href="/research/energy/">Energy</a>.</p>
		</div>
        
        <div class="column floatR">
			<h2><a href="/news/">News &amp; Awards</a></h2>
			<?php outputNews($news); ?>
        </div>
      </div>
      
    </div>
  </div>
</div>
</body>

</html>