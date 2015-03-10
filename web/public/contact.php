<?php  

$subject = "You're Right! Beer is Better than Coffee... for Creativity";
$first = $_REQUEST['beerFirstName'] ;  
$last = $_REQUEST['beerLastName'] ;  	     
$email = $_REQUEST['beerEmail'] ;  

$headers = 'From: dee.wilcox@mac.com' . "\r\n" ;
$headers .= 'Reply-To: dee.wilcox@mac.com' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message = <<<HTML
	<p>Who would have thought? Beer is better than coffee for facilitating creative ideas and brainstorming. Next time you need a creative burst, grab an IPA instead of an Americano.</p>
	
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
	header('Location: thank_you.html');
} 
else  {
	header('Location: error.html');
} 

?>