<?php

$users = array("student" => "test", "marius" => "1234");
$links = array("InfoAcademy" => "http://www.infoacademy.net", "PHP Romania" => "http://phpromania.net/", "PHP.net"=>"http://php.net");
$loginform = <<<geta
<h1>Bine ati venit</h1>
      <p>Serviciu online de rezervari camere hotel.</p>
      <p>Va rugam sa va logati pentru a avea acces la sistem.</p>
      <form class="form-inline" action="$_SERVER[PHP_SELF]" method="post">
        <input type="text" name="user" class="span2" placeholder="Login">
        <input type="password" name="pass" class="span2" placeholder="Password">
        <input type="submit" value="Login" class="btn-primary"/>
      </form>
geta;
$home = "index.php";
?>