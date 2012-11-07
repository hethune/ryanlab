<div class="header">News</div>


<?php
// News Template
$form->start();
$form->text('Title');
$form->area('Description', array('rows'=>'10', 'cols'=>'40'));
$form->text('Link');
?>

<div class="col left">
<?php
$form->date('Month','m');
$form->date('Day','d');
$form->date('Year','y');
$form->submit('button');
?>
</div>

<div class="col left">
<?php
$form->radio('Featured', array('No' => '0', 'Yes' => '1'));
?>
</div>

<?php
$form->end();
?>