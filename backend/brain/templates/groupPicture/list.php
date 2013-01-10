<?php
// Publications List Template
$list->start(array('class' => 'list'));
$list->order('Year', 'ASC');
$list->titles(array('Description', 'Month', 'Year'));
$list->rows(array('Description', 'Month', 'Year'));
$list->end();
?>