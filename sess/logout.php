<?php

// chiamato dal tasto logout

session_start();

if (isset($_SESSION['logged']) && isset($_SESSION['username'])) {
	if ($_SESSION['logged'] == 'yes') {
		// chiudi la sessione
		session_unset();
		$_SESSION = array();
		session_destroy();
		// ricarica con la pagina di login
		header("location: index.php");
		exit;
	}
}

?>

