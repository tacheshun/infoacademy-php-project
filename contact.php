<?php session_start(); ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/data.php'; ?>
<?php require_once 'includes/functions.php'; ?>

<?php
if(get_logout()){
	header('location: index.php');
	exit();
}
//formularul de contact
$form = <<<gata
<div style="margin-left:20px;"><h1>Formular contact</h1></div>

<form class="well span8">
			<div class="row">
				<div class="span3">
					<label>Nume complet</label>
					<input type="text" class="span3" placeholder="Nume complet">
					<label>Adresa Email</label>
					<div class="input-prepend">
						<span class="add-on"><i class="icon-envelope"></i></span><input type="text" id="inputIcon" class="span2" style="width:180px" placeholder="Adresa email">
					</div>
					<label>Telefon</label>
					<input type="text" class="span3" placeholder="Telefon">
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
				<input type="sumbit" name="submit" class="btn btn-primary pull-right" value="Trimite" />
			</form>
gata;
echo $form;
?>
<?php require_once 'includes/footer.php'; ?>