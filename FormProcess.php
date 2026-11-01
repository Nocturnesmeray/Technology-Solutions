<?php
if(isset($_POST["email"])) {
    $email_to = "vvancle1@student.scf.edu";
    $email_subject = "Online form submission";
       
    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted.";
        echo "These errors appear below.<br><br>";
        echo $error."<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }
    
    // SECTION A - assign variables
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $email_from = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];

    $python = isset($_POST["python"]) ? "Yes" : "No";
    $java = isset($_POST["java"]) ? "Yes" : "No";
    $websitecreation = isset($_POST["websitecreation"]) ? "Yes" : "No";
    $AI = isset($_POST["AI"]) ? "Yes" : "No";
    $contact = isset($_POST["contact"]) ? $_POST["contact"] : "None selected";

    $Comments = $_POST["Comments"];


    $email_message = "Form details for vvancle1@student.scf.edu below:\n\n"; 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    // SECTION B - prepare email        
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
    
    $headers = "From: ".$email_from."\r\n".
    "Reply-To: ".$email_from."\r\n" .       
    "X-Mailer: PHP/" . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>
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