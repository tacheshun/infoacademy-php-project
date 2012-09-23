<?php session_start(); ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/data.php'; ?>
<?php require_once 'includes/functions.php'; ?>

<div style="margin-left:20px;"><h1>Linkuri utile</h1></div>
<?php
if(get_logout()){
	header('location: index.php');
	exit();
}
var_dump($links);

?>
<?php require_once 'includes/footer.php'; ?>