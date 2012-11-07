<?php
// News List Template
$list->start(array('class' => 'list'));
$list->order('Year', 'ASC');
$list->titles(array('Title', 'Link','','Month', 'Day', 'Year'));
$list->rows(array('Title', 'Link', 'Month','Day', 'Year'));
$list->end();
?>