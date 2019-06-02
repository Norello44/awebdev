<?php
error_reporting(E_ALL|E_STRICT);

if (isset($_GET['langs']))
{
	$langs= $_GET['langs'];
	$expire = time()+60*60*24*30;
	setcookie("langs", $langs, $expire);
} elseif(isset($_COOKIE['langs']))
{
	$langs= $_COOKIE['langs'];
} elseif(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) 
{
//echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$langs = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
} 
 //echo $langs;
 $expire = time()+60*60*24*30;
 setcookie("langs", $langs, $expire);
 
 // page check for menu
 $contacts= false;
 $dral= false;
 $home= true;
?>

<!doctype html>
<html><head>
<?php 
	require_once 'head.php';
?>
</head>
	<body>
<?php 
	require_once 'header.php';
?>
<?php

function page_text($langs)
{
	global $contacts, $dral, $home;
	if($langs=="en")
	{?>
	<div class="row body" lang="en">
	    <div class="small-9 medium-9 large-9 columns">
		    <div class="row">
			    <div class="small-12 medium-12 large-12 columns">
			    	<h3>Open Source Assistance and Web Development</h3>
					<p>Do you need help with you Linux Box and you don’t know who to ask (besides Google)? Do you have a revolutionary web project which you don’t know how to realize to stay on time with the new technologies and make a wonderful show online? We are here to help!</p>

<p>We have a long experience in web development, experience that you can find in the projects mentioned in this website: A publication about writing and the web, a diff tool that is freely available here to make the diff of your files, everything done in Javascript to not overload the small server this website is on, but fully functional. Besides you will find a Wordpress website, Astrosexy.net, which lists some erotic horoscopes, to reflect and think about your sentimental life with some psychological advice and some though about the respect between genders. Astrosexy is inspired by the Tango, and has a latino approach to relationship and love! All the website are free and accessible. You can find my Linkedin profile <a href="https://www.linkedin.com/in/agnese-camellini-15463825/">in this page</a>. </p></div>
		    </div>
		    <div class="row">
			    <div class="small-12 medium-4 large-4 columns">
			    	<a href="dral.php?langs=en"><img class="blogimage th" src="img/dral.png" alt="frontpage book"></a>
			    </div>
			    <div class="small-12 medium-8 large-8 columns">
			    	 <p>A <a href="dral.php?langs=en">publication</a> (<i>From novel to network, digital writing as literary 
			    	 form</i>, Aracne editrice, Roma 2007) speaking about Information Architecture in a different manner 
			    	 (from the point of view of Humanities and literature). This book is studying blogs and websites as if 
			    	 they were literary text, measuring the fruition of the user as if she was the reader of a book;</p>
				</div>
		    </div>
		    <div class="row">
			    <div class="small-12 medium-4 large-4 columns">
			    	<a href="mooDiff/index.html"><img class="blogimage th" src="img/MooDiff.png" alt="MooDiff screenshot"></a>
			    </div>
			    <div class="small-12 medium-8 large-8 columns">
					<p>The <a href="http://mootools.net/">MooTools</a> <a href="mooDiff/index.html">diff extension</a>, a javascript extension of a famous 
					javascript framework which uses javascript Object Oriented Prototyping as if it was classes based. I've made it easy to customize and the code is freely available in this mercurial <a href="http://bitbucket.org/agnese_camellini/moodiff">repo</a> (any further contribution is welcome).</p>
				</div>
		    </div>
		    <br/>
			<div class="row">
			    <div class="small-12 medium-4 large-4 columns">
			    	<a href="www.astrosexy.net"><img class="blogimage th" src="img/astrosexy_indivia.png" alt="Astrosexy screenshot"></a>
			    </div>
			    <div class="small-12 medium-8 large-8 columns">
					<p><a href="www.astrosexy.net">Astrosexy.net</a>, a new website of erotic horoscopes inspired by Tango and latino culture made to deepen your understanding of love and relationships. Look at our love tips and their consequences on your everyday life. It will be an occasion of elaborate psychologically your personal life. </p>
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
		<div class="row body" lang="it">
	    <div class="small-9 medium-9 large-9 columns">
		    <div class="row">
			    <div class="small-12 medium-12 large-12 columns">
			    	<h3>Assistenza Open Source e Web Development</h3>
					<p>Hai bisogno di aiuto con la tua macchina Linux? Hai un nuovo progetto web che non sai come realizzare per restare al passo coi tempi e fare una buona figura online? Siamo qui per aiutarti! Abbiamo una lunga storia di web development, di cui troverai alcuni riferimenti generali nel sito, come la pubblicazione sulle scritture online del 2007; Moodiff, un software per aiutarti a fare le diff dei tuoi file liberamente utilizzabile da questa interfaccia web, tutto scritto in Javascript. In pi&ugrave; troverai un progetto Wordpress, sviluppato nel 2018, con degli oroscopi erotici in inglese. Sono tutti progetti open source e gratuiti. Con libero accesso. Puoi trovare il mio profilo Linkedin a <a href="https://www.linkedin.com/in/agnese-camellini-15463825/">questo indirizzo</a>.</p>
				</div>
		    </div>
		    <div class="row">
			    <div class="small-12 medium-4 large-4 columns">
			    	<a href="dral.php?langs=it"><img class="blogimage th" src="img/dral.png" alt="copertina libro"></a>
			    </div>
			    <div class="small-12 medium-8 large-8 columns">
					<p>Una <a href="dral.php?langs=it">pubblicazione</a> ("<em>Dal romanzo alle reti, la scrittura digitale 
					come forma romanzo</em>", Aracne Editrice, Roma, 2007) che parla di architettura dell'informazione dal 
					punto di vista delle scienze umane. Questo libro studia i blog e i siti web come se fossero testi letterari, 
					misurando la fruizione dell'utente come se fosse un semplice lettore;</p>
				</div>
		    </div>
		    <div class="row">
			    <div class="small-12 medium-4 large-4 columns">
			    	<a href="mooDiff/index.html"><img class="blogimage th" src="img/MooDiff.png" alt="MooDiff screenshot"></a>
			    </div>
			    <div class="small-12 medium-8 large-8 columns">
					<p>La <a href="mooDiff/index.html">diff extension</a> di <a href="http://mootools.net/">MooTools</a>, un plug-in del famoso 
					framework javascript che usa la prototipazione tipica del paradigma object oriented di questo linguaggio front end come se fosse
					basata su classi. Questo plug-in &egrave; liberamente scaricabile da questo <a href="http://bitbucket.org/agnese_camellini/moodiff">repo</a> mercurial (tutti i contributi sono i benvenuti).</p>
				</div>
		    </div><br/>
			<div class="row">
			    <div class="small-12 medium-4 large-4 columns">
			    	<a href="www.astrosexy.net"><img class="blogimage th" src="img/astrosexy_indivia.png" alt="Astrosexy screenshot"></a>
			    </div>
			    <div class="small-12 medium-8 large-8 columns">
					<p><a href="www.astrosexy.net">Astrosexy</a> un nuovo sito di oroscopi erotici ispirato al tango e alla passione latina! Non ti lasciare sfuggire i nostri consigli amorosi e le loro conseguenze sulla tua vita di tutti i giorni. Sar&agrave; un’occasione di riflessione psicologica e autoapprofondimento di temi personali.</p>
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
}
page_text($langs); 
require_once 'footer.php';
?>
  </body>
</html>
