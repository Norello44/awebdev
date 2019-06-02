<?php
//error_reporting(E_ALL|E_STRICT);
//phpinfo();
//exit(0);
$langs = locale_get_default();
// echo locale_get_default();

if (isset($_GET['langs']))
{
	$langs= $_GET['langs'];
} else
{
	$langs= locale_get_primary_language($langs);
}
// echo $langs;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv='content-type' content='text/html;charset=utf-8'/>
<meta http-equiv="content-lang" content="en, it"/>
<meta name="description" content="Home page of Joy in Indivia"/>
<meta name="keywords" content="Information architecture, portfolio, agnese camellini"/>
<title>--- ::: joy.indivia.net ::: ---</title>
<link rel='stylesheet' type='text/css' href='css/global.css'/>
<link rel='stylesheet' type='text/css' href='css/indivia.css'/>
<script type="text/javascript" src="/js/colorheader.js"></script>
<link rel="shortcut icon" type="image/png" href="icon.png"/>
</head>
	<body onload="headeranimstep()">
		<div class="boxinterna">


<?php

function page_text($langs)
{
	if($langs=="it")
	{?>
			<a href="index.php"><img id="header" src="img/header.png" alt="Indivia.net: server vegetale a foglia lunga verde chiaro" class="header"/></a>
			<div class="corpo">
				<div class="corner2">
				<div class="corner3">
					<div class="corner4">
					<div class="testo" lang="it" xml:lang="it">

						<ul class='langsel'>
							<li class='it'><a hreflang="it" href='index.php?langs=it'>it</a></li>
							<li><a hreflang="en" href='index.php?langs=en'>en</a></li>
						</ul>

						<h1>Home Joy</h1>
						<p>Questa home ha carattere di servizio. Vi troverete cio&eacute; informazioni a proposito di:</p>
							<div class="figure"> <img class="figure" src="img/logojoy.png" alt="Logo Joy.indivia.net"/>
								<p>Immagine di Joy</p>
							</div>
						<ul>
							<li> una <a href="dral.php?langs=it">pubblicazione</a> ("<em>Dal romanzo alle reti, la scrittura digitale come forma romanzo</em>", Aracne Editrice, Roma, 2007) che parla di architettura dell'informazione dal punto di vista delle scienze umane. Questo libro studia i blog e i siti web come se fossero testi letterari, misurando la fruizione dell'utente come se fosse un semplice lettore;</li>
							<li>La <a href="py/index.php">Python Speculative Interface</a>,  il mio primo software web, che vuole essere un esempio di connessioni fra uno script cgi (vecchio tipo di applicazione web) e la API di una <a href="www.mediawiki.org">mediawiki</a> (il CMS usato da <a href="www.wikipedia.org">wikipedia.org</a> per la revisione dei suoi articoli).</li>
						</ul>
						<p>Questa pagina non contiene servizi web, se siete alla ricerca di questi servizi di indivia potete utilizzare i link nel men&ugrave; di destra oppure contattare gli admin tramite  <a href="gestione#posta.indivia.net">mail</a> o accedere al canale <a href="http://www.indivia.net/serv_chat.php">irc</a> di indivia.</p>
						</div>

						<div class="menulato">
						<p class="titolomenu">Che cos’&egrave;?</p>

						<ul class="menu">
							<li><a href="http://www.indivia.net/cosa_voc.php">Sul vocabolario</a></li>
							<li><a href="http://www.indivia.net/cosa_cucina.php">In cucina</a></li>
							<li><a href="http://www.indivia.net/cosa_computer.php">Sul computer</a></li>
						</ul>

						<p class="titolomenu">Cosa ti offre?</p>
						<ul class="menu">
							<li><a href="http://www.indivia.net/serv_ml.php">Mailing list</a></li>

							<li><a href="http://www.indivia.net/serv_stream.php">Streaming audio</a></li>
							<li><a href="http://www.indivia.net/serv_web.php">Spazio web</a></li>
							<li><a href="http://www.indivia.net/serv_chat.php"><span class="acronimo">Irc</span> chat</a></li>
							<li><a href="http://www.indivia.net/serv_email.php">E-mail</a></li>
							<li><a href="http://apteryx.indivia.net">Alias email 24 ore</a></li>

							<li>Forum</li>
							<li><a href="https://smdns.indivia.net"><span class="acronimo">Dns</span> dinamici</a></li>
							<li><a href="http://rss.contaminati.net">Aggregatore <span class="acronimo">rss</span></a></li>
							<li><a href="http://www.indivia.net/serv_svn.php">Rep. Subversion</a></li>

						</ul>

						<p class="titolomenu">Come si fa?</p>
						<ul class="menu">
							<li><a href="http://www.indivia.net/faq_howto.php"><span class="acronimo">Faq</span> &amp; howto</a></li>
							<li><a href="http://www.indivia.net/ca.php">Certificati</a></li>
						</ul>
						<p class="titolomenu">Promozione</p>
						<ul class="menu">
							<li><a href="http://www.indivia.net/promo.php">Promozione</a></li>

						</ul>

						<hr />
						<p class="titolomenualtri">Altri progetti</p>
						<ul class="menualtri">
							<li><a href="http://www.autistici.org">Autistici</a></li>
						    <li><a href="http://www.inventati.org">Inventati</a></li>
							<li><a href="http://www.ecn.org"><span class="acronimo">Ecn</span></a></li>
							<li><a href="http://www.ngvision.org">Ngvision</a></li>

							<li><a href="http://italy.indymedia.org">Indymedia</a></li>
							<li><a href="http://www.incal.net">Incal:net</a></li>
							<li><a href="http://www.teppismo.org">Teppismo</a></li>
							<li><a href="http://www.kyuzz.org">Kyuzz</a></li>
							<li><a href="http://www.oziosi.org">Oziosi</a></li>
							<li><a href="http://www.tmcrew.org">Tmcrew</a></li>

						</ul>

						<hr />
						<p class="titolomenualtri">
<!--Creative Commons License-->
<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.5/" title="Questo sito è pubblicato sotto licenza Creative Commons"><img alt="Creative Commons License" style="border-width: 0" src="http://i.creativecommons.org/l/by-nc-sa/2.5/88x31.png"/></a>
<!--/Creative Commons License-->
<!-- <rdf:RDF xmlns="http://web.resource.org/cc/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#">
	<Work rdf:about="">
		<license rdf:resource="http://creativecommons.org/licenses/by-nc-sa/2.5/" />
	<dc:type rdf:resource="http://purl.org/dc/dcmitype/InteractiveResource" />
	</Work>
	<License rdf:about="http://creativecommons.org/licenses/by-nc-sa/2.5/"><permits rdf:resource="http://web.resource.org/cc/Reproduction"/><permits rdf:resource="http://web.resource.org/cc/Distribution"/><requires rdf:resource="http://web.resource.org/cc/Notice"/><requires rdf:resource="http://web.resource.org/cc/Attribution"/><prohibits rdf:resource="http://web.resource.org/cc/CommercialUse"/><permits rdf:resource="http://web.resource.org/cc/DerivativeWorks"/><requires rdf:resource="http://web.resource.org/cc/ShareAlike"/></License></rdf:RDF> -->
						</p>

						<hr />
						<p class="titolomenualtri">
						</div><?php
}
else
{ ?>
			<a href="index.php"><img id="header" src="img/header.png" alt="Indivia.net: vegetal server with long lightgreen leaf" class="header" /></a>
			<div class="corpo" lang="en" xml:lang="en">
				<div class="corner2">
				<div class="corner3">
					<div class="corner4">
						<div class="testo" lang="en" xml:lang="en">

							<ul class='langsel'>
								<li><a href='index.php?langs=it' hreflang="it">it</a></li>
								<li class='it'><a href='index.php?langs=en' hreflang="en">en</a></li>
							</ul>
							<h1>Home Joy</h1>
							<p>This home page is a reference where you can find information about: </p>
							<div class="figure">
								<img class="figure" src="img/logojoy.png" alt="Logo Joy.indivia.net"/>
								<p>Image by Joy</p>
							</div>
							<ul>
								<li> A <a href="dral.php?langs=en">publication</a> (<i>From novel to network, digital writing as literary form</i>, Aracne editrice, Roma 2007) speaking about Information Architecture in a different manner (from the point of view of Humanities and literature). This book is studying blogs and websites as if they were literary text, measuring the fruition of the user as if she was the reader of a book;</li>
								<li>The <a href="http://joy.indivia.net/py/index.php">Python Speculative Interface</a>, my first online project, which is intended to be a example of an hybrid connection between a cgi script (old fashion web application), and the API of a <a href="www.mediawiki.org">mediawiki</a> (The CMS used by <a href="www.wikipedia.org">wikipedia.org</a> to review the articles).</li>
							</ul>
							<p>this page doesn't contain web services, and if you are searching for the services of iNDivia you can either use the links on the right menu, or contact admins by <a href="mailto:gestione@posta.indivia.net">mail</a>, following their guidelines of NetiQuette.</p>
						</div>
						<div class="menulato">
							<p class="titolomenu">What is it?</p>

							<ul class="menu">
								<li><a href="http://www.indivia.net/cosa_voc.php">In dictionary</a></li>
								<li><a href="http://www.indivia.net/cosa_cucina.php">In the kitchen</a></li>
								<li><a href="http://www.indivia.net/cosa_computer.php">In Computers</a></li>
							</ul>

							<p class="titolomenu">Which services does it give?</p>
							<ul class="menu">
								<li><a href="http://www.indivia.net/serv_ml.php">Mailing list</a></li>

								<li><a href="http://www.indivia.net/serv_stream.php">Streaming audio</a></li>
								<li><a href="http://www.indivia.net/serv_web.php">Web Space</a></li>
								<li><a href="http://www.indivia.net/serv_chat.php"><span class="acronimo">Irc</span> chat</a></li>
								<li><a href="http://www.indivia.net/serv_email.php">E-mail</a></li>
								<li><a href="http://apteryx.indivia.net">Alias email 24 hours</a></li>

								<li>Forum</li>
								<li><a href="https://smdns.indivia.net"> Dynamic <span class="acronimo">Dns</span>.</a></li>
								<li><a href="http://rss.contaminati.net">Aggregator <span class="acronimo">rss</span></a></li>
								<li><a href="http://www.indivia.net/serv_svn.php">Rep. Subversion</a></li>

							</ul>

							<p class="titolomenu">How does it work?</p>
							<ul class="menu">
								<li><a href="http://www.indivia.net/faq_howto.php"><span class="acronimo">Faq</span> &amp; howto</a></li>
								<li><a href="http://www.indivia.net/ca.php">Certificates</a></li>
							</ul>
							<p class="titolomenu">Promotion</p>
							<ul class="menu">
								<li><a href="http://www.indivia.net/promo.php">Promotion</a></li>

							</ul>

							<hr/>
							<p class="titolomenualtri">Other Projects</p>
							<ul class="menualtri">
								<li><a href="http://www.autistici.org">Autistici</a></li>
							    <li><a href="http://www.inventati.org">Inventati</a></li>
								<li><a href="http://www.ecn.org"><span class="acronimo">Ecn</span></a></li>
								<li><a href="http://www.ngvision.org">Ngvision</a></li>

								<li><a href="http://italy.indymedia.org">Indymedia</a></li>
								<li><a href="http://www.incal.net">Incal:net</a></li>
								<li><a href="http://www.teppismo.org">Teppismo</a></li>
								<li><a href="http://www.kyuzz.org">Kyuzz</a></li>
								<li><a href="http://www.oziosi.org">Oziosi</a></li>
								<li><a href="http://www.tmcrew.org">Tmcrew</a></li>

							</ul>

							<hr/>
							<p class="titolomenualtri">
	<!--Creative Commons License-->
	<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.5/" title="Questo sito &egrave; pubblicato sotto licenza Creative Commons"><img alt="Creative Commons License" style="border-width: 0" src="http://i.creativecommons.org/l/by-nc-sa/2.5/88x31.png"/></a>
	<!--/Creative Commons License-->
	<!-- <rdf:RDF xmlns="http://web.resource.org/cc/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#">
	<Work rdf:about="">
		<license rdf:resource="http://creativecommons.org/licenses/by-nc-sa/2.5/" />
	<dc:type rdf:resource="http://purl.org/dc/dcmitype/InteractiveResource" />
	</Work>
	<License rdf:about="http://creativecommons.org/licenses/by-nc-sa/2.5/"><permits rdf:resource="http://web.resource.org/cc/Reproduction"/><permits rdf:resource="http://web.resource.org/cc/Distribution"/><requires rdf:resource="http://web.resource.org/cc/Notice"/><requires rdf:resource="http://web.resource.org/cc/Attribution"/><prohibits rdf:resource="http://web.resource.org/cc/CommercialUse"/><permits rdf:resource="http://web.resource.org/cc/DerivativeWorks"/><requires rdf:resource="http://web.resource.org/cc/ShareAlike"/></License></rdf:RDF> -->
							</p>

							<hr/>
						</div><?php 
}

}

page_text($langs); ?>
						<div style="clear:both"></div>

					</div>
				</div>
				</div>
			</div>
		</div>
	</body>
</html>
