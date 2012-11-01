<div class="header">Lin Courses</div>

<?php
// Lin Honors Template
$form->start();
?>

<div class="col left">
<?php
$form->text('Course');
$form->text('Link');
$form->select('Semester', array('Spring'=>'Spring','Summer'=>'Summer','Fall'=>'Fall'));
$form->date('Year','y');
$form->submit('button');
?>
</div>
<?php
$form->end();
?>