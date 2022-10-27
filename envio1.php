<!DOCTYPE HTML>



<html>

<head>


<title>Grupoxx - Envio</title>

</head>

<?php

 // aqui se pasan los valores de las variables desde el formulario HTML

$nombre     =  $_POST['nombre'];
$apellido  =  $_POST['apellido'];
$documento  =  $_POST['documento'];
$email   =  $_POST['email'];
$telefono =  $_POST['telefono'];
$genero =  $_POST['genero'];
$comentario =  $_POST['comentario'];


// $conocio = $_POST['conocio'];
// $donde = $_POST['donde'];


 // zona de test

echo $nombre;
echo $apellido; 
echo $documento;
echo $email;
echo $telefono;
echo $genero;

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
// fede1234
$asunto = "Contacto en sitio grupo 01";
$mensaje = "Nombre: ".$nombre."\nApellido: ".$apellido."\nDocumento: ".$documento."\nTelefono: ".$telefono."\nE-mail: ".$email."\nGenero: ".$genero."\n
Comentario: ".$comentario;

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