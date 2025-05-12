<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Períodos </title>
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }

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

        .top-bar {
            background-color: #d7a75a; 
            color: white;
            text-align: center;
            padding: 0.5px 0;
            font-size: 1.2em;
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
                <li><a href="Index.html"> Inicio </a></li>
                <li><a href="Períodos.php" class="active"> Períodos </a></li>
                <li><a href="Exposiciones.php">Exposiciones</a></li>
                <li><a href="Localizaciones.php">Localizaciones</a></li>
                <li><a href="Sobre_Nosotros.php">Sobre Nosotros</a></li>
                <li><a href="Contactanos.php">Contactanos</a></li>
            </ul>
        </nav>
    </header>
    <main style="width: 90%; margin: 40px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.1); color: #333; line-height: 1.6;">
        <p>Las eras geológicas son una unidad geocronológica formal de la escala temporal geológica que representa el tiempo correspondiente a la duración de un eratema, la unidad cronoestratigráfica equivalente que comprende todas las rocas formadas en ese tiempo. Las eras geológicas son una de las divisiones mayores del tiempo geológico, son subdivisiones de los eones y se dividen a su vez en las siguientes eras geológicas:</p>
        <p>Cámbrico, Ordovícico, Silúrico, Devónico, Carbonífero, Pérmico, Triásico, Jurásico, Cretácico, Pelógeno, Neógeno y Cuaternario.</p>
        <p>La duración de las eras geológicas es muy variable, así las del eón Arcaico tienen una duración de 300 o 400 millones de años cada una, las del Proterozoico de unos 450 a 900 millones de años, mientras que las del Fanerozoico duraron: 290 millones de años el Paleozoico, 186 Ma el Mesozoico y 65,5 Ma, la actual, el Cenozoico. El eón Hadeico, el más antiguo, no está dividido en eras geológicas, puesto que no se conservan rocas de ese tiempo, tan solo algún mineral reciclado conservado relicto en rocas más recientes.</p>
        <p>Ninguna de las eras geológicas del Arcaico y del Proterozoico procede de una unidad cronoestratigráfica equivalente, y sus límites cronológicos se han establecido como unidades geocronométricas, con edades absolutas más o menos arbitrarias consensuadas internacionalmente.</p>
    </main>
    <section style="padding: 40px; background-color: #f4f4f4; font-family: Arial, sans-serif;">
  <h2 style="text-align: center; color: #000000;">Períodos del Mesozoico</h2>
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin-top: 30px;">

    <div style="background-color: white; border-radius: 10px; width: 280px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); overflow: hidden;">
      <img src="triasico.jpg" alt="Triásico" style="width: 100%; height: 150px; object-fit: cover;">
      <div style="padding: 20px;">
        <h3 style="color: #d7a75a;">Triásico</h3>
        <p>Primer período del Mesozoico, cuando aparecieron los primeros dinosaurios y mamíferos primitivos.</p>
        <a href="triasico.php" style="display: inline-block; margin-top: 10px; background-color: #d7a75a; color: white; padding: 8px 12px; border-radius: 5px; text-decoration: none;">
          Ver dinosaurios
        </a>
      </div>
    </div>

    <div style="background-color: white; border-radius: 10px; width: 280px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); overflow: hidden;">
      <img src="jurasico.jpg" alt="Jurásico" style="width: 100%; height: 150px; object-fit: cover;">
      <div style="padding: 20px;">
        <h3 style="color: #d7a75a;">Jurásico</h3>
        <p>Período de gran biodiversidad y clima cálido. Aparecen enormes dinosaurios y las primeras aves.</p>
        <a href="jurasico.php" style="display: inline-block; margin-top: 10px; background-color: #d7a75a; color: white; padding: 8px 12px; border-radius: 5px; text-decoration: none;">
          Ver dinosaurios
        </a>
      </div>
    </div>

    <div style="background-color: white; border-radius: 10px; width: 280px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); overflow: hidden;">
      <img src="cretacico.jpg" alt="Cretácico" style="width: 100%; height: 150px; object-fit: cover;">
      <div style="padding: 20px;">
        <h3 style="color: #d7a75a;">Cretácico</h3>
        <p>Último período del Mesozoico. Dominio de grandes depredadores y extinción masiva al final del período.</p>
        <a href="cretacico.php" style="display: inline-block; margin-top: 10px; background-color: #d7a75a; color: white; padding: 8px 12px; border-radius: 5px; text-decoration: none;">
          Ver dinosaurios
        </a>
      </div>
    </div>

  </div>
</section>
<?php
include 'footer.php';
?>
</body>
</html>
