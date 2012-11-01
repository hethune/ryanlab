<div class="header">Area</div>

<?php
// Research Template
$form->start();
?>

<div class="col left">
<?php
$form->text('Name');
$form->text('Picture');
?>
</div>

<div class="col left">
<?php
$form->area('Description', array('rows' => '20', 'cols' => '25'));
$form->submit('button');
?>
</div>

<?php
$form->end();
?>