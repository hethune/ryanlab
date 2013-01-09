<?php require('../headers.php'); ?>

<?php
$part1 = $sql->getRows("SELECT Title, Texts, Images, Videos, Publications FROM researches WHERE Title = 'Micropost Arrays with Embedded Biophysical Stimuli'");
$part2 = $sql->getRows("SELECT Title, Texts, Images, Videos, Publications FROM researches WHERE Title = 'MicroSpring Arrays for Tri-Axial Substrate Control'");
?>

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

      // $("#sec-header1").click(function(event){
      //   event.preventDefault();
      //   $("#detail1").slideToggle(0,'linear');
      // });

      // $("#sec-header2").click(function(event){
      //   event.preventDefault();
      //   $("#detail2").slideToggle(0,'linear');
      // });


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

<body id="research">

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

        <div id="detail1" class="detail">
          <?php outputResearches($part1); ?>
        </div>

        <div id="detail2" class="detail" style="display:none">
          <?php outputResearches($part2); ?>
        </div>

      </div>
    </div>
  </div>
</div>
</body>

</html>	