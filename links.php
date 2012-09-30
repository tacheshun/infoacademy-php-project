<?php session_start(); ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/data.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<div style="margin-left:10px;"><h1>Linkuri utile</h1></div>
<?php
get_logout();

foreach ($links as $key=>$value) {
	echo "<div style='margin-left:10px;'><a href='$value'>$key</a></div>";
}

?>
<?php require_once 'includes/footer.php'; ?>