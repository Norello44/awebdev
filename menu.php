						
						<ul class="menu">
						<?php if($langs=="it" && $home== false){ ?>
							<li><a href="index.php?langs=it">Home</a></li>
						<?php 
						} elseif($langs=="en" && $home==false) { ?>
							<li><a href="index.php?langs=en">Home</a></li>
						<?php }	?>
						<?php  if($langs=="it" && $dral== false){ ?>
							<li><a href="dral.php?langs=it">Pubblicazione</a></li>
							<?php 
						} elseif($langs=="en" && $dral==false) { ?>
							<li><a href="dral.php?langs=en">Publication</a></li>
						<?php }	?>
						<?php  if($langs=="it" && $contacts == false){ ?>
							<li><a href="contacts.php?langs=it">Contatti</a></li>
						<?php 
						} elseif( $langs=="en" && $contacts == false) { ?>
							<li><a href="contacts.php?langs=en">Contacts</a></li>
						<?php }	?>
						</ul>
						<hr >
						<?php if($langs=="it"){ ?>
							<p class="titolomenualtri">
<!--Creative Commons License-->
<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.5/" title="Questo sito è pubblicato sotto licenza Creative Commons"><img alt="Creative Commons License" style="border-width: 0" src="http://i.creativecommons.org/l/by-nc-sa/2.5/88x31.png"></a>
<!--/Creative Commons License-->
<!-- <rdf:RDF xmlns="http://web.resource.org/cc/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#">
	<Work rdf:about="">
		<license rdf:resource="http://creativecommons.org/licenses/by-nc-sa/2.5/" />
	<dc:type rdf:resource="http://purl.org/dc/dcmitype/InteractiveResource" />
	</Work>
	<License rdf:about="http://creativecommons.org/licenses/by-nc-sa/2.5/"><permits rdf:resource="http://web.resource.org/cc/Reproduction"/><permits rdf:resource="http://web.resource.org/cc/Distribution"/><requires rdf:resource="http://web.resource.org/cc/Notice"/><requires rdf:resource="http://web.resource.org/cc/Attribution"/><prohibits rdf:resource="http://web.resource.org/cc/CommercialUse"/><permits rdf:resource="http://web.resource.org/cc/DerivativeWorks"/><requires rdf:resource="http://web.resource.org/cc/ShareAlike"/></License></rdf:RDF> -->
						</p>
						<?php 
						} else { ?>
							<p class="titolomenualtri">
<!--Creative Commons License-->
<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.5/" title="This site is published under Creative Commons License"><img alt="Creative Commons License" style="border-width: 0" src="http://i.creativecommons.org/l/by-nc-sa/2.5/88x31.png"></a>
<!--/Creative Commons License-->
<!-- <rdf:RDF xmlns="http://web.resource.org/cc/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#">
	<Work rdf:about="">
		<license rdf:resource="http://creativecommons.org/licenses/by-nc-sa/2.5/" />
	<dc:type rdf:resource="http://purl.org/dc/dcmitype/InteractiveResource" />
	</Work>
	<License rdf:about="http://creativecommons.org/licenses/by-nc-sa/2.5/"><permits rdf:resource="http://web.resource.org/cc/Reproduction"/><permits rdf:resource="http://web.resource.org/cc/Distribution"/><requires rdf:resource="http://web.resource.org/cc/Notice"/><requires rdf:resource="http://web.resource.org/cc/Attribution"/><prohibits rdf:resource="http://web.resource.org/cc/CommercialUse"/><permits rdf:resource="http://web.resource.org/cc/DerivativeWorks"/><requires rdf:resource="http://web.resource.org/cc/ShareAlike"/></License></rdf:RDF> -->
						</p>
						<?php }	?>
						<hr >
						<p class="titolomenualtri"><div class="cf">P.IVA IT03654750367<br>tel.3405988960<br><a href="mailto:agnese.camellini@gmail.com">agnese.camellini@gmail.com</a></div></p>
