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
                <a href="index.html"><img src="images/logo.png" alt="logo de pagina"></a>
            </div>

            <ul class="items">
                <li class="item"> <a href="index.html">Home</a> </li>
                <li class="item"> <a href="sedes.html">Sedes </a></li>
                <li class="item"> <a href="propiedades.php">Propiedades</a></li>
                <li class="item"> <a href="contacto.php">Contactanos </a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="FAQ">
            <div class="container_dropdown">
                <input type="checkbox" id="pregunta1">
                <label for="pregunta1" class="checkbox_button">¿Cuales son los medios de pago? <img src="https://cdn-icons-png.flaticon.com/512/159/159119.png" alt=""></label>
                <p class="dropdown_text">Solo aceptamos criptomonedas, los dolares puestos en los avisos son una referencia. Tenés que realizar la conversión en linea.</p>
            </div>
            <div class="container_dropdown">
                <input type="checkbox" id="pregunta2">
                <label for="pregunta2" class="checkbox_button">¿Tienen permiso legal para vender sitios históricos? <img src="https://cdn-icons-png.flaticon.com/512/159/159119.png" alt=""></label>
                <p class="dropdown_text">Si, hemos realizado negociaciones con gente completamente legal para que tu estadia en estos establecimientos sea legítima</p>
            </div>
            <div class="container_dropdown">
                <input type="checkbox" id="pregunta3">
                <label for="pregunta3" class="checkbox_button">¿Esto es un placeholder? <img src="https://cdn-icons-png.flaticon.com/512/159/159119.png" alt=""></label>
                <p class="dropdown_text">Escencialmente, querido Watson.</p>
            </div>
        </div>
        <div class="owners_container">
            <div class="owner_section">
                <img src="https://via.placeholder.com/300" alt="">
                <h2>Federico Garcia</h2>
                <p>Técnico electrónico y en sistemas</p>
                <p>Frontend developer</p>
            </div>
            <div class="owner_section">
                <img src="https://via.placeholder.com/300" alt="">
                <h2>Santino Capellari</h2>
                <p>Técnico programador en sistemas</p>
                <p>Asistencia Backend</p>
            </div>
            <div class="owner_section">
                <img src="https://via.placeholder.com/300" alt="">
                <h2>Salvador Urueña</h2>
                <p>Técnico programador en sistemas</p>
                <p>Asistencia Backend</p>
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
                            <option value="helicoptero">Helicoptero Apache</option>
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
                    <textarea name="mensaje" id="mensaje" cols="30" rows="7" name="comentario"></textarea>
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
                // $comentario =  $_POST['comentario'];

                $header = 'From: ' . $email . " \r\n"; 
                $header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
                $header .= "Mime-Version: 1.0 \r\n";
                $header .= "Content-Type: text/plain"; 

                $para = "infogrupo01@localhost";
                // fede1234
                $asunto = "Contacto en sitio grupo 01";
                $mensaje = "Nombre: ".$nombre."\nApellido: ".$apellido."\nDocumento: ".$documento."\nTelefono: ".$telefono."\nE-mail: ".$email."\nGenero: ".$genero;
                // ."\nComentario: ".$comentario
                mail($para,$asunto,$mensaje,$header);

                echo 'Mensaje enviado correctamente'; 
            ?>
        </div>
    </main>
    <footer class="footer">
        <div class="footer_info">
            <div>
                <ul>
                    <li>Ayuda técnica</li>
                    <li>+54 9 11 3952 3915</li>
                    <li>inmobiliarias@ssf.edu.ar</li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>Dueños</li>
                    <li>Federico Garcia</li>
                    <li>Santino Capellari</li>
                    <li>Salvador Urueña</li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>Sedes</li>
                    <li>Panama</li>
                    <li>Transylvania</li>
                    <li>Costa negra</li>
                </ul>
            </div>    
        </div>
        <div class="container_redes">
            <img src="images/instagram_logo.png" id="instagram_logo" alt="">
            <img src="images/whatsapp-logo.png" id="whatsapp_logo" alt="">
            <img src="images/facebook_logo.png" id="facebook_logo" alt="">
        </div>
    </footer>
</body>
</html>