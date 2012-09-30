<?php session_start(); ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/data.php';   ?>
<?php require_once 'includes/functions.php'; ?>
<?php

get_logout();

if($_SERVER['REQUEST_METHOD'] == "GET"){
	header("location: index.php");
	exit();
}
if (empty($_POST['tipcamera']) || empty($_POST['numarnopti']) || empty($_POST['modalitateplata'])) {
	echo "<div class='alert alert-error'>Va rugam completati toate campurile obligatorii.</div>";
	echo "<a href='index.php'>Inapoi</a>";
}
else{
	echo "<div class='alert alert-success'>Va multumim!</div>";
	echo "<div class='alert'>Alegerea dumneavoastra am primit-o corect si consta in: </div>";
	echo "<h4>Tip camera: </h4> <p>" . $_POST['tipcamera'] . "</p>";
	echo "<h4>Numar de nopti: </h4> <p>" . $_POST['numarnopti'] . "</p>";
	echo "<h4>Modalitatea de plata: </h4> <p>" . $_POST['modalitateplata'] . "</p>";
	echo "<h4>Numar de rate(in cazul in care s-a ales plata in rate): </h4> <p>" . $_POST['numarrate'] . "</p>";
}


?>
<?php require_once 'includes/footer.php'; ?>