<?php
// Verificando datos
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['direccion'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Creando correo
$to = 'correo@dominio.com'; // remplaza correo@dominio.com por el correo al cual recibira la notificación.
$email_subject = "Compra realizada por:  $name";
$email_body = "Has recibido una compra.\n\n"."Los datos son los siguientes:\n\nNombre: $name\n\nCorreo: $email_address\n\nDirección:\n$direccion";
$headers = "From: correo@dominio.com\n"; // Este es el correo el cual envia la notificación. Te recomiendo poner norplay@dominio.com. Este tiene que ser un correo almacenado por el servidor.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>