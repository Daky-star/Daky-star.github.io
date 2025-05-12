<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Exposiciones</title>
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

        .exhibitions-container {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            color: #333;
            display: flex;
            flex-direction: column;
            gap: 50px;
        }

        .exhibition-card {
            display: flex;
            flex-direction: row;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: box-shadow 0.3s ease;
            min-height: 200px;
        }
        .exhibition-card:hover {
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        }

        .exhibition-image {
            flex-shrink: 0;
            width: 300px;
            height: 200px;
            object-fit: cover;
        }

        .exhibition-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .exhibition-content h3 {
            margin: 0 0 10px 0;
            color: #1a1a1a;
        }

        .exhibition-content p {
            margin: 0;
            line-height: 1.4;
            color: #555;
        }
        @media (max-width: 600px) {
            .exhibition-card {
                flex-direction: column;
            }
            .exhibition-image {
                width: 100%;
                height: 200px;
            }
        }
</style>
    <style>
        .ad-left, .ad-right {
            position: fixed;
            top: 210px;
            width: 100px;
            height: calc(100vh - 100px);
            max-height: 300px;
            cursor: pointer;
            z-index: 1500;
        }
        .ad-left {
            left: 0;
            margin-left: 50px;
        }
        .ad-right {
            right: 0;
            margin-right: 50px;
        }
        @media (max-width: 768px) {
            .ad-left, .ad-right {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="ad-left">
        <img src="Publicidad.png" alt="Publicidad Izquierda" style="width: 100%; height: 100%;">
    </div>
    <div class="ad-right">
        <img src="Publicidad.png" alt="Publicidad Derecha" style="width: 100%; height: 100%;">
    </div>
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
                <li><a href="Exposiciones.php" class="active">Exposiciones</a></li>
                <li><a href="Localizaciones.php">Localizaciones</a></li>
                <li><a href="Sobre_Nosotros.php">Sobre Nosotros</a></li>
                <li><a href="Contactanos.php">Contactanos</a></li>
            </ul>
        </nav>
    </header>
    <div class="exhibitions-container">
        <div class="exhibition-card">
            <img src="Rex.jpg" alt="Rex" class="exhibition-image" />
            <div class="exhibition-content">
                <h3>Rex</h3>
                <p>Uno de los dinosaurios carnívoros más famosos, vivió hacia el final del Cretácico.</p>
            </div>
        </div>
        <div class="exhibition-card">
            <img src="Gastornis.jpg" alt="Gastornis" class="exhibition-image" />
            <div class="exhibition-content">
                <h3>Gastornis</h3>
                <p>Aunque no era un dinosaurio tradicional, este ave gigante desciende de ellos y dominó tras la extinción de los dinosaurios.</p>
            </div>
        </div>
        <div class="exhibition-card">
            <img src="Phorus.jpg" alt="Phorusrhacos" class="exhibition-image" />
            <div class="exhibition-content">
                <h3>Phorusrhacos</h3>
                <p>También conocido como “ave del terror”, era un ave carnívora gigante que vivió en Sudamérica.</p>
            </div>
        </div>
        <div class="exhibition-card">
            <img src="Struthio.png" alt="Struthio camelus" class="exhibition-image" />
            <div class="exhibition-content">
                <h3>Struthio camelus</h3>
                <p>Aunque no es un dinosaurio en el sentido clásico, es un descendiente directo de los dinosaurios terópodos.</p>
            </div>
        </div>
        <div class="exhibition-card">
            <img src="Anomalocaris.jpeg" alt="Exposición 5" class="exhibition-image" />
            <div class="exhibition-content">
                <h3>Anomalocaris</h3>
                <p>Depredador marino primitivo, con cuerpo segmentado y grandes apéndices frontales. No era un dinosaurio, sino un artrópodo.</p>
            </div>
        </div>
        <div class="exhibition-card">
            <img src="Nautiloide.jpeg" alt="Exposición 6" class="exhibition-image" />
            <div class="exhibition-content">
                <h3>Nautiloide gigante</h3>
                <p>Molusco con concha larga y recta, uno de los depredadores marinos más grandes de su tiempo.</p>
            </div>
        </div>
        <div class="exhibition-card">
            <img src="Eurypterus.jpg" alt="Exposición 7" class="exhibition-image" />
            <div class="exhibition-content">
                <h3>Eurypterus</h3>
                <p>Conocido como escorpión de mar, era un artrópodo acuático depredador con pinzas.</p>
            </div>
        </div>
        <div class="exhibition-card">
            <img src="Dunkleosteus.jpg" alt="Exposición 8" class="exhibition-image" />
            <div class="exhibition-content">
                <h3>Dunkleosteus</h3>
                <p>Pez blindado gigante con mandíbulas poderosas, uno de los mayores depredadores marinos de su época.</p>
            </div>
        </div>
        <div class="exhibition-card">
            <img src="Arthropleura.jpeg" alt="Exposición 9" class="exhibition-image" />
            <div class="exhibition-content">
                <h3>Arthropleura</h3>
                <p>Uno de los milpiés más grandes que existieron, podía alcanzar más de 2 metros de largo.</p>
            </div>
        </div>
        <div class="exhibition-card">
            <img src="Dimetrodon.JPG" alt="Exposición 10" class="exhibition-image" />
            <div class="exhibition-content">
                <h3>Dimetrodon</h3>
                <p>Reptil sinápsido con una gran vela en la espalda, a menudo confundido con un dinosaurio, pero vivió antes de ellos.</p>
            </div>
        </div>
        <div class="exhibition-card">
            <img src="Eoraptor.jpg" alt="Exposición 11" class="exhibition-image" />
            <div class="exhibition-content">
                <h3>Eoraptor</h3>
                <p>Uno de los primeros dinosaurios conocidos; pequeño, bípedo y omnívoro.</p>
            </div>
        </div>
        <div class="exhibition-card">
            <img src="Stegosaurus.jpg" alt="Exposición 12" class="exhibition-image" />
            <div class="exhibition-content">
                <h3>Stegosaurus</h3>
                <p>Dinosaurio herbívoro con placas óseas en la espalda y una cola con púas defensivas.</p>
            </div>
        </div>
    </div>
<?php
include 'footer.php';
?>
</body>
</html>
