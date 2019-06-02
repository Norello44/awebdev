<?php

// questo risponde al form di login

$lung = explode(",", strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]));
if (strstr($lung[0], "es")) {
    include "smdnsif_lang_es.php";
} else {
    include "smdnsif_lang_it.php";
}
global $lang;

include "smdnsif_auth.php";
include "func.php";

// controlla che lo script sia usato nel modo giusto
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
} else {
	//report_bad_login();
	header("location: index.php");
	exit;
}

// controlla validita' dei dati
if (checkid($username, $password, NULL, "auth")) {
	// login valido
	session_start();
	$_SESSION['logged'] = "yes";
	$_SESSION['username'] = $username;
	$_SESSION['error'] = 0;
	$_SESSION['visible'] = array();
	$_SESSION['visible'][] = "rr";
	$_SESSION['visible'][] = "type";
	$_SESSION['visible'][] = "rdata";
	$_SESSION['visible'][] = "label";
	// ricarica come list
	header("location: list.php");
	exit;
} else {
	// morte e male per lui
	//report_bad_login();
	header("location: index.php");
	exit;
}

/*function report_bad_login()
{
	$out = html_prologue("Login non valido");
	$out .= "<h1>Login non valido</h1>";
	$out .= "<p>Ritenta, sarai pi&ugrave; fortunato!</p>";
	$out .= html_epilogue();
	echo $out;
}*/

?>

