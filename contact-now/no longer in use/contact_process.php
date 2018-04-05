<?php

// Gets posted data from the HTML form fields and creates local variables. The items with the ' marks around them are the name values from the fields in the HTML form example above. Note, the first three variables are required for all email messages (as described above).

$user = trim(stripslashes($_POST['name']));

$emailFrom = trim(stripslashes($_POST['email'])); 

$date = ($_POST['date']); 

$tours = trim(stripslashes(implode(" ", $_POST['tours'])));

$comments = trim(stripslashes($_POST['comments']));

$emailTo = "moderncultivator@gmail.com";

$subject = "";

// This section below validates the $EmailFrom (data from the Email From field) 

$validationOK=true;
if ($user=="") $validationOK=false;
if ($emailFrom=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
  exit;
}

// Be sure to edit the $form_data variable to include all the correct variables you created above.
// The str_replace function is used to remove any commas from the username data so it doesn't create extraneous fields in the .csv file.

$myFilePath = "contacts/";
$myFileName = "form-data.csv";
$myPointer = fopen ($myFilePath.$myFileName, "a+");
$form_data = $user . ", " . $emailFrom . ", " . $date . ", "  . $tours . ", " . $comments . "\n"; 
fputs ($myPointer, $form_data);
fclose ($myPointer);


// This section of PHP prepares the email body text. This is the fourth and final required element to compose and send an email message from a server-side script. 

$body  = "";
$body .= "User name: ";
$body .= $user;
$body .= "\n";
$body  = "";
$body .= "User email: ";
$body .= $emailFrom;
$body .= "\n";
$body  = "";
$body .= "Desired travel dates ";
$body .= $date;
$body .= "\n";
$body  = "";
$body .= "Desired travel destinations ";
$body .= $tours;
$body .= "\n";
$body  = "";
$body .= "Additional Comments:  ";
$body .= $comments;
$body .= "\n";


// Instructor Note -- The ".=" means to append to (added to) the previous variable. So there is only one $Body variable, and all the other parts are appended to that one. The "\n" means to place a hard return between these lines in the email message. If the "\n" weren't included, all the items would be run together on one long line.

// This is the sendmail function which send an email message from the server to the email address listed in the $EmailTo variable above.

$success = mail($emailTo, $subject, $body, "From: <$emailFrom>");

// If the page validates and there are no errors in the PHP, this line redirect to ok.html page, which is the "success page" for the form submission.

if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}


?>


