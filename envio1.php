<!DOCTYPE HTML>



<html>

<head>


<title>Grupoxx - Envio</title>

</head>

<?php

$nombre     =  $_POST['nombre'];
$apellido  =  $_POST['apellido'];
$documento  =  $_POST['documento'];
$email   =  $_POST['email'];
$telefono =  $_POST['telefono'];
$genero =  $_POST['genero'];
$comentario =  $_POST['comentario'];

$header = 'From: ' . $mail . " \r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain"; 

$para = "infogrupo01@localhost";
// fede1234
$asunto = "Contacto en sitio grupo 01";
$mensaje = "Nombre: ".$nombre."\nApellido: ".$apellido."\nDocumento: ".$documento."\nTelefono: ".$telefono."\nE-mail: ".$email."\nGenero: ".$genero."\nComentario: ".$comentario;

mail($para,$asunto,$mensaje,$header);

echo 'Mensaje enviado correctamente'; 

?>









</body>
</html>