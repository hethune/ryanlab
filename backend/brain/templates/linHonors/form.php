<div class="header">Lin Honors</div>

<?php
// Lin Honors Template
$form->start();
?>

<div class="col left">
<?php
$form->text('Honor');
$form->text('Link');
$form->date('Year','y+8');
$form->submit('button');
?>
</div>

<?php
$form->end();
?>