<div class="header">Researches</div>

<?php
// Member Template
$form->start();
?>

<div class="col left">
<?php
$form->text('Title');
$form->area('Texts', array('rows'=>'10', 'cols'=>'40'));
$form->area('Publications',array('rows=>10','cols'=>'40'));
echo "<p>Seperated by semicolon.</p>"

?>
</div>

<div class="col left">
<?php
$form->text('Images');
$form->text('Videos');
$form->submit('button');
$form->end();
?>
</div>