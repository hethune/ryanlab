<?php
// Member Confirm Template
$form->start();
?>
<div class="message">Are you sure you want to delete <?php echo $_GET['id']; ?>?</div>
<?php
$form->submit('button');
$form->end();
?>