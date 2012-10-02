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

if (!is_numeric($_POST['numarnopti']) || empty($_POST['tipcamera']) || empty($_POST['numarnopti']) || empty($_POST['modalitateplata'])) {
	echo "<div class='alert alert-error'>Va rugam completati toate campurile obligatorii.</div>";
	echo "<a href='index.php'>Inapoi</a>";

}else{

	echo "<div class='alert alert-success'>Va multumim!</div>";
	echo "<div class='alert'>Alegerea dumneavoastra am primit-o corect si consta in: </div>";
	echo "<h4>Tip camera: </h4> <p>" . $_POST['tipcamera'] . "</p>";
	echo "<h4>Numar de nopti: </h4> <p>" . $_POST['numarnopti'] . "</p>";
	echo "<h4>Modalitatea de plata: </h4> <p>" . $_POST['modalitateplata'] . "</p>";

	if ($_POST['tipcamera'] == "Single") {
		echo "<h2>Total de Plata</h2>" . $preturicamere["single"] * $_POST['numarnopti'] . " RON<br>";
		$calcul_single = $preturicamere["single"] * $_POST['numarnopti'];
	}elseif($_POST['tipcamera'] == "Double") {
		echo "<h2>Total de Plata</h2>" . $preturicamere["double"] * $_POST['numarnopti'] . " RON<br>";
		$calcul_double = $preturicamere["double"] * $_POST['numarnopti'];
	}else{
		echo "<h2>Nu ati selectionat niciun tip de camera</h2>";
	}

	if (!empty($_POST['numarrate']) && is_numeric($_POST['numarrate']) && $_POST['modalitateplata'] == "Rate") {
		
		echo "<h4>Numar de rate: </h4> <p>" . $_POST['numarrate'] . "</p>";

		if ($_POST['tipcamera'] == "Single" && is_numeric($_POST['numarrate']) && $_POST['modalitateplata'] == "Rate") {
			echo "<p>Asta inseamna cate <strong>" . $calcul_single/$_POST['numarrate'] . " RON</strong> de platit in " . $_POST['numarrate'] . " rate.</p>";
		}elseif($_POST['tipcamera'] == "Double" && is_numeric($_POST['numarrate'])&& $_POST['modalitateplata'] == "Rate"){
			echo "<p>Asta inseamna cate <strong>" . $calcul_double/$_POST['numarrate'] . " RON</strong>  de platit in " . $_POST['numarrate'] . " rate.</p>";
		}else{
			echo "<span>Ati optat sa platiti tot odata</span>";
		}
	}elseif ($_POST['modalitateplata']=="Rate" && $_POST['numarrate'] == "") {
		echo "<br><div class='alert alert-error'>Atentie! Ati selectionat plata in rate insa nu ati specificat un numar de rate.</div>";
			echo "<span>Platiti Tot Odata sau </span>";
			echo "<a class='btn btn-danger' href='index.php'>Rectifica</a>";
	}elseif(!empty($_POST['numarrate']) && is_numeric($_POST['numarrate'])){
		    echo "<br><div class='alert alert-error'>Atentie! Ati selectionat plata tot odata insa ati specificat un numar de rate.</div>";
		    echo "<span>Ramane plata Tot Odata sau </span>";
			echo "<a class='btn btn-danger' href='index.php'>Rectifica</a>";
	}else{
		//
	}
	

}


?>
<?php require_once 'includes/footer.php'; ?>