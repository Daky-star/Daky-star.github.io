<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contáctanos </title>
    <style>
        body {
            margin: 0;
        }
        header {
            padding: 5px 0;
            text-align: center;
            box-shadow: none;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: #ffffff;
            border-bottom: 5px solid #d7a75a;
        }

        .logo-container {
            margin-left: 30px;
        }

        .logo-img {
            height: auto;
            width: 60%;
            object-fit: contain;
        }

        .navbar {
            display: flex;
            align-items: center;
            background-color: transparent;
        }

        .navbar ul {
            list-style-type: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar li {
            margin: 0 15px;
        }

        .navbar a {
            color: #d7a75a;
            text-decoration: none;
            font-size: 1.2em;
            text-transform: uppercase;
        }

        .navbar a:hover {
            color: #000000;
        }
        .navbar a.active {
            font-weight: bold;
            color: #000000;
            border-bottom: 2px solid #d7a75a;
        }
        .banner {
        display: grid;
        grid-template-columns: auto 1fr auto auto auto;
        align-items: center;
        padding: 10px 30px;
        gap: 20px;
        background-color: white;
        font-family: 'Arial', sans-serif;
        }

        .banner img.logo-museosrd {
        height: 60px;
        }

        .banner .text-container {
        font-size: 20px;
        line-height: 1.2;
        }

        .banner .text-container strong {
        color: #001c78;
        }

        .banner .republica img {
        height: 50px;
        }

        .banner .direccion {
        text-align: right;
        font-size: 14px;
        }

        .banner .redes {
        display: flex;
        gap: 10px;
        }

        .banner .redes img {
        height: 22px;
        }

        @media (max-width: 768px) {
        .banner {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 15px;
        }
        .banner .text-container,
        .banner .direccion,
        .banner .republica,
        .banner .redes {
            justify-content: center;
        }
        }
        form[name="ejemplo"] {
            background-color: #d7a75a;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            }

            input[type="text"],
            input[type="email"],
            input[type="date"],
            input[type="time"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: none;
                border-radius: 8px;
                box-sizing: border-box;
                font-size: 16px;
            }

            input[type="submit"],
            input[type="reset"] {
                width: 48%;
                padding: 10px;
                font-size: 16px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                background-color: #fff;
                color: #d7a75a;
                font-weight: bold;
                transition: background-color 0.3s, color 0.3s;
            }

            input[type="submit"]:hover,
            input[type="reset"]:hover {
                background-color: #ffcc80;
                color: #000;
            }

            input::placeholder {
                color: #999;
            }
            @media (max-width: 768px) {
            .contact-wrapper {
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }

            form[name="ejemplo"],
            .contact-container {
                max-width: 100%;
            }
            }
    </style>
</head>
<body>
    <div class="banner">
        <img class="logo-museosrd" src="logo-museosrd.png" alt="MuseosRD">
    
        <div class="text-container">
          <span>Portal de la <br><strong>Red Nacional de Museos <br>de la República Dominicana</strong></span>
        </div>
      
        <div class="republica">
          <img src="Escudo-Republica-Dominicana.png" alt="Escudo RD">
        </div>
      
        <div class="redes">
          <a href="#"><img src="instagram.png" alt="Instagram"></a>
          <a href="#"><img src="facebook.png" alt="Facebook"></a>
          <a href="#"><img src="X.avif" alt="Twitter"></a>
        </div>  
      </div>
      <hr>
    <header>
        <div class="logo-container">
            <img src="logo,dinopedia.png" alt="Dinopedia Logo" class="logo-img">
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="index.html"> Inicio </a></li>
                <li><a href="Períodos.php"> Períodos </a></li>
                <li><a href="Exposiciones.php">Exposiciones</a></li>
                <li><a href="Localizaciones.php">Localizaciones</a></li>
                <li><a href="Sobre_Nosotros.php">Sobre Nosotros</a></li>
                <li><a href="Contactanos.php" class="active">Contactanos</a></li>
            </ul>
        </nav>
    </header>

    <div class="contact-wrapper" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; padding: 30px;">
        <div class="contact-grid">
            <div class="contact-info" style="font-size: 23px">
                <h3>Información de Contacto</h3>
                <p><strong>Sucursal Principal:</strong> C/ Maria Nicolasa Billini #12 </p>
                <p><strong>Teléfono:</strong> (829) 637-4696 </p>
                <p><strong>Email:</strong> infoypreguntas0120@dinopedia.com </p>
                <p><strong>Horario:</strong> Lunes a Viernes: 9:00 AM - 6:00 PM </p>
            </div>
        </div>
    <form action="#" name="ejemplo" method="post">
        <center><h1> Envíanos un mensaje con tus preguntas! </h1></center>
        <input type="text" name="nombre" placeholder="nombre">
        <input type="email" name="correo" placeholder="correo">
        <input type="text" name="asunto" placeholder="asunto">
        <input type="text" name="mensaje" placeholder="mensaje">

        <div class="form" style="display: flex; justify-content: space-between;">
            <input type="submit" name="registro" value="Enviar">
            <input type="reset" value="Limpiar">
        </div>
    </form>
</div>
<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ejemplo";
?>
<?php
    if (isset($_POST['registro'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];

        $insertarDatos = "INSERT INTO contacto VALUES('$nombre', '$correo', '$asunto','$mensaje','')";

        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    }
    ?>
    </div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>
