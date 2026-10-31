<?php // All PHP script files begin with this line
      // Note: PHP is a server-side script; it will not run on a local computer without special setup.
      // Note: The server must have PHP installed on it in order for this script to work.       
      // Note: This PHP file works with FormDemo.htm, which is found in the same folder.
      //       Download both files, enter your real email address below. Upload both files and test.
      // Note: A single error, such as a missing { or mispelled field means Nothing Will Display!      
      //       Notice the matching braces {} and how lines end with ; which is similar to CSS.
      //       All field names on the form must match exactly the field names shown below.
      // Note: If you add a field to the form, it must be added to Section A and Section B below and match exactly!
      //       I strongly suggest you only add one field a time. Test, then add another field if desired.
      // Thanks to freecontactform.com/html_form.php for much of this code.       
    
if(isset($_POST['email'])) {
    // CHANGE THE TWO LINES BELOW
    $email_to = "vvancle1@student.scf.edu";
    $email_subject = "Online form submission";
       
    function died($error) {
        // your error code can go here. Echo is the Php command to display to screen
        echo "We are very sorry, but there were error(s) found with the form you submitted.";
        echo "These errors appear below.<br><br>";
        echo $error."<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // NOTE - This PHP code worked on GoDaddy's server but did NOT work on the SCF ASP server!!!! 
    // Strings need to be enclosed in quotes, so do not use an apostrophe in a field name.
	
    // SECTION A - assign variables to fields Posted from form      
    $firstname = $_POST['firstname']; // required. (Note in Php - variables start with a $)
    $lastname = $_POST['lastname']; // required
    $address = $_POST['address']; // NOT required
    $city = $_POST['city']; // NOT required
    $state = $_POST['state']; // NOT required
    $zip = $_POST['zip']; // NOT required
    $email_from = $_POST['email']; // required
    $phonenumber = $_POST['phonenumber']; // NOT required


    $python = isset($_POST['python']) ? "Yes" : "No";
    $java = isset($_POST['java']) ? "Yes" : "No";
    $websitecreation = isset($_POST['websitecreation']) ? "Yes" : "No";
    $AI = isset($_POST['AI']) ? "Yes" : "No";
    $contact = isset($_POST['contact']) ? $_POST['contact'] : "None selected";

    $Comments = $_POST['Comments']; // required

    $email_message = "Form details for vvancle1@student.scf.edu below:\n\n"; // the /n simply means New line
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    // SECTION B - prepare email based on variables assigned to fields Posted from form       
    $email_message .= "First Name: ".clean_string($firstname)."\n";
    $email_message .= "Last Name: ".clean_string($lastname)."\n";
    $email_message .= "Address: ".clean_string($address)."\n";
    $email_message .= "City: ".clean_string($city)."\n";
    $email_message .= "State: ".clean_string($state)."\n";
    $email_message .= "ZIP: ".clean_string($zip)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone Number: ".clean_string($phonenumber)."\n";
    $email_message .= "Interest (Python): ".$python."\n";
    $email_message .= "Interest (Java): ".$java."\n";
    $email_message .= "Interest (Website Creation): ".$websitecreation."\n";
    $email_message .= "Interest (AI): ".$AI."\n";
    $email_message .= "Best Time For Contact: ".clean_string($contact)."\n";
    $email_message .= "Comments: ".clean_string($Comments)."\n";
	
    // *** Tap [Ctrl] + [F5] to Force Hard Reload/Refresh if you modify the PHP code.
     
// create email header for recipient showing senders email address as the email from
$headers = 'From: '.$email_from."\r\n". // carriage Return and New line
'Reply-To: '.$email_from."\r\n" .       // . is for Concatenation
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
// @mail($email_copy, $email_subject, $email_message, $headers); 
?>
 
<!-- place your own Contact Sent message or link to a Contact Sent.htm file below -->
<html>
<head>
<meta http-equiv="REFRESH" content="1;url=contactSent.htm">
</head>
<body>
</body>
</html>

<?php
}
die();
?>