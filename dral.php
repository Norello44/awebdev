<?php
error_reporting(E_ALL|E_STRICT);
//phpinfo();
//exit(0);
//$langs = locale_get_default();
//echo $langs;
// echo locale_get_default();

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
 $dral= true;
 $home= false;
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
	if($langs=="it")
	{?>
	<div class="row body" lang="it">
	    <div class="small-9 medium-9 large-9 columns">
		    <div class="row">
			    <div class="small-12 medium-12 large-12 columns">
			    	<h3>Dal romanzo alle reti, la scrittura digitale come forma romanzo</h3>
					<p>Il libro &egrave; una breve introduzione filosofica alla strutturazione dei contenuti sui siti web, e in particolare su alcune piattaforme web 
					   molto conosciute, ma non su tutte.</p>
			    </div>
		    </div>
		    <div class="row">
			    <div class="small-12 medium-12 large-12 columns">
			    	<iframe align="right" frameborder="0" scrolling="no" class="th preview" src="https://books.google.it/books?id=r6OCHflQHqEC&lpg=PP1&dq=agnese%20camellini&pg=PP1&output=embed"></iframe>
                    <p>Vengono analizzate le <strong>piattaforme ipertestuali</strong> con le loro radici letterarie, specificamente per quello che riguarda la letteratura non lineare 
					con esempi soprattutto presi da J.L.Borges. Ma gli ipertesti sono classificati in rapporto alla posizione del lettore, discutendo sul fatto che l'interattivit&agrave; 
					trasformi il lettore da "spettatore" della multilinearit&agrave; di un opera, come avveniva nelle opere letterarie, ad "agente" dentro il gioco dell'opera stessa. Gadamer 
					ci aiuta a vedere una differenza fondamentale fra queste due cose.</p>
					<p> In seguito vengono analizzate le scritture digitali come forme di gestione di contenuti, come le <strong>mailing list</strong>, con tutti i pro e i contro che queste 
					forme di collaborazione comportano, come il fenomeno del trolling, oppure l'elaborazione condivisa e dilatata nel tempo dei contenuti, che porta a una maggior 
					completezza nello sviluppo del contenuto stesso. Per questo motivo le mailing list sono piattaforme ancora ampiamente utilizzate per la produzione di materiale 
					universitario e di ricerca collaborativa fra ricercatori. Si tratta infatti di strumenti a basso prezzo ma ad alto rendimento interattivo.</p>
					<p>Si approfondisce anche l'argomento dei <strong>blog</strong>, che uniscono le caratteristiche collaborative della mailing list a uno spazio e una forma molto pi&ugrave; 
					ristretta e schematica. Questo li porta ad essere meno utili per sviluppare contenuti strutturati ma ad esserlo invece di pi&ugrave; per la diffusione di notizie flash 
					(un caso sicuramente lampante &egrave; quello di <a href="http://www.twitter.com">twitter</a>) e molto sintetiche, su alcuni aspetti limitati della realt&agrave;. Allo stesso 
					modo si pu&ograve; considerare la possibilit&agrave; di commentare ai post dei blog, si tratta di un ambito limitato in cui il lettore pu&ograve; interagire con l'opera 
					alle condizioni volute strettamente dall'autore dell'opera stessa.</p>
					<a href="http://books.google.com/books?id=r6OCHflQHqEC&lpg=PP1&dq=agnese%20camellini&pg=PP1#v=onepage&q&f=false">Preview più grande.</a>
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
		    <div class="row">
			    <div class="small-12 medium-12 large-12 columns">
			    	<h3>From novell to network, digital writing as literary form</h3>
					<p>The book is a short philosophical introduction to the structuring of contents for websites, specifically in some well known web platform, but not all of them.</p>
			    </div>
		    </div>
		    <div class="row">
			    <div class="small-12 medium-12 large-12 columns">
			    	<iframe align="right" frameborder="0" scrolling="no" class="th preview" src="https://books.google.it/books?id=r6OCHflQHqEC&lpg=PP1&dq=agnese%20camellini&pg=PP1&output=embed"></iframe>
			    	<p>The <strong>hypertextual platforms</strong> are analysed in their literary roots, in particular in the non linear literature with examples taken from J.L.Borges. But the hypertext are classified in relation to the readers position, discussing on the fact that the interactivity turns the reader from the "spectator" of the multilinearity of the literary work to the "player" of the work itself. Gadamer helps us seeing the difference between those two things.</p>
			    	<p>Besides the book analyses the digital writings as forms of content managing, as in the <strong>mailing list</strong>, with all the consequences that those forms of collaboration bring, as the eventuality of "trolling", or the shared and delayed in time elaboration of contents, which takes with a better completeness in the development of the content itself. For this reason the mailing list are platform still largely used for the production of research material in universities, as they are low cost tools with an high interactive result.</p>
					<p>The book studies in deep even the argument of <strong>blogs</strong>, which add the collaborative characteristics of the mailing list to a form and space very strict and schematic. This makes them let useful to develop structured contents but more useful to spread flash and synthetic news (a famous case is the one of <a href="http://www.twitter.com">twitter</a>), about some limited aspect of reality. Equally you can consider the ability to comments to blogs post, it is a limited section in which the reader can interact with the work under the condition strictly stated by the author of the work.</p>
					<a href="http://books.google.com/books?id=r6OCHflQHqEC&lpg=PP1&dq=agnese%20camellini&pg=PP1#v=onepage&q&f=false">Bigger preview (italian).</a>
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
