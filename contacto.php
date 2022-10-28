<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Contacto / FAQ</title>
</head>
<body>
    <header>
        <nav class="navbar">

            <div class="barra_logo">
                <a href="index.html"><img src="images/casa_logo.png" alt="logo de pagina"
                width="75"
                height="75"></a>
            </div>

            <ul class="items">
                <li class="item"> <a href="index.html">Home</a> </li>
                <li class="item"> <a href="sedes.html">Sedes </a></li>
                <li class="item"> <a href="propiedades.html">Propiedades</a></li>
                <li class="item"> <a href="contacto.html">Contactanos </a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="FAQ">
            <div class="container_dropdown">
                <input type="checkbox" id="pregunta1">
                <label for="pregunta1" class="checkbox_button">¿Lorem ipsum dolor sit amet? <img src="https://cdn-icons-png.flaticon.com/512/159/159119.png" alt=""></label>
                <p class="dropdown_text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="container_dropdown">
                <input type="checkbox" id="pregunta2">
                <label for="pregunta2" class="checkbox_button">¿Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, asperiores!? <img src="https://cdn-icons-png.flaticon.com/512/159/159119.png" alt=""></label>
                <p class="dropdown_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, repellat?</p>
            </div>
            <div class="container_dropdown">
                <input type="checkbox" id="pregunta3">
                <label for="pregunta3" class="checkbox_button">¿Lorem ipsum dolor, sit amet consectetur adipisicing elit? <img src="https://cdn-icons-png.flaticon.com/512/159/159119.png" alt=""></label>
                <p class="dropdown_text">Lorem ipsum dolor sit amet consectetur natus, repellat?</p>
            </div>
        </div>
        <div class="owners_container">
            <div class="owner_section">
                <img src="https://via.placeholder.com/300" alt="">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, voluptatum.</p>
            </div>
            <div class="owner_section">
                <img src="https://via.placeholder.com/300" alt="">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, voluptatum.</p>
            </div>
            <div class="owner_section">
                <img src="https://via.placeholder.com/300" alt="">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, voluptatum.</p>
            </div>
        </div>
        <div class="form_container">
            <h2>Si te quedo alguna duda o deseas contactarnos</h2>
            <form method="post" class="form" id="contact_form">
                <div class="form_columns-container">
                    <div class="form_column">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                        <label for="genero">Genero</label>
                        <select name="genero" id="genero" form="contact_form">
                            <option value=""></option>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="form_column">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido">
                        <label for="telefono">Numero Telefonico</label>
                        <input type="tel" id="telefono" name="telefono">
                        <label for="documento">Documento</label>
                        <input type="text" id="documento" name="documento">
                    </div>
                </div>
                <div class="form_message">
                    <label for="mensaje">Escriba su mensaje</label>
                    <input type="text" id="mensaje" name="comentario"></textarea>
                    <div class="form_message-buttons">
                        <input type="submit" id="enviar" class="form_button" id="submit">
                        <input type=reset value="Borrar datos" class="form_button" id="reset">
                    </div>
                </div>
            </form>

            <?php

$nombre     =  $_POST['nombre'];
$apellido  =  $_POST['apellido'];
$documento  =  $_POST['documento'];
$email   =  $_POST['email'];
$telefono =  $_POST['telefono'];
$genero =  $_POST['genero'];
$comentario =  $_POST['comentario'];

echo $nombre;
echo $apellido; 
echo $documento;
echo $email;
echo $telefono;
echo $genero;

$header = 'From: ' . $email . " \r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain"; 

$para = "infogrupo01@localhost";
// fede1234
$asunto = "Contacto en sitio grupo 01";
$mensaje = "Nombre: ".$nombre."\nApellido: ".$apellido."\nDocumento: ".$documento."\nTelefono: ".$telefono."\nE-mail: ".$email."\nGenero: ".$genero."\n
Comentario: ".$comentario;

mail($para,$asunto,$mensaje,$header);

?>

        </div>
    </main>
    <footer class="footer">
        <h><b>Ayuda tecnica:</b></h>
        <p>12340-placeholder</p>

        <div class="center">
            <h><b><u>Dueños</u></b></h>
            <p>Nestor Fede</p>
            <p>100% personaReal</p>
            <p>Esto no es un placeholder</p>
        </div>

        <div class="container_redes">
            <img src="images/facebook_logo.png" alt="logo facebook">
            <img src="images/instagram_logo.png" alt="logo insta">
            <img src="images/gmail_logo.png" alt="logo gmail">
        </div>
    </footer>
</body>
</html>