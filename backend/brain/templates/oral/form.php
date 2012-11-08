<div class="header">News</div>


<?php
// News Template
$form->start();
$form->text('Title');
$form->text('Conference');
$form->text('Abbreviation');
$form->text('Authors');
$form->text('Place');
$form->text('Dates');
$form->text('Link');
$form->text('Notes');
?>

<div class="col left">
<?php
$form->radio('Type', array('Proceedings' => 'Proceedings '));
$form->date('Year','y');
$form->submit('button');
?>
</div>

<div class="col left">
<?php
$form->radio('Hidden', array('No' => '0', 'Yes' => '1'));
?>
</div>

<?php
$form->end();
?>