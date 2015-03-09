// Custom countdown clock and theme functions

// Initialise Countdown Script
// Change Countdown Date Below

$(document).ready(function() { 
	// Change Launch Date Here in the following format YYYY/MM/DD
		$('#clock').countdown('2015/03/10', function(event) {
			// Below you can change the text that is shown to the user
			// Tags such as %Y for years, %D (days), %H (hours), %M (minutes) and %S (seconds) can be used
		$(this).html(event.strftime('%D days Left'));
	});
	$(".signup-toggle").click(function() {
		$("div#signup").slideToggle("slow");
		$("div#overlay2").fadeToggle("slow");
	});
	$(".social-toggle").click(function() {
		$("#social-bar").slideToggle("medium");
	});
	
	
	// Do NOT change any code from here on in
	
	$(".menu").click(function() {
		$("#click-menu ul").fadeToggle("slow");
		$(this).toggleClass("active");
	});
	var inputs = document.getElementsByTagName("input");
	for (var i = 0; i < inputs.length; i++) {
		inputs[i].value = inputs[i].getAttribute('data-placeholder');
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

// Custom Magic PHP functions

