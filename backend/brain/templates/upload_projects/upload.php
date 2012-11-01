<div class="header">Upload Research Project Thumbnails</div>

<?php
// News Template
$form->startUpload('99999999');
?>

<div class="col left">
<?php
$form->file('Thumbnail');
$form->submit('button');
?>
</div>

<?php
$form->end();
?>