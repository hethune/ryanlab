<?php require('headers.php'); ?>
<?php
// Get which field to pull content from
$id = mysql_real_escape_string($_GET['field']);

// Get Content
if($id != null){
  $projects = $sql->getRows("SELECT Title, LeadResearcher, Picture, Description, id FROM projects WHERE ResearchArea = '$id' ORDER BY id DESC");  
  $field = $sql->getRows("SELECT Name FROM areas WHERE id = '$id' LIMIT 1");
  $field = $field[0][0];
}
else {
  $field = 'Featured';
  $projects = $sql->getRows("SELECT Title, LeadResearcher, Picture, Description, id FROM projects WHERE Featured != 0 ORDER BY id DESC");  
}

// Get accordion content
// $mems = $sql->getRows("SELECT id, Title, ShortAbstract, TinyPicture FROM projects WHERE ResearchArea=1 LIMIT 3");
// $nems = $sql->getRows("SELECT id, Title, ShortAbstract, TinyPicture FROM projects WHERE ResearchArea=2 LIMIT 3");
// $nanomats = $sql->getRows("SELECT id, Title, ShortAbstract, TinyPicture FROM projects WHERE ResearchArea=3 LIMIT 3");
// $biomems = $sql->getRows("SELECT id, Title, ShortAbstract, TinyPicture FROM projects WHERE ResearchArea=4 LIMIT 3");
// $energy = $sql->getRows("SELECT id, Title, ShortAbstract, TinyPicture FROM projects WHERE ResearchArea=5 LIMIT 3");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="styles/screen.css" />
	
	<title>Research &amp; Videos | The M3B Lab</title>
</head>

<body id="research" onload="slideMenu.build('sm',467,10,10,1)">
<div id="wrap">
  <div id="main">
    <div class="padAll">
    
      <div id="sidebar">
		<?php include("sidebar.php"); ?>
      </div>
      
      <div id="content">
      	<h1>Research</h1>
      	
      
		    <!-- <h2><?php echo $field; ?> Projects</h2>
		
		    <?php outputProjects($projects); ?> -->

        <br/>        

        <div class="column floatL">
          <h3 style="text-align:center"><a href="research/micro/"><i>Micro/Nanoengineered<br/>Platforms for Cell Mechanobiology</i></a></h3>
          <div style="text-align:center"><a href="research/micro/"><img src="images/projects/project1.png" alt="Micro/Nanoengineered Platforms for Cell Mechanobiology" align="middle"> </a>
          </div>
        </div>
            
        <div class="column floatR">
          <h3 style="text-align:center"><a href="research/automous/"><i>Autonomous Microfluidic <br/> Components, Circuits and Systems</i></a></h3>
          <div style="text-align:center"><a href="research/automous/"><img src="images/projects/project2.png" alt="Micro/Nanoengineered Platforms for Cell Mechanobiology" align="middle"> </a>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="column floatM">
          <h3 style="text-align:center"><a href="research/oral/"><i>Selected Oral Presentations</i></a></h3>
          <div style="text-align:center"><a href="research/oral/"><img src="images/projects/Sochol_Presents.jpg" alt="Sochol_Presents" height="200" width="488" align="middle"></a>
          </div>
        </div>
		          

      </div>
      
    </div>
  </div>
</div>
</body>

</html>