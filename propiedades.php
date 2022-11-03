<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Propiedades</title>
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
                <li class="item"> <a href="contacto.html">Contactanos </a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container_propiedades">
            <div class="container_categorias">
                <ul>
                    <label for=""></label>
                    <li><input type="checkbox" id=""></li>
                    <label for=""></label>
                    <li><input type="checkbox" id=""></li>
                    <label for=""></label>
                    <li><input type="checkbox" id=""></li>
                    <label for=""></label>
                    <li><input type="checkbox" id=""></li>
                    <label for=""></label>
                    <li><input type="checkbox" id=""></li>
                </ul>
            </div>
            <div class="propiedades">
                <?php 
                    // $host = "localhost";
                    // $user = "root";
                    // $password= "";
                    // $db = "prueba";
                    // $connect = mysqli_connect($host,$user,$password,$db);
                    // if($connect->connect_error){
                    //     die("Hubo un problema al redireccionar.");
                    // }
                    // $sql = "SELECT * from propiedades where categoria = 'Departamento'";
                    // $resultado = mysqli_query($connect,$sql);
                    // $datos= $resultado -> fetch_assoc()                    
                ?>


                <div class="propiedad"></div>
                <div class="propiedad"></div>
                <div class="propiedad"></div>
                <div class="propiedad"></div>
                <div class="propiedad"></div>
                <div class="propiedad"></div>
                <div class="propiedad"></div>
                <div class="propiedad"></div>
                <div class="propiedad"></div>
                <div class="propiedad"></div>
                <div class="propiedad"></div>
                <div class="propiedad"></div>
            </div>
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