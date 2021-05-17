<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tu ahorro personal.com</title>
    <link rel="shortcut icon" href="img\logoPequeño.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS\estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

  </head>
  <body>
    <header>
        <div class="logo">
          <a href="index.php" id="logo">
            <img src="img\logo.png" alt="">
          </a>
        </div>
        <nav>
          <a href="index.php">Inicio</a>
          <a href="quienesSomos.php">Quienes somos</a>
          <a href="servicios.php">Servicios</a>
          <a href="noticias.php">Noticias</a>
          <a href="contactenos.php">Contactenos</a>
          <a href="Registrate.php">Registrate</a>
        </nav>
      <section class="textos-header">
        <h1>Tu equipo en las finanzas personales</h1>
        <h2>nos convertimos en tu apoyo directo para que tomes las mejores decisiones financieras</h2>
        <a href="contactenos.php" class="boton">Toma acción aquí!!</a>
      </section>
      <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <main>
      <section class="contenedor intro">
        <h2 class = "titulo">Te ofrecemos un asesoramiento completo para que tomes mejores decisiones financieras</h2>
        <div class="contenedor-introduccion">
          <img src="img\imagen5.jpg" alt="" class="imagen-about-us">
          <div class="contenido-textos">
            <p>Las finanzas personales las utilizamos en todos lados, desde el trabajo que escogemos, el lugar donde vamos a tomar nuestros alimentos, la escuela, los planes de fin de semana, y es que toda decisión tiene su base financiera; por este motivo aquí encontraras el acompañamiento y asesoramiento de expertos en la materia.</p>
            <p>La educación financiera entrega herramientas a las personas para tomar decisiones efectivas que permiten mejorar su bienestar económico; Esta, parte de una adecuada planeación financiera que le permite a las personas elaborar el plan de acción para cumplir sus objetivos personales tanto en el corto, como mediano y largo plazo.</p>
          </div>
        </div>
      </section>
      <section class="video">
        <div class="contenedor">
          <h2 class="titulo">Educación financiera en Colombia</h2>
          <iframe class= "video-educacion-financiera"width="560" height="315" src="https://www.youtube.com/embed/KC5XoYIz7bE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </section>
        <section class="porcentaje contenedor">
          <h2 class="titulo"> Uno de cada 10 colombianos ahorra, pero aún no sabe para qué propósito destinará esos recursos</h2>
          <div class="cards">
            <div class="card">
              <img src="img\porcentaje1.JPG" alt="">
              <div class="contenido-texto-card">
              <p>De los hogares gasta menos que su presupuesto definido o ingresos que obtiene.</p>
              </div>
            </div>
            <div class="card">
              <img src="img\porcentaje2.JPG" alt="">
              <div class="contenido-texto-card">
              <p>De los hogares gasta más de su propio presupuesto.</p>
              </div>
            </div>
            <div class="card">
              <img src="img\porcentaje3.JPG" alt="">
              <div class="contenido-texto-card">
              <p>De los hogares no establece un presupuesto fijo.</p>
              </div>
            </div>
          </div>
        </section>
        <section>
          <section class="about-testimonios">
            <div class="contenedor">
              <h2 class="titulo">Testimonios</h2>
              <div class="testimonios-cont">
                <div class="testimonios-ind">
                  <img src="img\testimonio1.jpg" alt="">
                  <h3>Luisa P.</h3>
                  <p>"Ahora he aprendido a manejar mejor mis ahorros, y tengo un dominio completo de mis gastos y mis ingresos".</p>
                </div>
                <div class="testimonios-ind">
                  <img src="img\testimonio2.jpg" alt="">
                  <h3>Juan Camilo M.</h3>
                  <p>"nunca había tenido en cuenta la importancia de unas finanzas sanas, el asesoramiento que brindan me ha ayudado mucho con los presupuestos en mi hogar"</p>
                </div>
                <div class="testimonios-ind">
                  <img src="img\testimonio3.jpg" alt="">
                  <h3>Cristian A.</h3>
                  <p>" he cumplido muchas metas gracias a un buen manejo de mi dinero, así como con la creación de un pequeño plan financiero."</p>
                </div>
              </div>
            </div>
          </section>
        </section>
    </main>
    <footer>
      <div class="footer-container">
      <div class="footer-main">
        <div class="logo">
          <a href="index.php" id="logo">
            <img src="img\logo.png" alt="">
          </a>
        </div>
        <div class="footer-columna">
          <h3>Nuestra Compañia</h3>
          <nav>
            <a href="index.php"><p>Inicio </p></a>
            <a href="quienesSomos.php"><p>quienes somos</p></a>
            <a href="servicios.php"><p>servicios</p></a>
            <a href="contactenos.php"><p>Contactenos</p></a>
            <a href="Registrate.php"><p>Registrate</p></a>
          </nav>
        </div>
        <div class="footer-columna">
          <h3>Contactanos</h3>
          <span class="fa fa-map-marker"><p>123 Av. Americas </p></span>
          <span class="fa fa-phone"><p>(+57) 12 345678</p></span>
          <span class="fa fa-envelope"><p>info@tuahorropersonal.com</p></span>
        </div>

      </div>
    </div>

    <div class="footer-copy-redes">
      <div class="main-copy-redes">
        <div class="footer-copy">
          &copy; TuAhorroPersonal.com - Todos los derechos reservados
        </div>
        <div class="footer-redes">
          <a href="https://www.facebook.com/" target="_blank"  class="fa fa-facebook"></a>
          <a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a>
          <a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube-play"></a>
          <a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin"></a>
        </div>
      </div>
    </div>
    </footer>
    <script src="https://kit.fontawesome.com/8b67f1904a.js" crossorigin="anonymous"></script>
  </body>
</html>
