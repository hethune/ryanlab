<?php
// News List Template
$list->start(array('class' => 'list'));
$list->order('Degree','desc');
$list->titles(array('Last Name','First Name','Degree'));
$list->rows(array('LastName','FirstName','Degree'));
$list->end();
?>