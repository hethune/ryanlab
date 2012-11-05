<div class="header">Member</div>

<?php
// Member Template
$form->start();
?>

<div class="col left">
<?php
$form->select('Title', array(''=>'', 'Prof.' => 'Prof.', 'Dr.' => 'Dr.', 'Mr.'=>'Mr.', 'Ms.'=>'Ms.', 'Mrs.'=>'Mrs.', 'Miss'=>'Miss'));
$form->text('FirstName');
$form->text('LastName');
$form->text('Email');
$form->text('Photo');
$form->select('Degree', array('Researcher'=>'Researcher', 'Visitor'=>'Visitor','Faculty Advisor/Collaborators'=>'Advisor','Program Director'=>'ProgramDirector','Co-Director'=>'CoDirector','Alumni'=>'Alumni'));
$form->date('GraduationMonth','m');
$form->date('GraduationYear','y+2');
?>
</div>

<div class="col left">
<?php
$form->area('Biography', array('rows' => '20', 'cols' => '25'));
$form->area('Research', array('rows' => '20', 'cols' => '25'));
$form->submit('button');
?>
</div>
<?php
$form->end();
?>