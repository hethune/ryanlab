<div class="header">Publications</div>

<?php
// Member Template
$form->start();
?>

<div class="col left">
<?php
$form->area('Bibliography', array('rows'=>'10', 'cols'=>'40'));
$form->text('Link');
$form->text('Image');
?>
</div>

<div class="col left">
<?php
$form->select('Type', array('Journal Article' => 'Journal Article', 'Proceeding' => 'Proceeding'));
$form->date('Month', 'm');
$form->date('Year', 'y');
$form->submit('button');
$form->end();
?>
</div>