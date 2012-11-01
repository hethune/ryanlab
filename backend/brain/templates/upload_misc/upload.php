<div class="header">Upload Miscellaneous Pictures</div>

<?php
// News Template
$form->startUpload('99999999');
?>

<div class="col left">
<?php
$form->file('Image');
$form->submit('button');
?>
</div>

<?php
$form->end();
?>