<?php require('headers.php'); ?>
<?php
// Get content
$pubs = $sql->getRows("SELECT Bibliography, PDF, Type, Month, Year FROM publications ORDER BY Type, Year DESC, Month DESC");
foreach($pubs as $pub){
	$grouping[$pub[4]][$pub[2]][] = $pub;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="/styles/screen.css" />
	<title>Publications | The Liwei Lin Lab</title>
</head>

<body id="publications">
<div id="wrap">
	<div id="main">
		<div class="padAll">
			<div id="sidebar">
				<?php include('sidebar.php'); ?>
			</div>
			
			<div id="content">		  
				<h1>Publications</h1>
			  
				<?php
				foreach($grouping as $year => $next){
					echo '<h2>' . $year . '</h2>' . "\n";
					foreach($next as $type => $pub){
						switch($type){
							case 'Journal Article':	$type = 'Journal Articles'; break;
							case 'Proceeding':		$type = 'Conference Proceedings'; break;
						}
						
						echo '<h3>' . $type . '</h3>' . "\n";
						
						echo '<table class="pubs" border="0" cellpadding="0" cellspacing="0">' . "\n";
						echo "\t" . '<tr><th>&nbsp;</th><th class="headerCite">Citation</th><th class="headerPdf">PDF</th></tr>' . "\n";
						$count = 1;
						foreach($pub as $data){
							$biblio = $data[0];
							$pdf = $data[1];
							
							// Zebra stripe for visibility
							if($count % 2 == 0){
								$zebra = ' class="zebra"';
							} else {
								$zebra = null;
							}
							
							// Remove PDF icon if doc doesn't exist
							if($pdf == null){
								$pdf = '" style="visibility: hidden;';
							}
							echo '<tr' . $zebra . '><td class="id">' . $count++ . '</td><td class="cite">' . $biblio . '</td><td class="pdf"><a href="' . $pdf . '"><img src="/images/pdf.gif" alt="PDF" /></a></td></tr>' . "\n";
						}
						echo '</table>' . "\n";
					}
					echo '<div class="top"><a href="#">Back to Top</a></div>';
				}
				?>
			</div>
		</div>
	</div>
</div>
</body>

</html>