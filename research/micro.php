<?php require('../headers.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="../../styles/screen.css" />

  <script type="text/javascript" src="../../script/jquery.js"></script>  

  <script>
    $(document).ready(function(){
      var sec1 = "Micropost_Arrays_with_Embedded_Biophysical_Stimuli";
      var sec2 = "MicroSpring_Arrays_for_Tri-Axial_Substrate_Control";
      var url = location.href;
      url = url.substring(url.indexOf("#")+1,url.length)
      switch(url) {
        case sec1:
          $("#detail1").slideDown(0,'linear');
          $("#navr").addClass('imgOpa');
          break;
        case sec2:
          $("#detail2").slideDown(0,'linear');
          $("#navl").addClass('imgOpa');
          break;
      }

      $("#sec-header1").click(function(event){
        event.preventDefault();
        $("#detail1").slideToggle(0,'linear');
      });

      $("#sec-header2").click(function(event){
        event.preventDefault();
        $("#detail2").slideToggle(0,'linear');
      });


      $("#navl").click(function(){
        $("#detail1").slideDown(0,'linear');
        $("#detail2").slideUp(0,'linear');
        $("#navr").addClass('imgOpa');
        $("#navl").removeClass('imgOpa');
      });
      $("#navr").click(function(){
        $("#detail1").slideUp(0,'linear');
        $("#detail2").slideDown(0,'linear');
        $("#navl").addClass('imgOpa');
        $("#navr").removeClass('imgOpa');
      });
    });
  </script>

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
          <img src="../../images/misc/project1.png" alt="Micro/Nanoengineered Platforms for Cell Mechanobiology" height="100" width="103" >
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
          <div id="navl" class="nav1">
            <a href="#Micropost_Arrays_with_Embedded_Biophysical_Stimuli" class="darken"><img src="../../images/projects/micro1.png" alt="pic1" height="100" width="120" align="right" background-color="#4C4646";>
            </a>
          </div>
          <div id="navr" class="nav2">
            <a href="#MicroSpring_Arrays_for_Tri-Axial_Substrate_Control"><img src="../../images/projects/micro2.png" alt="pic1" height="100" width="120" align="left">
            </a>
          </div>
        </div>

        <div id="sec-header1" class="sec-header">
          <a name="Micropost_Arrays_with_Embedded_Biophysical_Stimuli"></a>
          <a href="#"><h3>Micropost Arrays with Embedded Biophysical Stimuli</h3></a>
        </div>

        <div id="detail1" class="detail">
          <div style="overflow:hidden">
            <div style="float: left; width: 55%;">
              <p> Micropost arrays offer a powerful platform for geometrically customizing the biophysical characteristics of discrete, microscale substrate features.  For example, by increasing micropost radii (and therefore, stiffness) from post-to-post, we have created micropost array stiffness gradients capable of enhancing cell movement in the direction of increasing micropost stiffness (see the YouTube video on the lower right).  Scale Bar = 10 µm  
              </p>
            </div>
            <div style="float: left; width: 35%; margin-left:60px;">
               <img src="../../images/projects/micro3.png" alt="pic1" height="150" width="140">
            </div>
          </div>

          <div style="overflow:hidden">
            <div style="float: left; width: 55%;">
              <img src="../../images/projects/micro4.png" alt="pic1" height="161" width="318">
            </div>
            <div style="float: left; width: 35%;">
               <iframe width="250" height="161" src="http://www.youtube.com/embed/RtYXYHOj1BE" frameborder="2" allowfullscreen></iframe>
            </div>
          </div>

          <div class="publication">
            <p style="margin-top:3px"><i><u>Selected Publications</u></i></p>
            <ol class="pub">
              <li>Ryan D. Sochol, Adrienne T. Higa, Randall R. R. Janairo, Song Li, and Liwei Lin, Unidirectional Mechanical Cellular Stimuli via Micropost Array Gradients. Soft Matter, Vol. 7, pp. 4606-4609, 2011. (Inside Front Cover; Selected as a “Hot Article”) Link
              </li>
              <li>Ryan D. Sochol, Adrienne T. Higa, Randall R. R. Janairo, Song Li, and Liwei Lin, Effects of Micropost Spacing and Stiffness on Cell Motility. Micro and Nano Letters, Vol. 6, pp. 323-326, 2011.  Link
              </li>
              <li>(<a href="../../research/oral/">ORAL</a>) Ryan D. Sochol, Adrienne T. Higa, Randall R.R. Janairo, Annie Chou, Song Li, and Liwei Lin, Unidirectional Cellular Durotaxis via Microfabricated Posts of Varying Anisotropy, Proc. of the 15th International Conference on Solid-State Sensors, Actuators and Microsystems (Transducers 2009), Denver, CO, USA, June 21-25, 2009.
              </li>
              <li>(<a href="../../research/oral/">ORAL</a>)  Ryan D. Sochol, Adrienne T. Higa, Randall R. R. Janairo, Kedar G. Shah, Terry D. Johnson, Song Li, and Liwei Lin, Microscale Control of Micropost Stiffness to Induce Cellular Durotaxis, Proc. of the 12th International Conference on Miniaturized Systems for Chemistry and Life Sciences (µTAS 2008), San Diego, CA, USA, October 12-16, 2008.
              </li>


            </ol>
          </div>
        </div>

        <div id="sec-header1" class="sec-header">
          <a name="MicroSpring_Arrays_for_Tri-Axial_Substrate_Control"></a>
          <a href="#"><h3>MicroSpring Arrays for Tri-Axial Substrate Control</h3></a>
        </div>

        <div id="detail2" class="detail" style="display:none">
          <div style="overflow:hidden">
            <p> This new project was created to achieve user-control over the “tri-axial” stiffness of discrete, microscale substrate features for cell-based applications.  For this project, we collaborate with Prof. Shoji Takeuchi’s Biohybrid System Laboratory at the University of Tokyo.  In contrast to micropost arrays, which are inherently limited to “bi-axial” stiffness control, microSpring arrays enable researchers to geometrically tune the x-, y-, and z-axis stiffness of each microSpring.    
            </p>
          </div>

          <div style="overflow:hidden">
            <div style="align:center">
              <img src="../../images/projects/micro5.png" alt="pic1">
            </div>
          </div>

          <div class="publication">
            <p style="margin-top:3px"><i><u>Selected Publications</u></i></p>
            <ol class="pub">
              <li>Ryan D. Sochol, Song Li, Luke P. Lee, and Liwei Lin, Continuous Flow Multi-Stage Microfluidic Reactors via Hydrodynamic Railing of Microparticles. Lab on a Chip, Vol. 12, pp. 4168-4177, 2012.  Link
              </li>
              <li>Ryan D. Sochol, William E. R. Krieger, Mengqian Liu, Sarah Hesse, Jonathan Lei, Luke P. Lee, and Liwei Lin, A Continuous Flow “Rail-And-Trap” System for Autonomous Bead-Based Microfluidic Mixing and Visualization, Proc. of the 16th International 
              </li>
              <li>(<a href="../../research/oral/">ORAL</a>)) Ryan D. Sochol, Ryan Ruelos, Valerie Chang, Megan Dueck, Luke P. Lee, and Liwei Lin, Continuous Flow Layer-by-Layer Microbead Functionalization via a Micropost Array Railing System, Proc. of the 16th International Conference on Solid-State Sensors, Actuators and Microsystems (Transducers 2011), Beijing, China, June 5-9, 2011. (Outstanding Paper Award)
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