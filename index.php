<?php session_start(); ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/data.php';   ?>
<?php require_once 'includes/functions.php'; ?>
<?php

get_logout();

if($_SERVER['REQUEST_METHOD'] == "GET" && empty($_SESSION['user'])){
	echo $loginform;

}elseif(empty($_SESSION['user'])){

	if(empty($_POST['user']) && empty($_POST['pass'])){
		echo "<div class='alert alert-error'>Introduceti user si parola!</div>";
		echo $loginform;
	}else{
		// verificam daca userul exista in array si daca parola corespunde
		if(!array_key_exists($_POST['user'],$users) || $users[$_POST['user']] !== $_POST['pass']){
			echo "<div class='alert alert-error'>Autentificare esuata!</div>\n";
			echo $loginform;
		}else{
			// salvam username-ul si parola in sesiune. Parola nu ne trebuie insa dar tot o salvam.
			$_SESSION['user'] = $_POST['user'];
			$_SESSION['password'] = md5($_POST['pass']);
			echo $reserva_form;
		}
	}
}else{
		echo $reserva_form;
}

?>
<?php require_once 'includes/footer.php'; ?>