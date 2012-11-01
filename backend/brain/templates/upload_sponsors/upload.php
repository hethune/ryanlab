<div class="header">Upload Sponsor Logos</div>

<?php
// News Template
$form->startUpload('99999999');
?>

<div class="col left">
<?php
$form->file('Logo');
$form->submit('button');
?>
</div>

<?php
$form->end();
?>