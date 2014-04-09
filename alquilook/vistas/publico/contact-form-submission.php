<?php

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contacto') {
    header('Location: contacto.php'); exit;
}
	
// get the posted data
$name = $_POST['contact_name'];
$email_address = $_POST['contact_email'];
$phone = $_POST['contact_phone'];
$message = $_POST['contact_message'];
	
// check that a name was entered
if (empty($name))
    $error = 'Díganos su nombre.';
// check that an email address was entered
elseif (empty($email_address)) 
    $error = 'Díganos su email.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))
    $error = '¿Está seguro que este email es válido?.';
// check that a phone number was entered
if (empty($phone))
    $error = 'Díganos un teléfono de contacto.';
// check that a message was entered
elseif (empty($message))
    $error = 'No sea tímido, cuéntenos algo.';
		
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: contacto.php?e='.urlencode($error)); exit;
}

$headers = "De: $email_address\r\n"; 
$headers .= "Reply-To: $email_address\r\n";

// write the email content
$email_content = "Nombre: $name\n";
$email_content .= "Email: $email_address\n";
$email_content .= "Teléfono: $phone\n";
$email_content .= "Mensaje:\n$message";
	
// send the email
//ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
mail ('info@alquilook.com', 'Alquilook - Mensaje desde la web', $email_content, $headers);
	
// send the user back to the form
header('Location: gracias.php?s='.urlencode('Gracias por escribirnos..')); exit;

?>