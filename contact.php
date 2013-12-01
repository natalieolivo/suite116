<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// get posted data into local variables
//$EmailFrom = Trim(stripslashes($_POST['EmailFrom'])); 
$EmailTo = "suiteat116@gmail.com";
$Subject = "RE: Interest in Suite 116 Event Rental";
$FirstName = Trim(stripslashes($_POST['FirstName'])); 
$LastName = Trim(stripslashes($_POST['LastName'])); 
$Address = Trim(stripslashes($_POST['Address'])); 
$City = Trim(stripslashes($_POST['City'])); 
$State = Trim(stripslashes($_POST['State'])); 
$PostCode = Trim(stripslashes($_POST['PostCode'])); 
$Tel = Trim(stripslashes($_POST['Tel'])); 
$Mobile = Trim(stripslashes($_POST['Mobile'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Comments = Trim(stripslashes($_POST['Comments']));
$Subscribed = $_POST['Subscriber']; 

// validation
$validationOK=true;
$invalidType='';
//if (Trim($EmailFrom)=="") $validationOK=false;
if (Trim($FirstName)=="") {$validationOK=false; $invalidType=$invalidType.'FirstName+';}
if (Trim($LastName)=="") {$validationOK=false; $invalidType=$invalidType.'LastName+';} 
if (Trim($Address)=="") {$validationOK=false; $invalidType=$invalidType.'Address+';}
if (Trim($City)=="") {$validationOK=false; $invalidType=$invalidType.'City+';}
if (Trim($State)=="") {$validationOK=false; $invalidType=$invalidType.'State+';}
if (Trim($PostCode)=="") {$validationOK=false; $invalidType=$invalidType.'PostCode+';}
if (Trim($Tel)=="") {$validationOK=false; $invalidType=$invalidType.'Tel+';}
//if (Trim($Mobile)=="") {$validationOK=false; $invalidType=$invalidType.'Mobile&';}
if (Trim($Email)=="") {$validationOK=false; $invalidType=$invalidType.'Email+';}
if (Trim($Comments)=="") {$validationOK=false; $invalidType=$invalidType.'Comments+';}
if ($Subscribed=="checked") { $Subscribed="Currently Subscribed"; }
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=email-us.php?fname=$FirstName&lname=$LastName&addy=$Address&city=$City&state=$State&postCode=$PostCode&tel=$Tel&mobile=$Mobile&email=$Email&comments=$Comments&invalid=$invalidType\">"; 
  exit;
}

// prepare email body text
$Body = "";
$Body .= "FirstName: ";
$Body .= $FirstName;
$Body .= "\n";
$Body .= "LastName: ";
$Body .= $LastName;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $Address;
$Body .= "\n";
$Body .= "City: ";
$Body .= $City;
$Body .= "\n";
$Body .= "State: ";
$Body .= $State;
$Body .= "\n";
$Body .= "PostCode: ";
$Body .= $PostCode;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Mobile: ";
$Body .= $Mobile;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Comments: ";
$Body .= $Comments;
$Body .= "\n";
$Body .= $Subscribed;
// send email 
//$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
$success = mail($EmailTo, $Subject, $Body);

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=email-success.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=email-error.php\">";
}
?>