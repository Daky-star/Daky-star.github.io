<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Localizaciones </title>
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
        .scroll-container {
            display: flex;
            overflow-x: auto;
            gap: 10px;
            padding: 10px 0;
            scrollbar-width: thin;
            scrollbar-color: #d7a75a #f1f1f1;
        }
        .scroll-container::-webkit-scrollbar {
            height: 8px;
        }
        .scroll-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }
        .scroll-container::-webkit-scrollbar-thumb {
            background-color: #d7a75a;
            border-radius: 4px;
        }
        .scroll-image {
            height: 100px;
            border-radius: 8px;
            object-fit: cover;
            flex-shrink: 0;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .scroll-image:hover {
            transform: scale(1.1);
        }
        .rotating-image {
            width: 100%;
            max-height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-top: 15px;
            transition: opacity 0.5s ease-in-out;
        }
        .locations-container {
            width: 90%;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            color: #333;
        }

        .locations-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .location-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            
        }

        .location-card h3 {
            margin: 10px 0;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }
        .appointment-container {
        max-width: 400px;
        margin: auto;
        padding: 1em;
        border: 1px solid #ccc;
        border-radius: 10px;
        font-family: Arial, sans-serif;
        }

        .appointment-form label {
        display: block;
        margin-top: 10px;
        }

        .appointment-form input {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        box-sizing: border-box;
        }

        .appointment-form button {
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        }

        .success-message {
        display: none;
        margin-top: 15px;
        color: green;
        font-weight: bold;
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
    </style>
</head>
<body>
</script>
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
                <li><a href="index.php"> Inicio </a></li>
                <li><a href="Períodos.php"> Períodos </a></li>
                <li><a href="Exposiciones.php">Exposiciones</a></li>
                <li><a href="Localizaciones.php" class="active">Localizaciones</a></li>
                <li><a href="Sobre_Nosotros.php">Sobre Nosotros</a></li>
                <li><a href="Contactanos.php">Contactanos</a></li>
            </ul>
        </nav>
    </header>
    <div class="locations-container">
        <div class="locations-grid">
            <div class="location-card">
                <h3>San Carlos</h3>
                <p>C/ Maria Nicolasa Billini #12</p>
                <div class="map-container">
                    <iframe 
                        width="100%" 
                        height="200" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://maps.google.com/maps?q=Calle%20Maria%20Nicolasa%20Billini%2012&t=&z=15&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>
            <div class="location-card">
                <h3>Los Alcarrizos</h3>
                <p>Av. Hermanas Mirabal #45</p>
                <div class="map-container">
                    <iframe 
                        width="100%" 
                        height="200" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://maps.google.com/maps?q=Avenida%20Hermanas%20Mirabal%2045%20Los%20Alcarrizos&t=&z=15&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>
            <div class="location-card">
                <h3>Santiago</h3>
                <p>Calle del Sol #78</p>
                <div class="map-container">
                    <iframe 
                        width="100%" 
                        height="200" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://maps.google.com/maps?q=Calle%20del%20Sol%2078%20Santiago%20de%20los%20Caballeros&t=&z=15&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>
            <div class="location-card">
                <h3>La Vega</h3>
                <p>Av. Juan Pablo Duarte #33</p>
                <div class="map-container">
                    <iframe 
                        width="100%" 
                        height="200" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://maps.google.com/maps?q=Avenida%20Juan%20Pablo%20Duarte%2033%20La%20Vega&t=&z=15&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>
            <div class="location-card">
                <h3>Santo Domingo</h3>
                <p>Av. George Washington #500</p>
                <div class="map-container">
                    <iframe 
                        width="100%" 
                        height="200" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://maps.google.com/maps?q=Avenida%20George%20Washington%20500%20Santo%20Domingo&t=&z=15&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>
            <div class="location-card">
                <h3>Puerto Plata</h3>
                <p>Calle Separación #25</p>
                <div class="map-container">
                    <iframe 
                        width="100%" 
                        height="200" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://maps.google.com/maps?q=Calle%20Separacion%2025%20Puerto%20Plata&t=&z=15&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>
            <div class="location-card">
                <h3>Higüey</h3>
                <p>Av. La Altagracia #120</p>
                <div class="map-container">
                    <iframe 
                        width="100%" 
                        height="200" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://maps.google.com/maps?q=Avenida%20La%20Altagracia%20120%20Higüey&t=&z=15&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>
            <div class="location-card">
                <h3>San Pedro de Macorís</h3>
                <p>Calle Juan Pablo Duarte #65</p>
                <div class="map-container">
                    <iframe 
                        width="100%" 
                        height="200" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://maps.google.com/maps?q=Calle%20Juan%20Pablo%20Duarte%2065%20San%20Pedro%20de%20Macoris&t=&z=15&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ejemplo";
?>
<center>
<form action="#" name="ejemplo" method="post">
    <h1> Solicita tu cita! </h1>
  <input type="text" name="nombre" placeholder="nombre">
  <input type="email" name="correo" placeholder="correo">
  <input type="text" name="telefono" placeholder="telefono">
  <input type="date" name="fecha" placeholder="fecha">
  <input type="time" name="hora" placeholder="hora">
  <input type="text" name="local" placeholder="local">

  <div class="form" style="display: flex; justify-content: space-between;">
    <input type="submit" name="registro" value="Enviar">
    <input type="reset" value="Limpiar">
  </div>
</form>
</center>
<br>
    <?php
    if (isset($_POST['registro'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $local = $_POST['local'];

        $insertarDatos = "INSERT INTO solicitud_visitas VALUES('$nombre', '$correo', '$telefono','$fecha', '$hora', '$local','')";

        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    }
    ?>
<?php
include 'footer.php';
?>
</body>
</html>
