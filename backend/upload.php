<?php
// Define top level directory for image uploads
$topLevel = '../';

if(isset($_POST['upload'])){
	$target = $topLevel . $_POST['dir'] . '/';
	$remove = array("\\", "'", '"', ' ', '`', '~');
	$filename = str_replace($remove, '', basename($_FILES['file']['name']));
	if(strlen($filename) <= 0){
		$filename = date('dmyhis');
	}
	$target .= $filename;
	
	if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
		$message = 'File successfully uploaded.';
	} else {
		$message = 'File unsuccessfully uploaded.';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
	<style type="text/css" media="screen">@import "../styles/screen.css";</style>
	<style type="text/css" media="screen">@import "brain/styles.css";</style>
	<style type="text/css" media="screen">@import "generic.css";</style>
	
	<title>The Liwei Lin Lab - Backend</title>
</head>

<body id="">
<div id="wrap">
	<div id="main">
		<div class="padAll">
		
			<div id="sidebar">
			<?php include("../sidebar.php"); ?>
			</div>
			
			<div id="content">
				<div id="bar"><span>LINLAB Backend | <a href="/projects/linlab/backend/">Menu</a></span></div>
				<h2><?php echo $_GET['dir']; ?></h2>
				<?php
				if(isset($message)){
					echo '<div class="message">' . $message . '</div>';
				}
				?>
				<form enctype="multipart/form-data" action="upload.php?dir=<?php echo $_GET['dir']; ?>" method="POST">
					<input type="hidden" name="MAX_FILE_SIZE" value="99999999" />
					Choose a file to upload to <?php echo $_GET['dir']; ?>: <input name="file" type="file" /><br />
					<input type="hidden" name="dir" id="dir" value="<?php echo $_GET['dir']; ?>" />
					<input class="button" type="submit" name="upload" id="upload" value="Upload" />
				</form>
				
			</div>

		</div>
	</div>
</div>
</body>

</html>