<div class="header">Upload Member Portrait</div>

<?php
// News Template
$form->startUpload('99999999');
?>

<div class="col left">
<?php
$form->file('Portrait');
$form->submit('button');
?>
</div>

<?php
$form->end();
?>