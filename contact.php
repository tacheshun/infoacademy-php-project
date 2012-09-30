<?php session_start(); ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/data.php'; ?>
<?php require_once 'includes/functions.php'; ?>

<?php

if(get_logout()){
	header('location: index.php');
	exit();
}
$form = <<<gata
<div style="margin-left:20px;"><h1>Formular contact</h1></div>
	<form class="well span8" action="$_SERVER[PHP_SELF]" method="post">
			<div class="row">
				<div class="span3">
					<label>Nume complet</label>
					<input type="text" name="nume" class="span3" placeholder="Nume complet">
					<label>Adresa Email</label>
					<div class="input-prepend">
						<span class="add-on"><i class="icon-envelope"></i></span>
						<input type="text" name="email" id="inputIcon" class="span2" style="width:180px" placeholder="Adresa email">
					</div>
					<label>Telefon</label>
					<input type="text" name="telefon" class="span3" placeholder="Telefon">
					<label>De unde ati auzit de noi
						<select id="deunde" name="deunde" class="span3">
							<option value="nimic" selected="">Selectionati</option>
							<option value="prieten">Prieten</option>
							<option value="google">Google</option>
							<option value="altasursa">Alta sursa</option>
						</select>
					</label>
				</div>
				<div class="span5">
					<label>Intrebarea</label>
					<textarea name="intrebare" id="intrebarea" class="input-xlarge span5" rows="10"></textarea>
				</div>
			</div>
				<button class="btn btn-primary pull-right" value="Trimite">Trimite</button>
	</form>
gata;

if($_SERVER['REQUEST_METHOD']==='GET'){
	echo $form;
}else{
	if(!isset($_POST['nume']) || !preg_match('/^[a-zA-Z]+([ \,\'\/][a-zA-Z]+)+$/', $_POST['nume'])){
		echo "<div class='alert alert-error'>Introduceti un nume de persoana format dintr-o succesiune de cuvinte care incep cu litera mica sau mare, separate prin
spatiu, virgula sau apostrof</div>";
		echo $form;
	}elseif(!isset($_POST['email']) || !preg_match('/^[0-9A-Za-z._%+-]+@[0-9A-Za-z.-]+\.[A-Za-z]{2,6}$/', $_POST['email'])){
		echo "<div class='alert alert-error'>Introduceti o adresa de email valida! </div>";
		echo $form;
	}elseif(!isset($_POST['telefon']) || !preg_match('/^0(21|31|7[2-8])\d{7}$/', $_POST['telefon'])){
		echo "<div class='alert alert-error'>Introduceti un numar de telefon de fix sau mobil Romanesc!</div>";
		echo $form;
    }else{
		echo "<div class='alert alert-success'>Va multumim pentru interes. Veti fi contactat in cel mai scurt timp de unul dintre consultantii nostri de vanzari </div>";
		echo "<a href='$_SERVER[PHP_SELF]'>Inapoi la formular</a>";
	}
 }

?>
<?php require_once 'includes/footer.php'; ?>