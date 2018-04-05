<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'tresa@tresahorney.com';

	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "This is the form that was just submitted:
			Name:  $_POST[name]
			E-Mail: $_POST[email]
			Subject: $_POST[subject]
			Message: $_POST[message]";

	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	// finally, send the message
	mail($youremail, 'Contact Form', $body, $headers );

	 if($_POST["message"] == "" || $_POST["name"] == "" || $_POST["email"] =="" || $_POST["subject"] ==""){
        echo "<p>Please press the back button and fill in all fields</p>";
    } else {
        // then send the form to your email
        mail( 'you@yoursite.com', 'Contact Form', print_r($_POST,true) );
        
header('Location: http://www.tresahorney.com/thankyou.php');
exit('Redirecting you to http://www.tresahorney.com/thankyou.php');
    }

}

// otherwise, let the spammer think that they got their message through


?>
 