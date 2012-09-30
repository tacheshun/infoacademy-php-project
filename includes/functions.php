<?php

function get_logout() {

	if(isset($_GET['logout'])){
		setcookie(session_name(),"",time()-86400);
		session_destroy();
		echo "Te-ai desconectat.<br />
			<a href='index.php'>Logheaza-te din nou</a>";
		exit;
	}
}

?>
