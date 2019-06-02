$(document).ready(function() {
	$("#phone2-button").click(function(e){
		//validazione email
		r = $("#email").attr("pattern");
		patt = new RegExp(r);
		//validazione numero di telefono
		p = $("#phone-number").attr("pattern");
		pattp = new RegExp(p);
		validazione = patt.test($("#email").val()) && pattp.test($("#phone-number").val());
		if(validazione==false){
			$(".error.phone2").attr("style", "display:block");
			e.stopPropagation();
			e.preventDefault();
		}
	});
	$("#caledar_registration").click(function(e){
		validazione = $("#time").val()!="";
		if(validazione==false){
			$(".error.phone2").attr("style", "display:block");
			e.stopPropagation();
			e.preventDefault();
		} else {
			$.ajax({
				
			}).done(function(){
				
			});
		}
	})
	$('.close-reveal-modal').click(function(e){
		$("#email").val("");
		$("#phone-number").val("");
		$("#time").val("");
		$(".error.phone2").attr("style", "display:none");
	})
});
