// Custom.js

$(document).ready(function() { 
	
	$(".beer-toggle").click(function() {
		$("div#beerSignup").slideToggle("slow");
		$("div#overlay2").fadeToggle("slow");
	});
	
	$(".coffee-toggle").click(function() {
		// $("#social-bar").slideToggle("medium");
		$("div#coffeeSignup").slideToggle("slow");
		$("div#overlay2").fadeToggle("slow");
	});
	
	
	// Clear default text for form inputs
	
	$(".menu").click(function() {
		$("#click-menu ul").fadeToggle("slow");
		$(this).toggleClass("active");
	});
	
	var inputs = document.getElementsByTagName("input");
	for (var i = 0; i < inputs.length; i++) {
		if(inputs[i].getAttribute('data-placeholder') != null){
			inputs[i].value = inputs[i].getAttribute('data-placeholder');
		}
		inputs[i].addEventListener('focus', function() {
			if (this.value == this.getAttribute('data-placeholder')) {
			    this.value = '';
	 		 }
		 });
		inputs[i].addEventListener('blur', function() {
			  if (this.value == '') {
		    	  this.value = this.getAttribute('data-placeholder');
	   		  }
		 });
	}
});
