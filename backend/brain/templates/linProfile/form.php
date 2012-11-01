<div class="header">Lin Profile</div>

<?php
// Lin Profile Template
$form->start();
?>

<div class="col left">
<?php
$form->area('Address', array('rows' => '10', 'cols' => '25'));
$form->text('Email');
$form->text('Phone');
$form->text('Fax');
?>
</div>

<div class="col left">
<?php
$form->area('Biography', array('rows' => '20', 'cols' => '25'));
$form->area('Research', array('rows' => '10', 'cols' => '25'));
$form->submit('button');
?>
</div>
<?php
$form->end();
?>