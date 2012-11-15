<?php require('../headers.php'); ?>
<?php

$presentations = $sql->getRows("SELECT Bibliography, Link, Type, Abbreviation, Month, Year, Title  FROM oral WHERE Hidden = '0' ORDER BY id DESC");  
 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="/styles/screen.css" />

	<title>Oral Presentations | The M3B Lab</title>
</head>

<body id="research">
<div id="wrap">
  <div id="main">
    <div class="padAll">
    
      <div id="sidebar">
		<?php include("../sidebar.php"); ?>
      </div>
      
      <div id="content">
      	<h1>Oral Presentations</h1>
      	
      
        <div class="thumbnailL">
          <img src="/images/misc/oral.png" alt="Oral Presentation" height="100" width="103" >
        </div>
        <div class="thumbnailR">
	       <h2 class="inner">Selected Oral Presentations</h2>
       </div>
     
		    <?php outputPresentations($presentations); ?> 

        		
      </div>
      
    </div>
  </div>
</div>
</body>

</html>