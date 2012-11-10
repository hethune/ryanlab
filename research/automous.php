<?php require('../headers.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <link rel="stylesheet" type="text/css" media="all" href="/styles/screen.css" />

  <script type="text/javascript" src="/script/jquery.js"></script>  

  <script>
    $(document).ready(function(){
      $("#navl").click(function(){
        $("#detail1").show();
        $("#detail2").hide();
        $("#detail3").hide();
        $("#navl").addClass('imgBorder');
        $("#navm").removeClass('imgBorder');
        $("#navr").removeClass('imgBorder');
      });
      $("#navm").click(function(){
        $("#detail1").hide();
        $("#detail2").show();
        $("#detail3").hide();
        $("#navl").removeClass('imgBorder');
        $("#navm").addClass('imgBorder');
        $("#navr").removeClass('imgBorder');
      });
      $("#navr").click(function(){
        $("#detail1").hide();
        $("#detail2").hide();
        $("#detail3").show();
        $("#navl").removeClass('imgBorder');
        $("#navm").removeClass('imgBorder');
        $("#navr").addClass('imgBorder');
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
          <img src="/images/misc/project2.png" alt="project2.png" height="100" width="103" >
        </div>
        <div class="thumbnailR">
         <h2 class="inner">Autonomous Microfluidic</br>Components, Circuits and Systems</h2>
        </div>
        
        <div class="intro">

          <p></p>
          <p>Similar to the way in which integrated circuits (ICs) revolutionized electronics, the advent of integrated microfluidic circuitry could significantly impact both chemical and biological fields. Here we utilize fluidic techniques routed in mechanical engineering to develop next-generation microfluidic components and systems that are capable of autonomous “on-chip”  functionalities.
          </p>
        </div>

        <div class="nav">
          <div class="nav11">
            <a href="#"><img id="navl" src="/images/projects/auto1.png" alt="pic1" height="100" width="180" align="right" background-color="#4C4646";>
            </a>
          </div>
          <div class="nav22">
            <a href="#"><img id="navm" src="/images/projects/auto2.png" alt="pic1" height="100" width="130" align="left">
            </a>
          </div>
          <div class="nav33">
            <a href="#"><img id="navr" src="/images/projects/auto3.png" alt="pic1" height="100" width="130" align="left">
            </a>
          </div>
        </div>

        <div id="detail1" class="detail">
          <h3>Continuous Flow Particulate-Based Microfluidic Reactors</h3>
          <div style="overflow:hidden">
            <div style="float: left; width: 55%;">
              <p> The ability to perform “multi-stage” fluidic mixing operations with suspended particles, such as living cells and micro/nanobeads, is a critical requirement for diverse chemical and biological applications.        In our lab, we combine hydrodynamic railing and trapping techniques in order to passively execute multi-step particulate-based fluidic reaction processes, while enabling optical detection during each fluidic mixing stage.  Scale Bars = 100 µm
              </p>
            </div>
            <div style="float: left; width: 35%; margin-left:20px;">
                <iframe height="150" src="" frameborder="2" allowfullscreen></iframe>
            </div>
          </div>

          <div style="overflow:hidden">
            <div style="float: left; width: 45%;">
              <img src="/images/projects/auto4.png" alt="pic1" height="161" width="280">
            </div>
            <div style="float: left; width: 35%; margin-left:20px;">
               <iframe width="150" height="161" src="" frameborder="2" allowfullscreen></iframe>
            </div>
          </div>

          <div class="publication">
            <p style="margin-top:3px"><i><u>Selected Publications</u></i></p>
            <ol class="pub">
              <li>Ryan D. Sochol, Song Li, Luke P. Lee, and Liwei Lin, Continuous Flow Multi-Stage Microfluidic Reactors via Hydrodynamic Railing of Microparticles. Lab on a Chip, Vol. 12, pp. 4168-4177, 2012.  Link
              </li>
              <li>Ryan D. Sochol, William E. R. Krieger, Mengqian Liu, Sarah Hesse, Jonathan Lei, Luke P. Lee, and Liwei Lin, A Continuous Flow “Rail-And-Trap” System for Autonomous Bead-Based Microfluidic Mixing and Visualization, Proc. of the 16th International Conference on Miniaturized Systems for Chemistry and Life Sciences (µTAS 2012), Okinawa, Japan, Oct. 28 – Nov. 1, 2012.
              </li>
              <li>(<a href="/research/oral/">ORAL</a>) Ryan D. Sochol, Ryan Ruelos, Valerie Chang, Megan Dueck, Luke P. Lee, and Liwei Lin, Continuous Flow Layer-by-Layer Microbead Functionalization via a Micropost Array Railing System, Proc. of the 16th International Conference on Solid-State Sensors, Actuators and Microsystems (Transducers 2011), Beijing, China, June 5-9, 2011. (Outstanding Paper Award)
              </li>
              
            </ol>
          </div>
        </div>

        <div id="detail2" class="detail" style="display:none">
          <h3>Self-Regulating Microfluidic Circuit Components for Ultra-Low Reynolds Number Applications</h3>
          <div style="overflow:hidden">
            <div style="float: left; width: 55%;">
              <p> To fully realize the promise of the next generation of integrated microfluidic circuitry, researchers will need microfluidic components that: (i) are analogous to those of electrical circuits, and (ii) operate under ultra-low Reynolds number conditions.  In our lab, we use a wide range of techniques to engineer microfluidic components (e.g., diodes, capacitors and transistors) for accomplishing functional chemical and biological microprocessors.   Scale Bars = 50 µm
              </p>
            </div>
            <div style="float: left; width: 35%; margin-left:20px;">
                <iframe height="150" src="" frameborder="2" allowfullscreen></iframe>
            </div>
          </div>

          <div style="overflow:hidden">
            <div style="float: left; width: 45%;">
              <img src="/images/projects/auto5.png" alt="pic1" height="171" width="220">
            </div>
            <div style="float: left; width: 35%; margin-left:20px;">
               <iframe width="150" height="161" src="" frameborder="2" allowfullscreen></iframe>
            </div>
          </div>

          <div class="publication">
            <p style="margin-top:3px"><i><u>Selected Publications</u></i></p>
            <ol class="pub">
              <li>Ryan D. Sochol, Casey C. Glick, Kye Y. Lee, Thomas Brubaker, Albert Lu, Melissa Wah, Shan Gao, Erica Hicks, Ki Tae Wolf, Kosuke Iwai, Luke P. Lee, and Liwei Lin, Single-Layer “Domino” Diodes via Optofluidic Lithography for Ultra-Low Reynolds Number Applications, Proceedings of 26th IEEE International Conference on Micro Electro Mechanical Systems (MEMS 2012), Taipei, Taiwan, January 20-24, 2013. (Submitted) 
              </li>
              <li>(<a href="/research/oral/">ORAL</a>) Ryan D. Sochol, Jonathan Lei, Albert Lu, Erica L. Hicks, Shan Gao, Vivek Menon, Luke P. Lee, and Liwei Lin, Circular Microchannels Enhance Diodicity Performance at Ultra-Low Reynolds Number for Microfluidic Bead-Based Diodes, Proc. of the 16th International Conference on Miniaturized Systems for Chemistry and Life Sciences (μTAS 2012), Okinawa, Japan, Oct. 28 – Nov. 1, 2012. 
              </li>
              <li>(<a href="/research/oral/">ORAL</a>) <u>Ryan D. Sochol</u>, Kosuke Iwai, Jonathan Lei, Deepak Lingam, Luke P. Lee, and Liwei Lin, A Single-Microbead-Based Microfluidic Diode for Ultra-Low Reynolds Number Applications, Proc. of the 25th IEEE International Conference on Micro Electro Mechanical Systems (MEMS 2012), Paris, France, Jan. 29 – Feb. 2, 2012.
              </li>
              
            </ol>
          </div>
        </div>

         <div id="detail3" class="detail" style="display:none">
          <h3>Resettable Hydrodynamic Particulate-Based Arraying Systems</h3>
          <div style="overflow:hidden">
            <div style="float: left; width: 55%;">
              <p> Precision hydrodynamic controls of suspended particles (e.g., living cells and micro/nanobeads) are integral to a wide range of lab-on-a-chip applications, such as point-of-care molecular diagnostics and on-site chemical detection.  In our lab, we use hydrodynamic methodologies to rapidly trap suspended particles in array positions for visualization, and then release the arrayed particles by reversing the flow polarity.  Scale Bar = 50 µm
              </p>
            </div>
            <div style="float: left; width: 35%; margin-left:20px;">
                <iframe height="150" src="" frameborder="2" allowfullscreen></iframe>
            </div>
          </div>

          <div style="overflow:hidden">
            <div style="float: left; width: 45%;">
              <img src="/images/projects/auto7.png" alt="pic1" height="161" width="280">
            </div>
            <div style="float: left; width: 35%; margin-left:20px;">
               <iframe width="150" height="161" src="" frameborder="2" allowfullscreen></iframe>
            </div>
          </div>

          <div class="publication">
            <p style="margin-top:3px"><i><u>Selected Publications</u></i></p>
            <ol class="pub">
              <li>Ryan D. Sochol, Megan E. Dueck, Song Li, Luke P. Lee, and Liwei Lin, Hydrodynamic Resettability for a Microparticle Arraying System. Lab on a Chip, 2012.  (DOI:10.1039/C2LC40704C)  Link  
              </li>
              <li>Ryan D. Sochol, Benjamin P. Casavant, Megan E. Dueck, Luke P. Lee, and Liwei Lin, A Dynamic Bead-Based Microarray for Parallel DNA Detection. Journal of Micromechanics and Microengineering, Vol. 21, pp. 054019, 2011.  Link
              </li>
              <li>(<a href="/research/oral/">ORAL</a>) Ryan D. Sochol, Barthélémy Lüthi, Kosuke Iwai, Megan Dueck, Luke P. Lee, and Liwei Lin, A Resettable High-Density Microfluidic Particle Trapping System, Proc. of the 14th IEEE Solid-State Sensor and Actuator Workshop (Hilton Head 2010), Hilton Head Island, SC, USA, June 6-10, 2010.
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