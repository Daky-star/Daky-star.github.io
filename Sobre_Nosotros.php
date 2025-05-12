<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sobre Nosotros </title>
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
        .about-container {
            width: 90%;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .about-section {
            margin-bottom: 30px;
            text-align: justify;
        }
        .about-section h2 {
            color: #000000;
            border-bottom: 2px solid #e8c97a;
            padding-bottom: 12px;
        }
        .video-bio-section {
            display: block;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: -50px;
        }
        .video-container {
        width: 96%;
        height: 100%;
        }
        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        .video-container, .bio-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .bio-container {
            text-align: center;
        }
        .bio-card {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .bio-card:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .mv-section {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 40px 0;
        }
        .mv-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            font-size: 20px;
        }
        .mv-card h3 {
            text-align: center;
        }
        .mv-card ul {
            padding-left: 20px;
        }
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .team-member {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
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

        .about-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        .about-container h2 {
            font-size: 28px;
            margin-bottom: 15px;
            color: #000000;
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
            text-align: center;
        }

        .about-container h3 {
            font-size: 22px;
            color: #0055a5;
            margin-top: 15px;
        }

        .video-container video {
            border: 2px solid #ccc;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .bio-container,
        .about-section,
        .mv-section {
            background-color: #ffffff;
            padding: 20px;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .bio-card {
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px dashed #ccc;
        }

        .mv-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
            text-align: justify;    
        }

        .mv-card {
            background-color: #eef6ff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.05);
        }

        .mv-card ul {
            padding-left: 20px;
        }
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .team-member {
            background-color: #e8f0ff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 1px 5px rgba(0,0,0,0.07);
        }
        .bio-card {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #f8f8f8;
        gap: 20px;
        }

        .bio-text {
            flex: 2;
        }

        .bio-photo {
            flex: 1;
            text-align: right;
        }

        .bio-photo img {
            width: 150px;
            height: auto;
            border-radius: 8px;
            object-fit: cover;
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
                <li><a href="Sobre_Nosotros.php" class="active">Sobre Nosotros</a></li>
                <li><a href="Contactanos.php">Contactanos</a></li>
            </ul>
        </nav>
    </header>

    <div class="about-container">

        <div class="video-bio-section">
            <div class="video-container">
                <h2> Nuestro Trabajo </h2>
                <video width="100%" controls>
                    <source src="Sobre_Nosotros.mp4" alt="Video Sobre Nosotros">
                </video>
            </div>
        </div>
    
        <div class="bio-container">
            <h2>Fundadores</h2>
        
            <div class="bio-card">
                <div class="bio-text">
                    <h3>David Elias Ciprian Javier</h3>
                    <p>Paleontólogo especializado en dinosaurios del Cretácico con más de 10 años de experiencia en investigación y divulgación científica. Graduado de la Universidad Autónoma de Santo Domingo (UASD).</p>
                </div>
                <div class="bio-photo">
                    <img src="David.jpg" alt="David Elias Ciprian Javier">
                </div>
            </div>
            <div class="bio-card">
                <div class="bio-text">
                    <h3>Erick Eduardo Sanchez Sosa</h3>
                    <p>Experto en museografía y diseño de exhibiciones interactivas. Ha trabajado en proyectos educativos en toda Latinoamérica, enfocado en hacer accesible la ciencia para todos los públicos.</p>
                </div>
                <div class="bio-photo">
                    <img src="Erick.jpg" alt="Erick Eduardo Sanchez Sosa">
                </div>
            </div>
        </div>

        <div class="about-section">
            <h2>Nuestra Historia</h2>
            <p>DinoPedia nació en 2010 como un pequeño proyecto educativo en Santo Domingo, República Dominicana. Lo que comenzó como una modesta colección de fósiles y réplicas en un local de 100m², hoy se ha convertido en la institución paleontológica más importante del Caribe. En sus inicios, el equipo fundador organizaba charlas en escuelas y exposiciones temporales en plazas públicas, con el objetivo de despertar el interés de niños y jóvenes por el pasado prehistórico del planeta.</p>
            <p>Nuestro primer gran descubrimiento fue en 2012, cuando identificamos restos fósiles de un Hadrosaurio en la región este del país. Este hallazgo no solo atrajo la atención de medios locales e internacionales, sino que también nos permitió establecer alianzas con universidades extranjeras y recibir fondos para la expansión de nuestras investigaciones. Gracias a ese momento clave, pasamos de ser un proyecto local a una iniciativa científica reconocida internacionalmente.</p>
            <p>En 2015 inauguramos nuestro primer museo interactivo, combinando tecnología con paleontología. Este espacio incluyó experiencias de realidad aumentada, recorridos virtuales por eras geológicas y simulaciones de excavaciones, lo que marcó un antes y un después en la forma en que se presenta la ciencia al público dominicano. Desde entonces, miles de estudiantes han visitado nuestras instalaciones como parte de sus programas educativos.</p>
            <p>Para 2018 ya teníamos tres sedes en el país y habíamos participado en excavaciones internacionales en Argentina y México. Estas colaboraciones nos permitieron compartir conocimientos, aprender nuevas técnicas de conservación y traer piezas únicas que enriquecieron nuestras exhibiciones permanentes.</p>
            <p>A lo largo de los años, DinoPedia también ha desarrollado programas comunitarios, llevando talleres móviles a zonas rurales donde el acceso a museos es limitado. Además, impulsamos un programa de becas para jóvenes interesados en seguir carreras científicas, especialmente en áreas relacionadas con la paleontología, geología y ciencias naturales.</p>
            <p>Hoy contamos con un equipo de 25 profesionales dedicados a la investigación, educación y conservación del patrimonio paleontológico dominicano y del mundo. Nuestra labor continúa expandiéndose, con nuevos proyectos editoriales, una revista científica propia y la meta de abrir una sede internacional en los próximos cinco años. DinoPedia no solo es un museo: es una puerta abierta al pasado remoto de nuestro planeta y una inspiración para el futuro de la ciencia en la región.</p>
        </div>

        <div class="mv-section">
            <div class="mv-card">
                <h3>Misión</h3>
                <p>Investigar, preservar y difundir el conocimiento sobre la vida prehistórica, haciendo accesible la paleontología a través de experiencias educativas innovadoras que inspiren a las nuevas generaciones.</p>
            </div>
            <div class="mv-card">
                <h3>Visión</h3>
                <p>Ser el referente latinoamericano en investigación y divulgación paleontológica para 2030, con presencia en 10 países y un programa educativo que alcance a 1 millón de estudiantes anuales.</p>
            </div>
            <div class="mv-card">
                <h3>Valores</h3>
                <ul>
                    <p>Rigor científico, Innovación educativa, Conservación del patrimonio, Accesibilidad universal y Trabajo en equipo. </p>
                </ul>
            </div>
        </div>

        <div class="about-section">
            <h2>Nuestro Equipo</h2>
            <div class="team-grid">
                <div class="team-member">
                    <h3>Dr. Wilken Aquino</h3>
                    <p>Director y Paleontólogo Jefe</p>
                </div>
                <div class="team-member">
                    <h3>Dra. Andrimar Ferreras</h3>
                    <p>Curadora de Exhibiciones</p>
                </div>
                <div class="team-member">
                    <h3>Lic. Luis Mendéz</h3>
                    <p>Coordinador Educativo</p>
                </div>
                <div class="team-member">
                    <h3>Lic. Aneudis de Leon</h3>
                    <p>Coordinador Financiero</p>
                </div>
            </div>
        </div>
    
    </div>
<?php
include 'footer.php';
?>
</body>
</html>
