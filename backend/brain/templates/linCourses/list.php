<?php
// News List Template
$list->start(array('class' => 'list'));
$list->order('Year','desc');
$list->titles(array('Course', 'Semester', 'Year'));
$list->rows(array('Course', 'Semester', 'Year'));
$list->end();
?>