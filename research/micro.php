<?php require('../headers.php'); ?>
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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="/styles/screen.css" />

  <script type="text/javascript" src="/script/jquery.js"></script>  

	<title>Research | The M3B Lab</title>
</head>

<body id="research" onload="slideMenu.build('sm',467,10,10,1)">

<div id="wrap">
  <div id="main">
    <div class="padAll">
    
      <div id="sidebar">
		  <?php include("../sidebar.php"); ?>
      </div>
      
      <div id="content">
      	<h1>Research</h1>
      
        <div class="thumbnailL">
          <img src="/images/misc/project1.png" alt="Micro/Nanoengineered Platforms for Cell Mechanobiology" height="100" width="103" >
        </div>
        <div class="thumbnailR">
         <h2 class="inner">Micro/Nanoengineered Platforms <br/> for Cell Mechanobiology</h2>
        </div>
        
        <div class="intro">

          <p></p>
          <p>Microenvironmental mechanical cues influence diverse cellular processes, such as cell migration, cell morphology, and stem cell fate decisions.  In our lab, we use mechanical engineering methods and micro/nanofabrication processes to create novel technologies at scales that are biologically relevant and advantageous for studying and controlling cellular functions.
          </p>
        </div>

        <div class="nav">
          <div class="nav1">
            <img src="/images/projects/micro1.png" alt="pic1" height="100" width="120" align="right">
          </div>
          <div class="nav2">
            <img src="/images/projects/micro2.png" alt="pic1" height="100" width="120" align="left">
          </div>
        </div>

        <div class="detail">
          <h3>Micropost Arrays with Embedded Biophysical Stimuli</h3>
          <div style="overflow:hidden">
            <div style="float: left; width: 55%;">
              <p> Micropost arrays offer a powerful platform for geometrically customizing the biophysical characteristics of discrete, microscale substrate features.  For example, by increasing micropost radii (and therefore, stiffness) from post-to-post, we have created micropost array stiffness gradients capable of enhancing cell movement in the direction of increasing micropost stiffness (see the YouTube video on the lower right).  Scale Bar = 10 µm  
              </p>
            </div>
            <div style="float: right; width: 35%;">
               <img src="/images/projects/micro3.png" alt="pic1" height="150" width="140">
            </div>
          </div>

          <div style="overflow:hidden">
            <div style="float: left; width: 55%;">
              <img src="/images/projects/micro4.png" alt="pic1" height="161" width="318">
            </div>
            <div style="float: right; width: 35%;">
               <img src="/images/projects/micro3.png" alt="pic1" height="150" width="140">
            </div>
          </div>

          <div class="publication">
            <p style="margin-top:3px"><i><u>Selected Publications</u></i></p>
            <ol class="pub">
              <li>Ryan D. Sochol, Adrienne T. Higa, Randall R. R. Janairo, Song Li, and Liwei Lin, Unidirectional Mechanical Cellular Stimuli via Micropost Array Gradients. Soft Matter, Vol. 7, pp. 4606-4609, 2011. (Inside Front Cover; Selected as a “Hot Article”) Link
              </li>
              <li>Ryan D. Sochol, Adrienne T. Higa, Randall R. R. Janairo, Song Li, and Liwei Lin, Effects of Micropost Spacing and Stiffness on Cell Motility. Micro and Nano Letters, Vol. 6, pp. 323-326, 2011.  Link
              </li>
              <li>(<a href="/research/oral/">ORAL</a>) Ryan D. Sochol, Adrienne T. Higa, Randall R.R. Janairo, Annie Chou, Song Li, and Liwei Lin, Unidirectional Cellular Durotaxis via Microfabricated Posts of Varying Anisotropy, Proc. of the 15th International Conference on Solid-State Sensors, Actuators and Microsystems (Transducers 2009), Denver, CO, USA, June 21-25, 2009.
              </li>
              <li>(<a href="/research/oral/">ORAL</a>)  Ryan D. Sochol, Adrienne T. Higa, Randall R. R. Janairo, Kedar G. Shah, Terry D. Johnson, Song Li, and Liwei Lin, Microscale Control of Micropost Stiffness to Induce Cellular Durotaxis, Proc. of the 12th International Conference on Miniaturized Systems for Chemistry and Life Sciences (µTAS 2008), San Diego, CA, USA, October 12-16, 2008.
              </li>


            </ol>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</body>

</html>	