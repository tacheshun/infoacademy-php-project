<?php

$users = array("student" => "test", "marius" => "1234");

$preturicamere=array("single" => 100, "double" => 140);

$links = array("InfoAcademy" => "http://www.infoacademy.net", "PHP Romania" => "http://phpromania.net/", "PHP.net"=>"http://php.net");

$loginform = <<<loginform
<h1>Bine ati venit</h1>
      <p>Serviciu online de rezervari camere hotel.</p>
      <p>Va rugam sa va logati pentru a avea acces la sistem.</p>
      <form class="form-inline" action="$_SERVER[PHP_SELF]" method="post">
        <input type="text" name="user" class="span2" placeholder="Login">
        <input type="password" name="pass" class="span2" placeholder="Password">
        <input type="submit" value="Login" class="btn-primary"/>
      </form>
loginform;

$reserva_form = <<<rezervaform
		<h1>Rezerva o camera</h1>
		<form class="well form-inline" action="multumim.php" method="post">
    <label>Tipul camerei *
         <select class="span2" name="tipcamera">
            <option name="single">Single</option>
            <option name="double">Double</option>
        </select>
      </label>
        <br>
        <label>Numar de nopti *
        <input type="text" name="numarnopti" class="span2" placeholder="Numar de nopti"> 
        </label>
        <br>
         <label>Modalitatea de plata *
        <select class="span2" name="modalitateplata">
        	<option name="tot">Tot Odata</option>
        	<option name="rate">Rate</option>
        </select>
        </label>
        <br>
        <label>Numar de rate
        <input type="text" name="numarrate" placeholder="Specificati numar de rate"><br>
        </label>
        <br>
        <input type="submit" value="Trimite date" class="btn btn-primary"/>
        <input type="reset" value="Sterge date" class="btn"/>
      </form>
    <div class='alert alert-error'> Atentie! Campurile marcate cu (*) sunt obligatorii</div>
rezervaform;

?>