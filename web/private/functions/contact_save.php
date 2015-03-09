<?php 

function contact_save($formValues) {
	global $objResponse;
	
	if(!empty($formValues)){
		// Save values to database
		
		// Echo response and close dialog
		$html = <<<HTML
		<div id="thank-you">
			<div id="inner">
				<h1>Thank You!</h1>
				<h4>For Subscribing to our newsletter</h4>
			</div>
			<div id="button-bar">
				<div id="button" class="full">
					<a href="index.html">Go Home</a>
				</div>
			</div>
		</div>
HTML;


		$objResponse->assign('signup','innerHTML','');
		$objResponse->dialog('Coming Right Up!','More information about how caffeine can help you execute all of your brilliant ideas is coming to your inbox soon.','close');
		
	}
	else{
		$objResponse->alert('There was a problem submitting your request. Please try again.');
	}
}
