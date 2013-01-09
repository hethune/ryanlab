<!-- General -->
<!-- ========================== -->
<div class="groupHeader">General</div>

<div class="menuCol">
	<div class="header">News</div>
	<?php
		$list->menu('menu','news',array('a','e','d'));
	?>
</div>

<div class="menuCol">
	<div class="header">Publications</div>
	<?php
		$list->menu('menu','publications',array('a','e','d'));
	?>
</div>

<div class="menuCol">
	<div class="header">Members</div>
	<?php
		$list->menu('menu','members',array('a','e','d'));
	?>
</div>


<div class="menuCol">
	<div class="header">Oral Presentations</div>
	<?php
		$list->menu('menu','oral',array('a','e','d'));
	?>
</div>

<div class="menuCol">
	<div class="header">Researches</div>
	<?php
		$list->menu('menu','researches',array('a','e','d'));
	?>
</div>



<!-- Images -->
<!-- ========================== -->
<div class="groupHeader">Images</div>

<div class="menuCol">
	<div class="header">Members</div>
	<?php
		$list->menuUpload('menu','members',array('u'));
	?>
</div>

<div class="menuCol">
	<div class="header">Sponsors</div>
	<?php
		$list->menuUpload('menu','sponsors',array('u'));
	?>
</div>

<div class="menuCol">
	<div class="header">Projects</div>
	<?php
		$list->menuUpload('menu','projects',array('u'));
	?>
</div>

<div class="menuCol">
	<div class="header">Miscellaneous</div>
	<?php
		$list->menuUpload('menu','misc',array('u'));
	?>
</div>

<!-- Backup -->
<!-- ========================== -->
<div class="groupHeader">Database</div>

<div class="menuCol">
	<div class="header">Backup</div>
	<ul class="menu">
		<li><a href="brain/backup_dbs.php">Save</a></li>
	</ul>
</div>