<?php
$txt_txtFName = $_POST['first_name'];
$txt_txtLName = $_POST['last_name'];
$txt_txtEmail = $_POST['email'];
$txt_txtMessage = $_POST['message'];

$mail_to = 'moderncultivator@gmail.com';
$mail_from = $txt_txtEmail;

$subject = "Contact Form";
 
$body_message = 'From: '.$txt_txtFName. " " .$txt_txtLName."\n";
$body_message .= 'E-mail: '.$txt_txtEmail."\n";
$body_message .= 'Message: '.$txt_txtMessage."\n";

$headers = 'From: '.$txt_txtFName. " " .$txt_txtLName ' '.$txt_txtEmail ."\r\n";
$headers .= 'Reply-To: '.$txt_txtEmail."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'thank-you.php';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to moderncultivator@gmail.com');
		window.location = 'fail.html';
	</script>
<?php
}
?>