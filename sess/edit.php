<?php

// questo risponde al form di modifica e creazione di rr

session_start();

include "smdnsif_auth.php";
include "func.php";

if (isset($_SESSION['logged']) && isset($_SESSION['username']) && isset($_POST['rr'])) {
	if ($_SESSION['logged'] == 'yes') {
		// piglia i dati del form
		$rr = $_POST['rr'];
		$type = strtoupper($_POST['type']);
		$rdata = $_POST['rdata'];
		$pri = $_POST['pri'];
		$label = $_POST['label'];
		$status = $_POST['status'];

		// connessione db
		$sock = mysql_connect($sql_host, $sql_user, $sql_passwd);
		mysql_select_db($sql_db);
		$tab = "db_" . str_replace(".", "_", dom($rr));
		// verifica permessi e validita' dati
		if (perm($rr, $_SESSION['username'], "perm", $sock)) {
			$var = valido($rr, $type, $rdata, $pri, $label, $status);
			if ($var) {
				$rr_esc = mysql_real_escape_string($rr, $sock);
				$label_esc = mysql_real_escape_string($label, $sock);
				$rez = mysql_fetch_row(mysql_query("SELECT COUNT(*) AS count FROM $tab WHERE rr = '$rr_esc' AND type = 'CNAME'", $sock));
				$rlab = mysql_fetch_row(mysql_query("SELECT COUNT(*) AS count FROM $tab WHERE rr = '$rr_esc' AND label = '$label_esc'", $sock));
				$act = $_POST['act'];
				if (($act == 'update' AND $rlab[0] > 1) xor ($act == 'add' AND $rlab[0] > 0))
					$label .= "-" . randcha();
				$modtime = time();

				$type_esc = mysql_real_escape_string($type, $sock);
				$rdata_esc = mysql_real_escape_string($rdata, $sock);
				$pri_esc = mysql_real_escape_string($pri, $sock);
				$status_esc = mysql_real_escape_string($status, $sock);
				// da vedere
				if ($act == 'add' AND $rez[0] < 1) {
					$query = "INSERT INTO `$tab` (rr, type, rdata, pri, label, status, modified) VALUES ('$rr_esc', '$type_esc', '$rdata_esc', '$pri_esc', '$label_esc', '$status_esc', '$modtime')";
				} else if ($act == 'update') {
					$orr = mysql_real_escape_string($_POST['orr'], $sock);
					$olabel = mysql_real_escape_string($_POST['olabel'], $sock);
					$query = "UPDATE `$tab` SET rr = '$rr_esc', type = '$type_esc', rdata = '$rdata_esc', pri = '$pri_esc', label = '$label_esc', status = '$status_esc', modified = '$modtime' WHERE rr = '$orr' AND label = '$olabel'";
				}
				mysql_query($query, $sock);
				revup($rr, $sock);
				// TODO verifica successo
				$_SESSION['error'] = 0;
			} else {
				$_SESSION['error'] = 22;	// EINVAL
			}
		} else {
			$_SESSION['error'] = 1;	// EPERM
		}
		header("location: list.php");
	}
}

?>

