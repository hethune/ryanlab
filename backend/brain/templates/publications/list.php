<?php
// Publications List Template
$list->start(array('class' => 'list'));
$list->order('Type', 'ASC');
$list->titles(array('Bibliography', 'Type', 'Month', 'Year'));
$list->rows(array('Bibliography', 'Type', 'Month', 'Year'));
$list->end();
?>