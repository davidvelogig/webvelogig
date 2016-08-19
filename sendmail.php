<?php
// Guardar los datos recibidos en variables:
$email = $_POST['email'];
// Definir el correo de destino:
$dest = "david@velogig.com"; 
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $email <$email>\r\n";  
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "Contacto";

$cuerpo = "Email: ".$email."<br />";
 
// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
if($email != ''){
    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
}
?>