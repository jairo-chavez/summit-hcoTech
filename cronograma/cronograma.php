<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronograma</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
      /* Reset básico */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: sans-serif;
  padding-top: 4.3rem;
  background: #f9f9f9;

}

/* HEADER */
.header {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 10px;
  background: white;
  border-bottom: 1px solid #e6e6e6;
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 1500;
}

/* Botón hamburguesa (visible en móvil) */
.menu-btn {
  background: none;
  border: none;
  font-size: 26px;
  cursor: pointer;
  line-height: 1;
}

/* Logo centrado en móvil */
.logo {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}
.logo img {
  max-width: 100%;
  height: 44px; 
  object-fit: contain;
}

/* Sidebar (off-canvas móvil) */
.sidebar {
  position: fixed;
  top: 0;
  left: -260px;             /* oculto por defecto */
  width: 260px;
  height: 100vh;
  background: #333;
  color: #fff;
  padding-top: 60px;
  transition: left 0.32s ease;
  z-index: 1300;
  box-shadow: 2px 0 12px rgba(0,0,0,0.15);
}

.sidebar.open {
  left: 0;
}

.close-btn {
  position: absolute;
  top: 12px;
  right: 12px;
  background: none;
  border: none;
  color: #fff;
  font-size: 28px;
  cursor: pointer;
}

.sidebar ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.sidebar ul li {
  padding: 14px 18px;
  border-bottom: 1px solid rgba(255,255,255,0.06);
}

.sidebar ul li a {
  color: #fff;
  text-decoration: none;
  display: block;
  font-weight: 500;
}
.active {
    border-bottom: none;   /* quitamos el borde */
    background: rgb(255, 255, 255,0.08);   /* le damos fondo distinto */
    border-radius: 6px;    /* opcional, para que se vea como pill */
    padding: 8px;          /* un poco de espacio */
  }

/* Overlay (cuando el sidebar está abierto) */
.overlay {
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.45);
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.25s ease, visibility 0.25s ease;
  z-index: 1250;
}
.overlay.show {
  opacity: 1;
  visibility: visible;
}

/*heroooo*/
.hero picture,
.hero img {
  width: 100%;
  height: auto;
  display: block;
}


/* Sección cronograma */
.presentacion {
  text-align: center;
  padding: 10px 15px;
  color: #000;
  border-radius: 15px;
  max-width: 1000px;
  margin: 30px auto;
}

.presentacion .hero-texto h1 {
  font-size: 2rem; /* base para móviles */
  margin-bottom: 15px;
  letter-spacing: 1px;
  text-transform: uppercase;
  color: #32158c;
  font-weight: 700;
}
.presentacion .descripcion p {
  font-size: 1.3rem;
  line-height: 1.5;
  max-width: 90%;
  margin: 5px auto 20px auto;
  letter-spacing: 0.3px;
}
.descripcion{
  text-wrap: pretty;
}
.btn-registro{
  text-decoration: none;
  font-size: 1.3rem;
  color: #eee;
}
.boton-container{
  margin: 2rem 0;
  background-color: #32158c;
  padding: 0.5rem 1rem;
  box-shadow: 1px 1px 5ps #32158c;
  border-radius: 5px;
}
.boton-container:hover{
  background-color: #9b85a1ff;
  
}
.cronograma { 
  padding: 2rem 1rem; 
  font-family: Arial, sans-serif; 
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
} 
p{
  color: #333;
  font-size: 0.9rem;
}
/* ========cronograma============= */
    /* Tabs */
    .tabs {
      display: flex;
      gap: 10px;
      margin-top: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .tab {
      padding: 10px 20px;
      border: none;
      background: #eee;
      cursor: pointer;
      border-radius: 8px;
      transition: 0.3s;
      font-weight: bold;
    }

    .tab.active {
      background: #32158c;
      color: #fff;
    }

    /* Timeline */
    .timeline {
      position: relative;
      margin: 20px 0;
      padding-left: 0;
      display: flex;
      flex-direction: column;
      align-items: center; /* CENTRAR los eventos */
    }

    .evento {
      display: flex;
      flex-direction: column;
      align-items: center; /* CENTRAR los eventos */
      margin: 20px 0;
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.6s ease-out;
      position: relative;
      width: 90%;
      max-width: 700px;
    }
    .hora-workshop{ 
      width: 260px;
      margin-right: 20px;
      text-align: right;
  }

    .evento.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .evento::before {
      content: "";
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      top: 0;
      width: 18px;
      height: 18px;
      background: #e2ab1c;
      border-radius: 50%;
      border: 2px solid #fff;
      box-shadow: 0 0 0 2px #32158c;
    }

    .hora {
      font-weight: bold;
      color: #32158c;
      margin-bottom: 8px;
      display: block;
    }

    .detalle {
      background: #fff;
      padding: 15px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      width: 100%;
      text-align: center;
    }
    .detalle p{
      color: #333;
    }

    /* Ocultar contenido por defecto */
    .tab-content {
      display: none;
      width: 100%;
      background-color:  #f9f9f9;
    }

    .tab-content.active {
      display: block;
    }
    .evento::before {
  content: "";
  position: absolute;
  left: 30%;
  transform: translateX(-50%);
  top: -2px; /* ajustado para que no tape el texto */
  width: 18px;
  height: 18px;
  background: #e2ab1c;
  border-radius: 50%;
  border: 2px solid #fff;
  box-shadow: 0 0 0 2px #32158c;
  animation: pulse-circle 2s infinite;
}


/* Animación pulse */
@keyframes pulse-circle {
  0% {
    box-shadow: 0 0 0 0 rgba(226,171,28, 0.7);
  }
  70% {
    box-shadow: 0 0 0 15px rgba(226,171,28, 0);
  }
  100% {
    box-shadow: 0 0 0 0 rgba(226,171,28, 0);
  }
}
.subtitulo{
  margin-top: 2.5rem;
}
 h2 {
      text-align: center;
      color: #32158c;
      margin-bottom: 20px;
    }


/*footer*/
.footer {
  background-color: #32158c;
  color: white;
  text-align: center;
  padding: 20px 10px;
}

.social-icons {
  margin-bottom: 10px;
}

.social-icons a {
  color: white;
  font-size: 1.5rem;
  margin: 0 10px;
  display: inline-block;
  transition: transform 0.3s ease, color 0.3s ease;
}

.social-icons a:hover {
  color: #04a364; /* verde corporativo */
  transform: scale(1.2);
}

.copy {
  color: #fff;
  font-size: 0.9rem;
  margin-top: 5px;
}


@media (min-width: 1025px) {

   /* Oculta los controles móviles */
  .menu-btn,
  .close-btn,
  .overlay { display: none; }

  /* Header layout para escritorio */
  .header {
    padding: 12px 28px;
    align-items: center;
  }

  /* Logo a la izquierda */
  .logo {
    flex: 0 0 auto;
    justify-content: flex-start;
  }
  .logo img { height: 64px; }

  /* Convertimos el sidebar en nav horizontal visible */
  .sidebar {
    position: static;
    left: auto;
    width: auto;
    height: auto;
    background: transparent;
    color: inherit;
    padding: 0;
    box-shadow: none;
    transition: none;
    display: block;   /* se muestra en la cabecera */
    margin-left: auto; /* empuja al nav a la derecha */
  }

  .sidebar ul {
    display: flex;
    gap: 22px;
    align-items: center;
  }

  .sidebar ul li {
    padding: 0;
    border: none;
  }

  .sidebar ul li a {
    font-size: 1.3rem;
    color: #32158c;
    text-decoration: none;
    font-weight: 600;
    padding: 8px 10px;
    transition: color 0.18s ease, transform 0.18s ease;
  }

  .sidebar ul li a:hover {
    border-bottom: 1px solid #32158c;
    transform: translateY(-2px);
  }
  .active {
  border-bottom: 2px solid #32158c;
  font-weight: 600;
}

  
  /*cronograma*/
  .tabs {
      gap: 30px;
      margin-top: 30px;
    }
     .tab {
      font-size: 1.2rem;
      padding: 10px 20px;
      border-radius: 8px;
    }
.evento {
        flex-direction: row;
        align-items: flex-start;
        justify-content: center; /* CENTRAR horizontal */
        margin: 10px 0;
      }

      .evento::before {
        left: 0;
        transform: none;
      }

      .hora {
        width: 120px;
        margin-right: 20px;
        text-align: right;
      }
      
      .hora-workshop{ 
      margin: 0;
        margin-left: 30px;
        display: flex;
        flex-direction: column;
        align-items:center;
        gap: 10px;
  }

      .detalle {
        width: calc(100% - 140px);
        text-align: left;
        
      }
      .detalle p{
      color: #32158c;
    }
}
    </style>
</head>
<body>
    <header class="header">
  <button id="menu-btn" class="menu-btn" aria-label="Abrir menú" aria-expanded="false">&#9776;</button>

  <div class="logo">
    <a href="../index.php"><img src="../imagenes/LOGO SUMMIT-01.png" alt="Logo de la empresa"></a>
  </div>

  <!-- El mismo nav se usa para móvil (sidebar) y escritorio (barra horizontal) -->
  <nav class="sidebar" id="sidebar" aria-hidden="true">
    <button id="close-btn" class="close-btn" aria-label="Cerrar menú">&times;</button>
    <ul>
      <li><a href="../talleres/taller.php" >Conferencias y Paneles</a></li>
      <li><a href="../cronograma/cronograma.php" class="active">Cronograma</a></li>
      <li><a href="../ponentes/ponentes.php">Ponentes</a></li>
      <li><a href="../juegoEmpresario/juegoEmpresaior.php">Business Game</a></li>
      <li><a href="../pitch/pitch.php">Ring de las Startups</a></li>
      <li><a href="../awards/awards.php">Incuval Awards</a></li>
    </ul>
  </nav>
</header>
<!-- Overlay (clic fuera cierra el sidebar en móvil) -->
<div id="overlay" class="overlay" aria-hidden="true"></div>

  <!-- HERO IMAGE -->
<section class="hero">
  <picture>
    <!-- Escritorio -->
    <source media="(min-width: 1024px)" srcset="../imagenes/hero-escritorio.jpg">
    <!-- Tablet -->
    <source media="(min-width: 480px)" srcset="../imagenes/hero-tablet.jpg">
    <!-- Móvil (por defecto) -->
    <img src="../imagenes/header-principal.jpg" alt="Imagen principal">
  </picture>
</section>


<!--cronograma-->

<section class="presentacion">
  <div class="hero-texto">
    <h1>CRONOGRAMA</h1>
  </div>
  <div class="descripcion">
    <p>Descubre lo que viene y organiza tu participación. Revisa nuestra agenda y planea tu experiencia en cada día del evento.</p>
  </div>
</section>

<div class="tabs">
  <button class="tab active" data-day="day1">Día 1</button>
  <button class="tab" data-day="day2">Día 2</button>
  <button class="tab" data-day="day3">Día 3</button>
  <button class="tab" data-day="day4">Día 4</button>
  <button class="tab" data-day="day5">Día 5</button>
</div>

<!-- Contenido Día 1 -->
<div id="day1" class="tab-content active">
    <div class="subtitulo">
        <h2>Mype Up!</h2>
    </div>
  <div class="timeline">
    <div class="boton-container">
      <a href="https://campusincuval.unheval.edu.pe/inscripcion-evento/9" target="_blank" class="btn-registro">Regístrate aquí</a>
    </div>
    <div class="evento">
      <span class="hora">09:30 AM</span>
      <div class="detalle">
        <h3>Inauguración</h3>
      </div>
    </div>
    <div class="evento">
      <span class="hora">10:00 AM</span>
      <div class="detalle">
        <h3>Businees Game (Tres modalidades)</h3>
      </div>
    </div>
    <div class="evento">
      <span class="hora">11:00 AM</span>
      <div class="detalle">
        <h3>Businees Game (Tres modalidades)</h3>
      </div>
    </div>
    <div class="evento">
      <span class="hora">12:00 AM</span>
      <div class="detalle">
        <h3>Businees Game (Tres modalidades)</h3>
      </div>
    </div>

    <div class="evento">
      <span class="hora">5:30 PM</span>
      <div class="detalle">
        <h3>Conferencia 1:<br>
Cómo aterrizar tu idea de negocio paso a paso</h3><br>
        <p>Karina Rebolledo</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">6:00 PM</span>
      <div class="detalle">
        <h3>Conferencia 2: <br>Control sin enredos: apps y tips para tus ventas e ingresos</h3><br>
        <p>Benjamín Carrasco</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">6:30 PM</span>
      <div class="detalle">
        <h3>Conferencia 3:<br>
Mi primera facturación como emprendedor: Una historia real de éxito regional</h3><br>
<p>Vanesa Orizano</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">7:00 PM</span>
      <div class="detalle">
        <h3>Conferencia 4:<br>Formaliza sin miedo: ¿qué necesitas para operar legalmente en Perú? Descubre cómo crear tu empresa en 24h</h3> <br>
        <p>Olga Lazo</p>
      </div>
    </div>
  </div>
</div>

<!-- Contenido Día 2 -->
<div id="day2" class="tab-content">
  <div class="subtitulo">
        <h2>Startup bootcamp</h2>
  </div>
  <div class="timeline">
    <div class="boton-container">
      <a href="https://campusincuval.unheval.edu.pe/inscripcion-evento/10" target="_blank" class="btn-registro">Regístrate Aquí</a>
    </div>
    <div class="evento">
      <span class="hora hora-workshop">09:00 AM
        <span>a</span>
        <span>12:00 PM</span>
      </span>
      <div class="detalle">
        <h3>Workshop 1:<br>¿Cómo acelerar el ecosistema emprendedor Peruano?</h3><br>
        <p>Carlos Ventura - Arturo Coral - Joseph Luján</p>
      </div>
    </div>
    
    <div class="boton-container">
      <a href="https://campusincuval.unheval.edu.pe/inscripcion-evento/9" target="_blank" class="btn-registro">Regístrate aquí</a>
    </div>
    <div class="evento">
      <span class="hora">5:30 PM</span>
      <div class="detalle">
        <h3>Conferencia 5: <br>oportunidades para startups peruanas en el ecosistema chileno.</h3><br>
        <p>Luis Rebolledo - Alex Ortega</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">6:00 PM</span>
      <div class="detalle">
        <h3>Workshop 2:<br>ThinkLikeAStartup: Design Thinking para emprendedores.</h3><br>
        <p>Juan Miguel Galeas</p> 
      </div>
    </div>
    <div class="evento">
      <span class="hora">6:30 PM</span>
      <div class="detalle">
        <h3>Panel 1:<br> VC Sin Filtro: La Hora de la Verdad para Startups.</h3><br>
        <p>Moderador: Alex Altamirano; <br>VC: Elizabeth Acuña - Kevin Granda</p>        
      </div>
    </div>
    <div class="evento">
      <span class="hora">7:00 PM</span>
      <div class="detalle">
        <h3>Workshop 3:<br> Speed Mentoring: 3 rondas con mentores altamente cualificados.</h3><br>
        <p>Moderadora: Cecilia zegarra - Ricardo Chang - Diana Mori</p>        
      </div>
    </div>
  </div>
</div>

<!-- Contenido Día 3 -->
<div id="day3" class="tab-content">
  <div class="subtitulo">
    <h2>Startup Power</h2>
  </div>
  <div class="timeline">
    <div class="boton-container">
      <a href="https://campusincuval.unheval.edu.pe/inscripcion-evento/9" target="_blank" class="btn-registro">Regístrate aquí</a>
    </div>
    <div class="evento">
      <span class="hora">09:30 AM</span>
      <div class="detalle">
        <h3>Conferencia 6:<br> Oportunidades para CEO’S y profesionales en el extranjero</h3><br>
        <p>Miura Fernández</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">10:00 AM</span>
      <div class="detalle">
        <h3>Confere1ncia 7:<br>¿Qué necesita una startup en el 2025 para crecer en Perú a LatAm?</h3><br>
        <p>Joseph Luján</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">10:30 AM</span>
      <div class="detalle">
        <h3>Conferencia 8:<br> GROWTH PARA STARTUPS</h3><br>
        <p>Kevin Vilcherrez</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">11:00 AM</span>
      <div class="detalle">
        <h3>Workshop 4:<br> Training pitch</h3><br>
        <p>Andrea Dulanto - Alessandra Rivera</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">11:30 AM</span>
      <div class="detalle">
        <h3>Workshop 4:<br> Training pitch</h3><br>
        <p>Andrea Dulanto - Alessandra Rivera</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">12:00 PM</span>
      <div class="detalle">
        <h3>Workshop 4:<br> Training pitch</h3><br>
        <p>Andrea Dulanto - Alessandra Rivera</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">12:30 PM</span>
      <div class="detalle">
        <h3>Workshop 4:<br> Training pitch</h3><br>
        <p>Andrea Dulanto - Alessandra Rivera</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">3:00 PM</span>
      <div class="detalle">
        <h3>Conferencia 9:<br>Aspectos legales básicos que toda startup debe conocer</h3><br>
        <p>Antonella Puntriano</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">3:30 PM</span>
      <div class="detalle">
        <h3>Presentación Generación de Impacto
Utec Ventures</h3>
      </div>
    </div>
    <div class="evento">
      <span class="hora">4:00 PM</span>
      <div class="detalle">
        <h3>Demo Day Incubación</h3>
      </div>
    </div>
    <div class="evento">
      <span class="hora">4:30 PM</span>
      <div class="detalle">
        <h3>Demo Day Incubación</h3>
      </div>
    </div>
    <div class="evento">
      <span class="hora">5:00 PM</span>
      <div class="detalle">
        <h3>Panel 2:<br>
Tendencias disruptivas hacia el 2030 en LatinoAmérica</h3><br>
        <p>Moderador: Alex Martínez <br> Panelistas: Adolfo Palomino - Guillermo Pagano</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">5:30 PM</span>
      <div class="detalle">
        <h3>Demo Day Incubación</h3><br>
<p>Jurado: Joseph Luján, Andrea Dulanto y Adolfo Palomino</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">6:00 PM</span>
      <div class="detalle">
        <h3>Demo Day Incubación</h3><br>
<p>Jurado: Joseph Luján - Andrea - Adolfo Palomino</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">6:30 PM</span>
      <div class="detalle">
        <h3>Panel 3:<br>Emprender desde la universidad: spin-offs y levantar capital.</h3><br>
        <p>Moderador:  Carlos Ventura(xrai, Petclub, sprintia, Dommis)</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">7:00 PM</span>
      <div class="detalle">
        <h3>Conversatorio<br>Cap table y cómo tener una relación a largo plazo entre founders</h3><br>
        <p>Jurado: Antonella Puntriano - Joseph Luján</p>
      </div>
    </div>
  </div>
</div>

<!-- Contenido Día 4 -->
<div id="day4" class="tab-content">
  <div class="subtitulo">
    <h2>Capital Day</h2>
  </div>
  <div class="timeline">
    <div class="boton-container">
      <a href="https://campusincuval.unheval.edu.pe/inscripcion-evento/9" target="_blank" class="btn-registro">Regístrate aquí</a>
    </div>
    <div class="evento">
      <span class="hora">9:00 AM</span>
      <div class="detalle">
        <h3>INAUGURACIÓN DE LA FERIA</h3>
      </div>
    </div>
    <div class="evento">
      <span class="hora">09:30 AM</span>
      <div class="detalle">
        <h3>Recorrido de la Feria</h3>
      </div>
    </div>
    <div class="evento">
      <span class="hora">10:00 AM</span>
      <div class="detalle">
        <h3>Conferencia 10:<br> PRESENTACIÓN DEL PROGRAMA MYPES 4.0 PARA LA GENERACIÓN PLATEADA</h3><br>
        <p>Carlos Ventura - Mónica Reyes</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">10:30 AM</span>
      <div class="detalle">
        <h3>Conferencia 10:<br> PRESENTACIÓN DEL PROGRAMA MYPES 4.0 PARA LA GENERACIÓN PLATEADA </h3><br>
        <p>Carlos Ventura - Mónica Reyes</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">11:00 AM</span>
      <div class="detalle">
        <h3>Conferencia 11:<br> IA para MYPES automatiza y potencia tu emprendimiento</h3><br>
        <p>Adolfo palomino</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">11:30 AM</span>
      <div class="detalle">
        <h3>Panel 4 Casos de éxito de emprendedores.</h3><br>
        <p>Moderador: Alex (KUZIFUND, spirutech, mayugo, BANKYTO)</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">12:00 PM</span>
      <div class="detalle">
        <h3>Podcast en vivo (privado):<br>Inversionistas sin filtro: lo que sí y lo que no</h3><br>
        <p>Joseph + Inversionistas</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">12:30 PM</span>
      <div class="detalle">
        <h3>Podcast en vivo (privado):<br>Inversionistas sin filtro: lo que sí y lo que no</h3><br>
        <p>Joseph + Inversionistas</p>
      </div>
    </div>

    
  </div>
</div>

<!-- Contenido Día 5 -->
<div id="day5" class="tab-content">
  <div class="subtitulo">
    <h2>Gala Emprendedora</h2>
  </div>
  <div class="timeline">
    <div class="boton-container">
      <a href="https://campusincuval.unheval.edu.pe/inscripcion-evento/9" target="_blank" class="btn-registro">Regístrate aquí</a>
    </div>
    <div class="evento">
      <span class="hora">3:30 PM</span>
      <div class="detalle">
        <h3>Ring de las startups final</h3><br>
        <p>jurados: Adolfo Palomino - Antonella Puntriano</p>
      </div>
    </div>
    <div class="evento">
      <span class="hora">4:00 PM</span>
      <div class="detalle">
        <h3>Ring de las startups final</h3>
      </div>
    </div>
    <div class="evento">
      <span class="hora">4:30 PM</span>
      <div class="detalle">
        <h3>Clausura del Evento</h3>
      </div>
    </div>
    <div class="evento">
      <span class="hora">5:00 PM</span>
      <div class="detalle">
        <h3>Clausura del Evento</h3>
      </div>
    </div>
    <div class="evento">
      <span class="hora">5:30 PM</span>
      <div class="detalle">
        <h3>Clausura del Evento</h3>
      </div>
    </div>
  </div>
</div>

<!--footer-->
<footer class="footer">
  <div class="social-icons">
    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
  </div>
  <p class="copy">&copy; <span id="year"></span> Incuval Ventures. Todos los derechos reservados.</p>
</footer>

<script> 
  document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.getElementById("menu-btn");
  const closeBtn = document.getElementById("close-btn");
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");

  function openSidebar() {
    sidebar.classList.add("open");
    overlay.classList.add("show");
    menuBtn.setAttribute("aria-expanded", "true");
    sidebar.setAttribute("aria-hidden", "false");
    overlay.setAttribute("aria-hidden", "false");
  }

  function closeSidebar() {
    sidebar.classList.remove("open");
    overlay.classList.remove("show");
    menuBtn.setAttribute("aria-expanded", "false");
    sidebar.setAttribute("aria-hidden", "true");
    overlay.setAttribute("aria-hidden", "true");
  }

  menuBtn.addEventListener("click", openSidebar);
  closeBtn.addEventListener("click", closeSidebar);
  overlay.addEventListener("click", closeSidebar);

  // 🔹 Aquí el fix: cerrar menú al hacer click en cualquier enlace del sidebar
  document.querySelectorAll("#sidebar a").forEach((link) => {
    link.addEventListener("click", () => {
      closeSidebar();
      // No se hace preventDefault, así que la redirección funciona normal
    });
  });

  // Cierra el menú si el usuario presiona Escape
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeSidebar();
  });

  // Si el usuario cambia el tamaño y pasa a desktop, asegurar que el sidebar se cierre
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 768) closeSidebar();
  });
});


// Tabs
    const tabs = document.querySelectorAll(".tab");
    const contents = document.querySelectorAll(".tab-content");

    tabs.forEach(tab => {
      tab.addEventListener("click", () => {
        tabs.forEach(t => t.classList.remove("active"));
        contents.forEach(c => c.classList.remove("active"));

        tab.classList.add("active");
        document.getElementById(tab.dataset.day).classList.add("active");

        // Animación al cambiar tab
        revealEvents();
      });
    });

    // Animación scroll fade-in
    function revealEvents() {
      const eventos = document.querySelectorAll(".tab-content.active .evento");
      eventos.forEach(evento => {
        evento.classList.remove("visible");
      });

      setTimeout(() => {
        eventos.forEach((evento, index) => {
          setTimeout(() => {
            evento.classList.add("visible");
          }, index * 150);
        });
      }, 100);
    }

    // Animación inicial
    window.addEventListener("load", revealEvents);

    // Scroll para animar si hay mucho contenido
    window.addEventListener("scroll", () => {
      const eventos = document.querySelectorAll(".tab-content.active .evento");
      eventos.forEach(evento => {
        const top = evento.getBoundingClientRect().top;
        if(top < window.innerHeight - 50){
          evento.classList.add("visible");
        }
      });
    });

    
//footer
document.getElementById("year").textContent = new Date().getFullYear();
</script>
</body>
</html>