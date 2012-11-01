<?php require('headers.php'); ?>
<?php
// Get content
$news = $sql->getRows("SELECT Title, Link, Month, Day, Year FROM news ORDER BY Year DESC, Month DESC, Day DESC LIMIT 8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="/styles/screen.css" />
	<title>News &amp; Awards | The Liwei Lin Lab</title>
</head>

<body id="news">
<div id="wrap">
	<div id="main">
		<div class="padAll">
			<div id="sidebar">
				<?php include("sidebar.php"); ?>
			</div>
			
			<div id="content">		  
				<h1>News &amp; Awards</h1>
			  
				<div class="column floatL">
					<h2>Latest Articles</h2>

					<?php outputNews($news); ?>
					
					<a id="archive" href="/news/archive/">View Entire News Archive</a>
				</div>
				
				<div class="column floatR">
					<h2>Around the Lab</h2>
					<div id="twitter_div">
						<ul id="twitter_update_list"></ul>
						<a href="http://twitter.com/liweilinlab" id="twitter-link">follow the Liwei Lin Lab on Twitter</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/liweilinlab.json?callback=twitterCallback2&amp;count=8"></script>
</body>

</html>