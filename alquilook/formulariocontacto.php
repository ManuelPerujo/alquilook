<?php


if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: contact.php'); exit;
}
	

$name = $_POST['contact_name'];
$email_address = $_POST['contact_email'];
$message = $_POST['contact_message'];
	

if (empty($name))
    $error = 'Díganos su nombre, no sea tímido.';

elseif (empty($email_address)) 
    $error = 'No olvide su email.';

elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))
    $error = '¿Está seguro que este email existe?.';

elseif (empty($message))
    $error = 'Díganos "hola" al menos, ¿no?.';
		

if (isset($error)) {
    header('Location: contacto.php?e='.urlencode($error)); exit;
}

$headers = "From: $email_address\n"; 
$headers .= "Reply-To: $email_address\n";


$email_content = "Name: $name\n";
$email_content .= "Email Address: $email_address\n";
$email_content .= "Message:\n\n$message";
	

mail ('manuelperujo@museographia.com', 'Alquilook - Formulario de contacto', $email_content, $headers);
header('Location: gracias.php?s='.urlencode('Gracias por su mensaje.')); exit;

?>