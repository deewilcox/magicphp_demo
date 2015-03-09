<?php

function contact_form(){
	global $objResponse;
	
	$html = <<<HTML
	<form id="coffee" name="coffee" action="/" method="POST">
		<div id="signup-inner">
			<input class="name text" name="first-name" type="text" placeholder="First Name"/>
			<input class="name text" name="last-name" type="text" placeholder="Last Name"/>
			<input class="email text" name="email" type="text" placeholder="Email Address"/>
		</div>
		<input type="submit" class="submit" value="Americano, please"/>
	</form>
HTML;
	
	$objResponse->assign('signup','innerHTML',$html);
	
}
