<div class="header">Publications</div>

<?php
// Member Template
$form->start();
?>

<div class="col left">
<?php
$form->text('Description');
$form->text('Image');
?>
</div>

<div class="col left">
<?php
$form->date('Month', 'm');
$form->date('Year', 'y');
$form->submit('button');
$form->end();
?>
</div>