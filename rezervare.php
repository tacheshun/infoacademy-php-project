<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/data.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php
session_start();

var_dump($_POST);
//verifica daca vine prin post si din index.php
if($_SERVER['REQUEST_METHOD'] == "GET"){
	header('Location: index.php');
	exit;
}else{
	//daca imi vine gol post cu user si pass atunci trimitem la login
	if(empty($_POST['user']) || empty($_POST['password'])){
		header('Location: index.php');
		exit;
	}else{
		// verificam daca userul si parola exista in array
		if(!array_key_exists($_POST['user'],$users) || $users[$_POST['user']] !== $_POST['password']){
			echo "<h1>Autentificare esuata!</h1>\n\r";
			echo "<a href=".$home.">Incercati din nou?</a>";
		}else{
			// salvam username-ul in sesiune
			$_SESSION['username'] = $_POST['user'];
			$_SESSION['password'] = sha1($_POST['password']);
			echo "Aici va fi un formular selectie camere "."<br>";
			echo $_SESSION['username']."<br>";
			echo $_SESSION['password']."<br>";
		}
	}
}
//afisaza form

?>
<?php require_once 'includes/footer.php'; ?>