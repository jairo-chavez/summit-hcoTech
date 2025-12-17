<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>talleres</title>
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
  background-color: #020202;
}

/* HEADER */
.header {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 10px;
  background: #020202;
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

/*conferencias y paneles*/
.eventos {
  padding: 2rem 1rem;
  background: #020202;
  font-family: 'Arial', sans-serif;
  max-width: 900px;
  margin: 0 auto;
  border-radius: 12px;
}

.eventos h1 {
  font-size: 1.6rem;
  margin-bottom: 1.5rem;
  font-weight: bold;
  color: #f5f5f5;
  text-align: center;
}

/* ===== TABS ===== */
.tabs {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 1.5rem;
  margin-bottom: 1.5rem;
  border-bottom: 2px solid #333;
}

.tab {
  position: relative;
  padding: 0.8rem 1.2rem;
  border: none;
  border-radius: 6px;
  background: none;
  font-size: 1rem;
  color: #aaa;
  cursor: pointer;
  font-weight: bold;
  transition: color 0.3s;
}

.tab:hover {
  background: #fff;
}

.tab.active {
  background: #f5f5f5;
  color: #111;
}

.tab-content {
  display: none;
}

.tab-content.active {
  display: block;
}

/* ===== EVENTOS ===== */
.event-list {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}
.event-list h2{
  color: #04a364;
  text-align: center;
}
.event-card {
  display: flex;
  flex-direction: column;
  background: #f5f5f5;
  border-radius: 10px;
  overflow: hidden;
  padding: 1rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  text-align: center;
}
.event-card h2{
  color: #000;
  margin: 1rem 0;
}
.event-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.15);
}

/* ===== Ponente único ===== */
.event-img.single {
  width: 100%;
  max-width: 200px;
  margin: 0 auto 1rem;
}

.event-img.single img {
  width: 90%;
  border-radius: 8px;
}

.event-img.single p {
  margin-top: 0.5rem;
  font-weight: bold;
  text-align: center;
}

/* ===== Varios ponentes ===== */
.event-img.multiple-top {
  display: flex;
  justify-content: center;
  gap: 1rem;
  flex-wrap: wrap;
  margin-bottom: 1rem;
}

.event-img.multiple-top .ponente {
  text-align: center;
  max-width: 160px;
}

.event-img.multiple-top img {
  width: 100%;
  border-radius: 8px;
}

.event-info {
  flex: 1;
}

.event-info h3 {
  font-size: 1.2rem;
  margin: 0.4rem 0;
  color: #000;
}

.event-info .hora,
.event-info .modalidad {
  font-size: 0.9rem;
  color: #444;
  font-weight: bold;
}

.xde{
    display: flex;
    flex-direction: column;
  }

.xde2{
    display: flex;
    gap: 1rem;
    justify-content: center;
  }
    .modalidad2{
      font-size: 0.9rem;
  color: #444;
  font-weight: bold;
    display: flex;
    flex-direction: column;
  }
  .youtu span{
    padding-left: 0.5rem;
  }
  .face span{
    padding-left: 0.5rem;
  }
/*footer*/
.footer {
  background-color: #020202;
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
  font-size: 0.9rem;
  margin-top: 5px;
}

@media (min-width: 1025px) {

    body {
  padding-top: 5.5rem;
}
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
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    padding: 8px 10px;
    transition: color 0.18s ease, transform 0.18s ease;
  }

  .sidebar ul li a:hover {
    border-bottom: 1px solid #04a364;
    transform: translateY(-2px);
  }
  .active {
  border-bottom: 2px solid #04a364;
  color: #020202;
  font-weight: 600;
}

/*conferencias-paneles*/

.event-card .event-img.single {
    margin: 0;
  }

  .event-info {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  max-width: 600px;
  margin-left: 3rem;
  text-align: center;
}

  .event-card {
    flex-direction: row;
    text-align: left;
    align-items: center;
  }
  .xde{
    flex-direction: row;
    align-items: center;
    gap: 3rem;
  }
  .xde2{
flex-direction: row;    
gap: 3rem;
align-items: center;
  }
  .modalidad{
    text-align: center;
  }
  .modalidad2{
    display: flex;
  }
  .youtu{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
  }
  .face{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
  }
 

  /* Alternar izquierda/derecha */
  .event-card:nth-child(even):has(.single) {
    flex-direction: row-reverse;
    text-align: left;
  }

  /* Para varios ponentes, siempre arriba */
  .event-card:has(.multiple-top) {
    flex-direction: column;
    text-align: center;
    align-items: center;
  }
  .event-img.multiple-top {
    gap: 5rem;
}
.event-img.multiple-top .ponente {
  max-width: 180px;
}
.separador{
  margin: 0 1rem;
}

}
    </style>

</head>
<body>
  <header class="header">
  <button id="menu-btn" class="menu-btn" aria-label="Abrir menú" aria-expanded="false">&#9776;</button>

  <div class="logo">
    <a href="../index.php"><img src="../imagenes/LOGO SUMMIT-blanco.png" alt="Logo de la empresa"></a>
  </div>

  <!-- El mismo nav se usa para móvil (sidebar) y escritorio (barra horizontal) -->
  <nav class="sidebar" id="sidebar" aria-hidden="true">
    <button id="close-btn" class="close-btn" aria-label="Cerrar menú">&times;</button>
    <ul>
      <li><a href="../talleres/taller.php" class="active">Conferencias y paneles</a></li>
      <li><a href="../cronograma/cronograma.php">Cronograma</a></li>
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
    <source media="(min-width: 1024px)" srcset="../imagenes/conferencias-paneles/header-escritorio.jpg">
    <!-- Tablet -->
    <source media="(min-width: 480px)" srcset="../imagenes/conferencias-paneles/header-tablet.jpg">
    <!-- Móvil (por defecto) -->
    <img src="../imagenes/conferencias-paneles/header-movil.jpg" alt="Imagen principal">
  </picture>
</section>


  
<section class="eventos">
  <div class="tabs">
    <button class="tab active" data-tab="day1">15 SET</button>
    <button class="tab" data-tab="day2">16 SET</button>
    <button class="tab" data-tab="day3">17 SET</button>
    <button class="tab" data-tab="day4">18 SET</button>
  </div>

  <!-- Día 1 -->
  <div class="tab-content active" id="day1">
    <div class="event-list">
      <h2>MYPE UP</h2>

      <div class="event-card">
        <div class="event-img single">
          <img src="../imagenes/ponentes/KARINA REBOLLEDO.png" alt="Karina Revolledo">
          <p>Karina Revolledo</p>
        </div>
        <div class="event-info">
          <h3>¿Cómo aterrizar tu idea de negocio paso a paso?</h3>
          <div class="xde2">
            <span class="hora">⏰ 4:00 PM</span> | 
            <span class="modalidad">💻 Virtual</span>
          </div>
          
        </div>
      </div>

      <div class="event-card">
        <div class="event-img single">
          <img src="../imagenes/ponentes/Benjamín Carrasco.png" alt="Benjamín Carrasco">
          <p>Benjamín Carrasco</p>
        </div>
        <div class="event-info">
          <h3>Control sin enredos: Apps y tips para tus eventos e ingresos</h3>
          <div class="xde2">
            <span class="hora">⏰ 5:00 PM</span> | 
            <span class="modalidad">💻 Virtual</span>
          </div>
        </div>
      </div>

      <div class="event-card">
        <div class="event-img single">
          <img src="../imagenes/ponentes/Vanesa.png" alt="Vanesa Orizano">
          <p>Vanesa Orizano</p>
        </div>
        <div class="event-info">
                    <h3>Mi primera facturación como emprendedor - Una historia real de éxito regional</h3>
          <div class="xde2">
                      <span class="hora">⏰ 6:00 PM</span> | <span class="modalidad">💻 Virtual</span>
          </div>
        </div>
      </div>

      <div class="event-card">
        <div class="event-img single">
          <img src="../imagenes/ponentes/Olga Marisabel Lazo Segura.png" alt="Olga Lazo">
          <p>Olga Lazo</p>
        </div>
        <div class="event-info">
          <h3>Formaliza sin miedo: ¿Qué necesitas para operar legalmente en Perú?</h3>
          <div class="xde2">
                      <span class="hora">⏰ 7:00 PM</span> | <span class="modalidad">💻 Virtual</span>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Día 2 -->
  <div class="tab-content" id="day2">
    <div class="event-list">
      <div class="event-card">
        <h2>Workshop 1</h2>
        <div class="event-img multiple-top">
          <div class="ponente">
            <img src="../imagenes/ponentes/Carlos Ventura Matos.png" alt="Luis Rebolledo">
            <p>Carlos Ventura</p>
          </div>
          <div class="ponente">
            <img src="../imagenes/ponentes/arturo-coral.png" alt="Alex Ortega">
            <p>Arturo Coral</p>
          </div>
          <div class="ponente">
            <img src="../imagenes/ponentes/Joseph Marcial, Luján Carrión.png" alt="Alex Ortega">
            <p>Joseph Luján</p>
          </div>
        </div>
        <div class="event-info">
          <h3>¿Cómo acelerar el ecosistema emprendedor peruano?</h3>
          <div class="xde">
            <span class="hora">⏰ 9:00 AM</span>
            <span class="modalidad">📍 Cámara de Comercio e Industrias de Huánuco<br>
            (Jirón Gral. Prado 873, Huánuco)</span>
          </div> 
          
        </div>
      </div>


      <div class="event-card">
        <h2>Conferencia</h2>
        <div class="event-img multiple-top">
          <div class="ponente">
            <img src="../imagenes/ponentes/Luis Rebolledo Ortiz.png" alt="Luis Rebolledo">
            <p>Luis Rebolledo</p>
          </div>
          <div class="ponente">
            <img src="../imagenes/ponentes/Alex Ortega.png" alt="Alex Ortega">
            <p>Alex Ortega</p>
          </div>
        </div>
        <div class="event-info">
          <h3>Oportunidades para Startups Peruanas en el Ecosistema Chileno</h3>
          <div class="xde2">
                      <span class="hora">⏰ 5:30 PM</span> | <span class="modalidad">💻 Virtual</span>

          </div>
        </div>
      </div>

      <div class="event-card">
        <div class="event-img multiple-top">
          <div class="ponente">
            <img src="../imagenes/ponentes/JUAN MIGUEL GALEAS.png" alt="Luis Rebolledo">
            <p>Juan Miguel Galeas</p>
          </div>
        </div>
        <div class="event-info">
          <h2>Workshop 2</h2>
          <h3>Think Like a Startup<br>Design Thinking para emprendedores</h3>
          <div class="xde2">
                      <span class="hora">⏰ 6:00 PM</span> | <span class="modalidad">💻 Virtual</span>

          </div>
        </div>
      </div>

      
      <div class="event-card">
        <h2>Panel</h2>
        <div class="event-img multiple-top">
          <div class="ponente">
            <img src="../imagenes/ponentes/KEVIN GRANDA.png" alt="Luis Rebolledo">
            <p>Kevin Granda</p>
          </div>
          <div class="ponente">
            <img src="../imagenes/ponentes/ALEXANDER MARTINEZ.png" alt="Alex Ortega">
            <p>Alexander Martínez</p>
          </div>
          <div class="ponente">
            <img src="../imagenes/ponentes/Elizabeth Acuña Rivera.png" alt="Alex Ortega">
            <p>Elizabeth Acuña</p>
          </div>
        </div>
        <div class="event-info">
          <h3>VC sin filtro <br>La hora de la verdad de las startups</h3>
          <div class="xde2">
                      <span class="hora">⏰ 6:30 PM</span> | <span class="modalidad">💻 Virtual</span>
          </div>
        </div>
      </div>

      <div class="event-card">
        <h2>Workshop 3</h2>
        <div class="event-img multiple-top">
          <div class="ponente">
            <img src="../imagenes/ponentes/Cecilia Zegarra Benavides.png" alt="Luis Rebolledo">
            <p>Cecilia Zegarra</p>
          </div>
          <div class="ponente">
            <img src="../imagenes/ponentes/Ricardo Javier Chang Lau.png" alt="Alex Ortega">
            <p>Ricardo Chang</p>
          </div>
          <div class="ponente">
            <img src="../imagenes/ponentes/Diana Lisa Mori Rodrigo.png" alt="Alex Ortega">
            <p>Diana Mori</p>
          </div>
        </div>
        <div class="event-info">
          <h3>Speed Mentoring<br>3 rondas con mentores altamente cualificados</h3>
          <div class="xde2">
            <span class="hora">⏰ 7:00 PM</span> | <span class="modalidad">💻 Virtual</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Día 3 -->
  <div class="tab-content" id="day3">
    <div class="event-list">
      <h2>Startup Power</h2>

      <div class="event-card">
        <div class="event-img single">
          <img src="../imagenes/ponentes/miura fernández garcía.png" alt="Karina Revolledo">
          <p>Miura Fernández</p>
        </div>
        <div class="event-info">
          <h2>Conferencia</h2>
          <h3>Oportunidas para CEO'S y profesionales en el extranjero</h3>
          <div class="xde">
            <span class="hora">⏰ 9:30 AM</span>
            <span class="modalidad">📍 Cámara de Comercio e Industrias de Huánuco<br>
          (Jirón Gral. Prado 873, Huánuco)</span>
          </div>
          
        </div>
      </div>

      <div class="event-card">
        <div class="event-img single">
          <img src="../imagenes/ponentes/Joseph Marcial, Luján Carrión.png" alt="Benjamín Carrasco">
          <p>Joseph Luján</p>
        </div>
        <div class="event-info">
          <h2>Conferencia</h2>
          <h3>¿Qué necesita una startup en el 2025 para crecer en Perú a LATAN</h3>
          <div class="xde"> 
            <span class="hora">⏰ 10:00 AM</span><span class="modalidad">📍 Cámara de Comercio e Industrias de Huánuco<br>
          (Jirón Gral. Prado 873, Huánuco)</span>
          </div>
          
        </div>
      </div>

      <div class="event-card">
        <div class="event-img single">
          <img src="../imagenes/ponentes/Kevin Edinson Vilcherres Trinidad.png" alt="Benjamín Carrasco">
          <p>Kevin Vilcherres</p>
        </div>
        <div class="event-info">
          <h2>Conferencia</h2>
          <h3>Growth para startups</h3>
          <div class="xde">
            <span class="hora">⏰ 10:30 AM</span><span class="modalidad">📍 Cámara de Comercio e Industrias de Huánuco<br>
          (Jirón Gral. Prado 873, Huánuco)</span>
          </div>
          
        </div>
      </div>

      <div class="event-card">
        <h2>Workshop 4</h2>
        <div class="event-img multiple-top">
          <div class="ponente">
            <img src="../imagenes/ponentes/ALESSANDRA RIVERA.png" alt="Luis Rebolledo">
            <p>Alessandra Rivera</p>
          </div>
          <div class="ponente">
            <img src="../imagenes/ponentes/ANDREA DULANTO.png" alt="Alex Ortega">
            <p>Andrea Dulanto</p>
          </div>

        </div>
        <div class="event-info">
          <h3>Training Pitch</h3>
          <div class="xde">
            <span class="hora">⏰ 11:00 AM</span>
            <span class="modalidad">📍 Cámara de Comercio e Industrias de Huánuco<br>
          (Jirón Gral. Prado 873, Huánuco)</span>
          </div>
          
        </div>
      </div>


      <div class="event-card">
        <div class="event-img single">
          <img src="../imagenes/ponentes/ANTONELLA PUNTRIANO.png" alt="Olga Lazo">
          <p>Antonella Puntriano</p>
        </div>
        <div class="event-info">
          <h2>Conferencia</h2>
          <h3>Aspectos legales básicos que toda startup debe conocer</h3>
          <div class="xde">
            <span class="hora">⏰ 3:00 PM</span>
            <span class="modalidad">📍 Cámara de Comercio e Industrias de Huánuco<br>
          (Jirón Gral. Prado 873, Huánuco)</span>
          </div>
          
        </div>
      </div>

         <div class="event-card">
        <h2>Scale 5G</h2>
        <div class="event-img multiple-top">
          <div class="ponente">
            <p>Jurado</p>
            <img src="../imagenes/ponentes/Joseph Marcial, Luján Carrión.png" alt="Luis Rebolledo">
            <p>Joseph Luján</p>
          </div>
          <div class="ponente">
            <p>Jurado</p>
            <img src="../imagenes/ponentes/ANDREA DULANTO.png" alt="Alex Ortega">
            <p>Andrea Dulanto</p>
          </div>
          <div class="ponente">
            <p>Jurado</p>
            <img src="../imagenes/ponentes/Adolfo Hernán Palomino Portugal.png" alt="Alex Ortega">
            <p>Adolfo Palomino</p>
          </div>
        </div>
        <div class="event-info">
          <h3>Demo Day</h3>
          <div class="xde">
             <span class="hora">⏰ 4:00 PM</span>
             <span class="modalidad">📍 Cámara de Comercio e Industrias de Huánuco<br>
          (Jirón Gral. Prado 873, Huánuco)</span>
          </div>
         
        </div>
      </div>

      <div class="event-card">
        <h2>Panel 2</h2>
        <div class="event-img multiple-top">
          <div class="ponente">
            <p>Panelista</p>
            <img src="../imagenes/ponentes/Adolfo Hernán Palomino Portugal.png" alt="Luis Rebolledo">
            <p>Adolfo Palomino</p>
          </div>
          <div class="ponente">
            <p>Moderador</p>
            <img src="../imagenes/ponentes/ALEXANDER MARTINEZ.png" alt="Alex Ortega">
            <p>Alexander Martínez</p>
          </div>
          <div class="ponente">
            <p>Panelista</p>
            <img src="../imagenes/ponentes/GUILLERMO FOSHLEN PAGANO FAUSTINO.png" alt="Alex Ortega">
            <p>Guillermo Pagano</p>
          </div>
        </div>
        <div class="event-info">
          <h3>Cap Table<br>Tendencias Disruptivas hacia el 2030</h3>
          <div class="xde">
            <span class="hora">⏰ 5:00 PM</span>
            <span class="modalidad">📍 Cámara de Comercio e Industrias de Huánuco<br>
          (Jirón Gral. Prado 873, Huánuco)</span>
          </div>
          
        </div>
      </div>

      <div class="event-card">
        <h2>Panel 3</h2>
        <div class="event-img multiple-top">
          <div class="ponente">
            <p>Panelista</p>
            <img src="../imagenes/ponentes/deyvid piero tolentino isidro.png" alt="Luis Rebolledo">
            <p>Deyvid Tolentino</p>
          </div>
          <div class="ponente">
            <p>Moderador</p>
            <img src="../imagenes/ponentes/Carlos Ventura Matos.png" alt="Alex Ortega">
            <p>Carlos Ventura</p>
          </div>
          <div class="ponente">
            <p>Panelista</p>
            <img src="../imagenes/ponentes/Yanel Ulpiano Nieto.png" alt="Alex Ortega">
            <p>Yanel Ulpiano</p>
          </div>
          <div class="ponente">
            <p>Panelista</p>
            <img src="../imagenes/ponentes/LUIS ALBERTO ESCOBEDO CORBERA.png" alt="Alex Ortega">
            <p>Luis Escobedo</p>
          </div>
          <div class="ponente">
            <p>Panelista</p>
            <img src="../imagenes/ponentes/Serghio Stive Campos Espinoza.png " alt="Alex Ortega">
            <p>Serghio Campos</p>
          </div>
        </div>
        <div class="event-info">
          <h3>Cap Table<br>Y cómo tener una relación a largo plazo entre founders</h3>
          <div class="xde">
            <span class="hora">⏰ 6:30 PM</span>
            <span class="modalidad">📍 Cámara de Comercio e Industrias de Huánuco<br>
          (Jirón Gral. Prado 873, Huánuco)</span>
          </div>
          
        </div>
      </div>

      <div class="event-card">
        <h2>Conversatorio</h2>
        <div class="event-img multiple-top">
          <div class="ponente">
            <img src="../imagenes/ponentes/ANTONELLA PUNTRIANO.png" alt="Luis Rebolledo">
            <p>Antonella Puntriano</p>
          </div>
          <div class="ponente">
            <img src="../imagenes/ponentes/Joseph Marcial, Luján Carrión.png" alt="Alex Ortega">
            <p>Joseph Luján</p>
          </div>
        </div>
        <div class="event-info">
          <h3>Cap Table<br>Y cómo tener una relación a largo plazo entre founders</h3>
          <div class="xde">
            <span class="hora">⏰ 7:00 PM</span>
            <span class="modalidad">📍 Cámara de Comercio e Industrias de Huánuco<br>
          (Jirón Gral. Prado 873, Huánuco)</span>
          </div>
          
        </div>
      </div>

      
    </div>
  </div>

    <!-- Día 4 -->
  <div class="tab-content" id="day4">
    <div class="event-list">
      <h2>Capital Day</h2>

      <div class="event-card">
        <h2>Conferencia</h2>
        <div class="event-img multiple-top">
          <div class="ponente">
            <img src="../imagenes/ponentes/Mónica Reyes Coronado.png" alt="Luis Rebolledo">
            <p>Mónica Reyes</p>
          </div>
          <div class="ponente">
            <img src="../imagenes/ponentes/Carlos Ventura Matos.png" alt="Alex Ortega">
            <p>Carlos Ventura</p>
          </div>

        </div>
        <div class="event-info">
          <h3>Presentación del programa MYPES 4.0 para la generación plateada</h3>
          <div class="xde">
            <span class="hora">⏰ 10:00 AM</span>
            <span class="modalidad">📍 Museo Regional Leoncio Prado<br>
          (Jr. Dos de Mayo 680 - Huánuco)</span>
          </div>
          
        </div>
      </div>

      <div class="event-card">
        <div class="event-img single">
          <img src="../imagenes/ponentes/Adolfo Hernán Palomino Portugal.png" alt="Benjamín Carrasco">
          <p>Adolfo Palomino</p>
        </div>
        <div class="event-info">
          <h2>Conferencia</h2>
          <h3>IA para MYPES:<br>Automatiza y potencia tu emprendimiento</h3>
          <div class="xde">
            <span class="hora">⏰ 11:00 AM</span>
          <span class="modalidad">📍 Museo Regional Leoncio Prado<br>
          (Jr. Dos de Mayo 680 - Huánuco)<br></span>
          </div>
          
        </div>
      </div>

      <div class="event-card">
        <div class="event-img single">
          <img src="../imagenes/ponentes/alex-jimenez.png" alt="Benjamín Carrasco">
          <p>Alex Jimenez</p>
        </div>
        <div class="event-info">
          <h2>Conferencia</h2>
          <h3>Fuentes de financiamiento público en Perú</h3>
          <div class="xde">
            <span class="hora">⏰ 3:30 PM</span>
            <span class="modalidad">📍 Museo Regional Leoncio Prado<br>
          (Jr. Dos de Mayo 680 - Huánuco)<br></span>
          </div>
          
        </div>
      </div>

      <div class="event-card">
        <h2>Panel 3</h2>
        <div class="event-img multiple-top">
          <div class="ponente">
            <p>Panelista</p>
            <img src="../imagenes/ponentes/Franklin Espinoza Huertas.png" alt="Luis Rebolledo">
            <p>Franklin Espinoza</p>
          </div>
          <div class="ponente">
            <p>Moderador</p>
            <img src="../imagenes/ponentes/ALEXANDER MARTINEZ.png" alt="Alex Ortega">
            <p>Alexander Martínez</p>
          </div>
          <div class="ponente">
            <p>Panelista</p>
            <img src="../imagenes/ponentes/Diana Paredes Zuloaga.png" alt="Alex Ortega">
            <p>Diana Paredes</p>
          </div>
          <div class="ponente">
            <p>Panelista</p>
            <img src="../imagenes/ponentes/Yllich Paul Ruiz Del Aguila.png" alt="Alex Ortega">
            <p>Yllich Ruiz</p>
          </div>
          <div class="ponente">
            <p>Panelista</p>
            <img src="../imagenes/ponentes/Cesar Cervantes Esponda.png" alt="Alex Ortega">
            <p>Cesar Esponda</p>
          </div>
        </div>
        <div class="event-info">
          <h3>Casos de éxito de emprendedores</h3>
          <div class="xde">
            <span class="hora">⏰ 11:30 PM</span>
            <span class="modalidad">📍Museo Regional Leoncio Prado<br>
          (Jr. Dos de Mayo 680 - Huánuco)</span>
          </div>
          
        </div>
      </div>

      <div class="event-card">
        <h2>Podcast en vivo</h2>
        <div class="event-img multiple-top">
          <div class="ponente">
            <img src="../imagenes/ponentes/Joseph Marcial, Luján Carrión.png" alt="Luis Rebolledo">
            <p>Joseph Luján</p>
          </div>
          <div class="ponente">
            <img src="../imagenes/ponentes/LUIS NARRO.png" alt="Alex Ortega">
            <p>Luis Narro</p>
          </div>
          <div class="ponente">
            <img src="../imagenes/ponentes/nicolas-neuhaus.png" alt="Alex Ortega">
            <p>Nicolas Neuhaus</p>
          </div>
          <div class="ponente">
            <img src="../imagenes/ponentes/SEBASTIÁN RUIZ DE CASTILLA.png" alt="Alex Ortega">
            <p>Sebastián Ruiz</p>
          </div>
        </div>
        <div class="event-info">
          <h3>Inversionistas sin filtro:<br>Lo que sí y lo que no</h3>
          <div class="xde">
              <span class="hora">⏰ 12:00 PM</span>
              <span class="modalidad2">
                <div class="youtu">
                  <img src="../imagenes/redes/youtube.svg" alt="">
                  <span>Incuval Ventures - Incubadoras de empresas(UNHEVAL)</span>
                </div>
                <div class="face">
                  <img src="../imagenes/redes/facebook.svg" alt=""><span>Incuval Ventures - Incubadoras de empresas(UNHEVAL)</span>
                </div>
              </span>
          </div>
        </div>
      </div>

      
    </div>
  </div>

</section>

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
  //nav
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

  // Cierra el menú si el usuario presiona Escape
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeSidebar();
  });

  // Si el usuario cambia el tamaño y pasa a desktop, asegurar que el sidebar se cierre
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 768) closeSidebar();
  });
});

//paneles y talleres
const tabs = document.querySelectorAll(".tab");
const contents = document.querySelectorAll(".tab-content");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {
    // Quitar active de todo
    tabs.forEach(t => t.classList.remove("active"));
    contents.forEach(c => c.classList.remove("active"));

    // Activar el tab y el contenido correspondiente
    tab.classList.add("active");
    document.getElementById(tab.dataset.tab).classList.add("active");
  });
});


//footer
document.getElementById("year").textContent = new Date().getFullYear();

</script>
</body>
</html>