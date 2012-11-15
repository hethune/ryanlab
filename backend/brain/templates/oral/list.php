<?php
// News List Template
$list->start(array('class' => 'list'));
$list->order('Year', 'ASC');
$list->titles(array('Bibliography','Type','Year'));
$list->rows(array('Bibliography','Type','Year'));
$list->end();
?>