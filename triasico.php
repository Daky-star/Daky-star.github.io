<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Triásico - Dinosaurios</title>
    <style>
        *, *::before, *::after { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; }
        header {
            padding: 5px 0;
            text-align: center;
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
        .logo-container { margin-left: 30px; }
        .logo-img { height: auto; width: 60%; object-fit: contain; }
        .navbar ul { list-style: none; display: flex; margin: 0; padding: 0; }
        .navbar li { margin: 0 15px; }
        .navbar a {
            color: #d7a75a;
            text-decoration: none;
            font-size: 1.2em;
            text-transform: uppercase;
        }
        .navbar a:hover,
        .navbar a.active {
            color: #000000;
            font-weight: bold;
            border-bottom: 2px solid #d7a75a;
        }
        .banner {
            display: grid;
            grid-template-columns: auto 1fr auto auto;
            align-items: center;
            padding: 10px 30px;
            gap: 20px;
            background-color: white;
        }
        .banner img.logo-museosrd { height: 60px; }
        .banner .text-container { font-size: 20px; line-height: 1.2; }
        .banner .text-container strong { color: #001c78; }
        .banner .republica img { height: 50px; }
        .banner .redes { display: flex; gap: 10px; }
        .banner .redes img { height: 22px; }
        @media (max-width: 768px) {
            .banner { grid-template-columns: 1fr; text-align: center; gap: 15px; }
        }

        main {
            width: 90%;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            color: #333;
            line-height: 1.6;
        }
        .dino-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .dino-card {
            background: #f8f8f8;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .dino-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 6px;
        }
        .dino-card a {
            text-decoration: none;
            color: #d7a75a;
            font-weight: bold;
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
            <li><a href="index.html">Inicio</a></li>
            <li><a href="Períodos.php" class="active">Períodos</a></li>
            <li><a href="Exposiciones.php">Exposiciones</a></li>
            <li><a href="Localizaciones.php">Localizaciones</a></li>
            <li><a href="Sobre_Nosotros.php">Sobre Nosotros</a></li>
            <li><a href="Contactanos.php">Contáctanos</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Período Triásico</h1>
    <p>
        El Triásico fue el primer período del Mesozoico, hace aproximadamente 252 a 201 millones de años.
        Surgieron los primeros dinosaurios en un clima árido, en un solo supercontinente: Pangea.
    </p>

    <div class="dino-list">
        <div class="dino-card"><img src="eoraptor.jpg" alt="Eoraptor">Eoraptor</div>
        <div class="dino-card"><img src="herrerasaurus.jpg" alt="Herrerasaurus">Herrerasaurus</div>
        <div class="dino-card"><img src="plateosaurus.jpg" alt="Plateosaurus">Plateosaurus</div>
        <div class="dino-card"><img src="coelophysis.jpg" alt="Coelophysis">Coelophysis</div>
        <div class="dino-card"><img src="liliensternus.jpg" alt="Liliensternus">Liliensternus</div>
        <div class="dino-card"><img src="Stegosaurus.jpg" alt="Staurikosaurus">Staurikosaurus</div>
        <div class="dino-card"><img src="tawa.jpg" alt="Tawa">Tawa</div>
        <div class="dino-card"><img src="eodromaeus.jpg" alt="Eodromaeus">Eodromaeus</div>
        <div class="dino-card"><img src="saturnalia.jpg" alt="Saturnalia">Saturnalia</div>
        <div class="dino-card"><img src="buriolestes.jpg" alt="Buriolestes">Buriolestes</div>
    </div>
</main>

<?php include 'footer.php'; 
?>

</body>
</html>
