<?php  $to = "yourmail@mail.com";
	   $subject = "Title of Email";
	   $first = $_REQUEST['first-name'] ;  
	   $last = $_REQUEST['last-name'] ;  	     
	   $email = $_REQUEST['email'] ;  
	   $headers = "First Name: $first, Last Name: $last, Email: $email";  
	   $sent = mail($to, $subject, $headers);  
	   if($sent)  {
	   		header('Location: thank_you.html');
	   	} else  {
	   		header('Location: error.html');
		} 
?>