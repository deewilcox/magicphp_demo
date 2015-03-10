<?php 

function contact_save($formValues) {
	global $magicResponse;
	
	if(!empty($formValues)){		
		$dialogHTML = <<<HTML
		<div id="thank-you">
			<div id="inner">
				<h1>You're Right!</h1>
				<h4>Check Your Inbox to Find Out Why</h4>
			</div>
			<div id="button-bar">
				<div id="button" class="full">
					<a href="/">Go Home</a>
				</div>
			</div>
		</div>
HTML;

		$subject = "You're Right! Coffee is Better than Beer... for Making Great Ideas Happen";
		$first = $formValues['coffeeFirstName'] ;  
		$last = $formValues['coffeeLastName'] ;  	     
		$email = $formValues['coffeeEmail'] ;  
		
		$headers = 'From: dee.wilcox@mac.com' . "\r\n" ;
		$headers .= 'Reply-To: dee.wilcox@mac.com' . "\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		$message = <<<HTML
			<p>You guessed it! Coffee is better than beer... for making great ideas happen. The next time you've got a great idea and need to see it through to completion, brew a pour over or head to your favorite coffee shop for an espresso.</p>
			
			<p>Check out this great illustration from ilovecoffee.jp:<br>
			<a href="http://en.ilovecoffee.jp/posts/view/79">Your Brain on Beer vs Coffee </a></p>
			
			<p>More of a research person? Get the details here: <br>
			<a href="https://medium.com/@mikaelcho/coffee-vs-beer-which-drink-makes-you-more-creative-f7fcb3b786b1">Coffee vs. beer: which drink makes you more creative?</a></p>
			<p>Cheers!<br>
			Dee<br><br>
			<a href="https://twitter.com/dee_wilcox">@dee_wilcox</a></p>
HTML;
		
		$sent = mail($email, $subject, $message, $headers);  
		
		if($sent)  {
			$magicResponse->assign('coffeeSignup',$dialogHTML);
		} 
		else  {
			$magicResponse->alert('There was a problem submitting your request. Please try again.');
		}
	}
	else{
		$magicResponse->alert('There was a problem submitting your request. Please try again.');
	}
}
