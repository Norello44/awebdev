/* animatore del colore di sfondo dell'header */
counter = 0;
state = 0;
function headeranimstep()
{
	/* calcola colori RGB in base allo stato */
	if (state == 0) {
		/* da 7ff a f7f: cyan->magenta */
		hexR = (127+counter).toString(16);
		hexG = (255-counter).toString(16);
		hexB = (255).toString(16);
	} else if (state == 1) {
		/* da f7f a ff7: magenta->giallo */
		hexR = (255).toString(16);
		hexG = (127+counter).toString(16);
		hexB = (255-counter).toString(16);
	} else if (state == 2) {
		/* da ff7 a 7ff: giallo->cyan */
		hexR = (255-counter).toString(16);
		hexG = (255).toString(16);
		hexB = (127+counter).toString(16);
	}
	/* trasforma in hex i colori */
	if (hexR.length == 1)
		hexR = "0" + hexR;
	if (hexG.length == 1)
		hexG = "0" + hexG;
	if (hexB.length == 1)
		hexB = "0" + hexB;
	/* altera l'elemento */
	elems = document.getElementsByClassName("header");
	for(i=0; i<elems.length; i++){
		elems[i].style.backgroundColor = "#" + hexR + hexG + hexB;
	}
	  
	/* passo di animazione */
	if (counter == 128) {
		/* fine del ciclo di fade: stato successivo */
		state++;
		if (state > 2)
			state = 0;
		counter = 0;
		setTimeout("headeranimstep()", 5000);
	} else {
		/* ciclo di fade */
		counter++;
		setTimeout("headeranimstep()", 5);
	}
}

/* colori linkZZZZZ */

function coloraLinkZ(){
	var colori = ["#418485","#7e3b7d","#777639" ];
	var elems = $("a");
	for(i=0; i< elems.length; i++){
		y= i% colori.length;
		if($(elems[i]).hasClass("button")){

		} else {
			$(elems[i]).attr("style","color:"+colori[y]+";");
		}
	}
}
$(document).ready(function(){
	headeranimstep();
	coloraLinkZ();
	if(!Modernizr.svg) {
	    $('img[src*="svg"]').attr('src', function () {
	    return $(this).attr('src').replace('.svg', '.png');
	  });
	}
});
