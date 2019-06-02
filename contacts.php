<?php
set_include_path(get_include_path() . PATH_SEPARATOR . '/path/to/google-api-php-client/src');
error_reporting(E_ALL|E_STRICT);

if (isset($_GET['langs']))
{
	$langs= $_GET['langs'];
	$expire = time()+60*60*24*30;
	setcookie("langs", $langs, $expire);
} elseif(isset($_COOKIE['langs']))
{
	$langs= $_COOKIE['langs'];
} else {
$langs = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);}
 //echo $langs;
 $expire = time()+60*60*24*30;
 setcookie("langs", $langs, $expire);
 
 // page check for menu
 $contacts= true;
 $dral= false;
 $home= false;
?>

<!doctype html>
<html><head>
<?php 
	require_once 'head.php';
?>
<script src="bower_components/jquery-ui/jquery-ui.js"></script>
<!-- <script src="js/contacts.js"></script> -->
</head>
	<body>
<?php 
	require_once 'header.php';
?>

<?php

function page_text($langs)
{
	global $contacts, $dral, $home;
	if($langs=="it")
	{?>
		<div class="row body" lang="it">
		    <div class="small-9 medium-9 large-9 columns">
		    	<h3>Contatti</h3>
			    <div class="row">
				    <div class="small-12 medium-12 large-12 columns">
							<p>Contatti:<br>cel.&nbsp;3405988960<br><a href="mailto:agnese.camellini@gmail.com">agnese.camellini@gmail.com</a>
							</p>
<!-- 							<a data-reveal-id="phone" data-open="phone" class="small button joy1">Appuntamento Telefonico</a> -->
					</div>
				</div>
			</div>
			<div class="small-3 medium-3 large-3 columns">
		    <?php 
			require_once 'menu.php';?>
	    	</div>
		</div>
						<?php
}
else
{ ?>
			<div class="row body" lang="en">
				<div class="small-9 medium-9 large-9 columns">
				<h3>Contacts</h3>
				    <div class="row">
					    <div class="small-12 medium-12 large-12 columns">
								<p>Contacts:<br>cel.&nbsp;+39 3405988960<br><a href="mailto:agnese.camellini@gmail.com">agnese.camellini@gmail.com</a></p>
<!-- 								<a data-reveal-id="phone" data-open="phone" class="small button joy1">Phone Appointment</a> -->
						</div>
					</div>
				</div>
				<div class="small-3 medium-3 large-3 columns">
			    <?php 
				require_once 'menu.php';?>
		    	</div>
		</div>
		<?php 
}
//require_once 'phone.php';
}
page_text($langs);
require_once 'footer.php';?>
  </body>
  <script>
  	$(document).foundation();
  </script>
</html>
