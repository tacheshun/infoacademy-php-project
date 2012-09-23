<?php session_start(); ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/data.php';   ?>
<?php require_once 'includes/functions.php'; ?>
<?php
if(isset($_GET['logout'])){
	setcookie(session_name(),"",time()-86400);
	session_destroy();
	echo "Te-ai desconectat.<br />
		<a href='$_SERVER[PHP_SELF]'>Logheaza-te din nou</a>";
	exit;
}

if($_SERVER['REQUEST_METHOD'] == "GET" && empty($_SESSION['user'])){
	echo $loginform;
}else{
	if(empty($_POST['user']) && empty($_POST['pass'])){
		echo "<div class='alert alert-error'>Introduceti user si parola!</div>";
		echo $loginform;
		var_dump($_SESSION);
	}else{
		// verificam daca userul exista in array si daca parola corespunde
		if(!array_key_exists($_POST['user'],$users) || $users[$_POST['user']] !== $_POST['pass']){
			echo "<div class='alert alert-error'>Autentificare esuata!</div>\n";
			echo $loginform;
		}else{
			// salvam username-ul in sesiune
			$_SESSION['user'] = $_POST['user'];
			echo "Arata-mi formul de rezervare";
			var_dump($_SESSION);
		}
	}
}

?>
<?php require_once 'includes/footer.php'; ?>