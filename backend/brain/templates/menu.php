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
	<div class="header">Sponsors</div>
	<?php
		$list->menu('menu','sponsors',array('a','e','d'));
	?>
</div>

<div class="menuCol">
	<div class="header">Oral Presentations</div>
	<?php
		$list->menu('menu','oral',array('a','e','d'));
	?>
</div>

<!-- Research -->
<!-- ========================== -->
<div class="groupHeader">Research</div>

<div class="menuCol">
	<div class="header">Areas</div>
	<?php
		$list->menu('menu','areas',array('a','e','d'));
	?>
</div>

<div class="menuCol">
	<div class="header">Projects</div>
	<?php
		$list->menu('menu','projects',array('a','e','d'));
	?>
</div>

<!-- Dr. Lin Profile -->
<!-- ========================== -->
<div class="groupHeader">Dr. Liwei Lin</div>

<div class="menuCol">
	<div class="header">Profile</div>
	<?php
		$list->menu('menu','linProfile',array('e'));
	?>
</div>

<div class="menuCol">
	<div class="header">Honors</div>
	<?php
		$list->menu('menu','linHonors',array('a','e','d'));
	?>
</div>

<div class="menuCol">
	<div class="header">Courses</div>
	<?php
		$list->menu('menu','linCourses',array('a','e','d'));
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