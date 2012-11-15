<div class="header">Oral Presentations</div>

<?php
// Member Template
$form->start();
?>


<div class="col left">
<?php
$form->text('Title');
$form->area('Bibliography', array('rows'=>'10', 'cols'=>'40'));
$form->text('Link');
$form->text('Abbreviation');
?>
</div>

<div class="col left">
<?php
$form->select('Type', array( 'Proceeding' => 'Proceeding','Other' => 'Other'));
$form->date('Month', 'm');
$form->date('Year','y');
?>
</div>

<div class="col left">
<?php
$form->radio('Hidden', array('No' => '0', 'Yes' => '1'));
$form->submit('button');

?>
</div>

<?php
$form->end();
?>