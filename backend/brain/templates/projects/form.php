<div class="header">Projects</div>

<?php
// Projects Template
$form->start();
?>

<div class="col left">
<?php
$form->text('Title');
$form->relate('ResearchArea','areas','Name');
$form->relateMany('LeadResearcher','members', array('LastName', 'FirstName'));
$form->text('Paper');
$form->text('Picture');
$form->text('TinyPicture');
$form->radio('Featured', array('No' => '0', 'Yes' => '1'));
?>
</div>

<div class="col left">
<?php
$form->area('ShortAbstract', array('rows' => '4', 'cols' => '25'));
$form->area('Description', array('rows' => '20', 'cols' => '25'));
$form->submit('button');
?>
</div>
<?php
$form->end();
?>