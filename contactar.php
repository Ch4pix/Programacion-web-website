<!DOCTYPE HTML>



<html>

<head>


<title>Grupo01 - Envio</title>

</head>

<?php

 // aqui se pasan los valores de las variables desde el formulario HTML

$nombre =  $_POST['nombre'];
$mail =  $_POST['mail'];
$genero = $_POST['genero']; //
$apellido = $_POST['apellido'];
$telefono   =  $_POST['telefono'];
$documento = $_POST['documento']; //



 // zona de test


echo $nombre; 



$header = 'From: ' . $mail . " \r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain"; 

// echo $header; 
// $mensaje = "Este mensaje fue enviado por " . $nombre . ",
 // de la empresa " . $empresa . " \r\n"; 
// $mensaje .= "Su e-mail es: " . $mail . " \r\n"; 
// $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
 // $mensaje .= "Enviado el " . date('d/m/Y', time()); 
// $para = 'ejemplo@mail.com';
 // $asunto = 'Asunto del mail recibido'; 
// mail($para, $asunto, utf8_decode($mensaje), $header);


 echo 'Mensaje enviado correctamente'; 

 
// Reemplazar las xx de infogrupoxx por enumerro de grupo
// Ejemplo, debe quedar como infogrupo01 
// Este nombre de usuario despues habra que darlo de alta en el servidor
// de correo.En ese caso Mercury
// y tambien en el cliente de correo en este  caso Thuderbird

$para = "infogrupo01@localhost";
$asunto = "Contacto en Nombre sitio";
$mensaje = "Nombre: ".$nombre."\nTeléfono: ".$telefono."\nE-mail: ".$mail;

//
// cuando esta funcionado sacamos los echo o les ponemos //
//

echo $para; 
echo $asunto;
echo $mensaje; 
echo $header;



mail($para,$asunto,$mensaje,$header);

?>



<h3><p align='center'> Su e-mail se ha enviado corectamente </h3>






</body>
</html>