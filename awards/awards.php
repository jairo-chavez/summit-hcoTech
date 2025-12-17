<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Incuval Awards</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    /* Reset básico */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Open Sans', sans-serif;
  padding-top: 4.3rem;
        background: #f5f5f5;
        color: #030200;
        line-height: 1.6;

}
section{
  text-align: center;
}
h2 {
      margin-bottom: 1rem;
      color: #bc7d13;
    }

    h3 {
      color: #030200;
    }

    p {
      margin-bottom: 1rem;
    }
/* HEADER */
.header {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 10px;
  background: #030200;
  box-shadow: 2px 1px 20px #ffda8a;
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 1500;
}

/* Botón hamburguesa (visible en móvil) */
.menu-btn {
  background: none;
  color: #fff;
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

/*proposito*/
  .proposito {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
      padding: 2rem 1rem;
      text-align: center;
    }
    .proposito img{
      max-width: 100px;
    }
    .proposito-content h1{
      color: #bc7d13;
      padding-bottom: 1rem;
      font-size: 1.5rem;
    }
    .proposito-description{
      max-width: 500px;
      text-align: start;
    }
.inscribirse{
  background-color: #bc7d13;
  border: none;
  padding: 0.8rem 1.5rem;
      border-radius: 20px;
      cursor: pointer;
      font-size: 1.2rem;
      margin-bottom: 2rem;
}
.inscribirse a{
  text-decoration: none;
  color: #fff;
}
    /* --- BENEFICIOS --- */
    .bene-principal{
      padding: 3rem;
      max-width: 1200px;
      margin: 0 auto;
    }
    .bene-principal h2{
      font-size: 2rem;
    }
    .beneficios {
      display: grid;
      gap: 2.5rem;
      margin-top: 2rem;
      max-width: 550px;
      margin: auto;
    }

    .beneficio {
      background: #fff;
      padding: 0 1rem;
      border-radius: 12px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .beneficio h3 {
      font-size: 2rem;
      margin-bottom: 0.5rem;
      color: #bc7d13;
    }

    /* --- CATEGORÍAS--- */

.categorias {
  padding: 2rem 1rem;
  max-width: 700px;
  margin: 0 auto;
}

.categorias h2 {
  text-align: center;
  margin-bottom: 2rem;
  font-size: 2rem;
}

/* --- Mobile por defecto --- */
.categoria-item {
  display: flex;
  flex-direction: column; /* columna en móviles */
  align-items: center;
  text-align: center;
  margin-bottom: 3rem;
  gap: 1rem;
  opacity: 0;
  transform: translateY(50px);
  transition: all 0.8s ease;
}
.categoria-item.invertida {
  transform: translateY(50px); /* todos bajan desde abajo */
}
.categoria-item.visible {
  opacity: 1;
  transform: translateY(0);
}
.categoria-texto h3 {
  font-size: 1.4rem;
  margin-bottom: 0.5rem;
}

.categoria-texto p {
  font-size: 1rem;
  line-height: 1.5;
}

.categoria-imagen img {
  width: 100%;
  max-width: 350px;
  border-radius: 12px;
  display: block;
  transform: scale(0.9);
  opacity: 0;
  transition: all 0.8s ease;
}
.categoria-item.visible .categoria-imagen img {
  transform: scale(1);
  opacity: 1;
}
.categoria-imagen img:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}
.acciones-finales {
  text-align: center;
  margin-top: 5rem;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.btn-inscribirse {
  display: inline-block;
  padding: 0.8rem 1.5rem;
  background: #bc7d13; /* tu color principal */
  color: #fff;
  font-weight: bold;
  border-radius: 8px;
  text-decoration: none;
  transition: background 0.3s ease;
  max-width: 200px;      /* 👈 límite de ancho */
  width: auto;           /* 👈 que solo crezca según el texto */
  margin: 0 auto;        /* 👈 centrado en mobile */
  text-align: center;
}


.btn-inscribirse:hover {
  background: #a07c2f; /* un poco más oscuro */
}

.enlace-bases {
  display: inline-block;
  font-size: 1.3rem;
  color: #bc7d13;
  text-decoration: underline;
  max-width: 300px;      /* 👈 límite de ancho */
  width: auto;           /* 👈 que solo crezca según el texto */
  margin: 0 auto;        /* 👈 centrado en mobile */
  text-align: center;
}
.enlace-bases:hover{
  background-color: #f5f5f5;
color: #030200;
}

    /* --- PROCESO --- */
.proceso {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 2rem 1rem;
  background: #fff;
  border-radius: 12px;
  margin-top: 2rem;
}

.proceso h2 {
  text-align: center;
  margin-bottom: 3rem;
  font-size: 1.8rem;
  color: #030200;
}

/* Timeline vertical centrada */
.timeline {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center; /* centra todo el contenido */
  gap: 2rem;
  max-width: 100%;
  margin: 0 auto;
  padding: 0 1rem;
  box-sizing: border-box;
}

/* Línea central */
.timeline::before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 50%; /* línea centrada */
  transform: translateX(-50%);
  width: 4px;
  background: #bc7d13;
}

/* Tarjetas */
.timeline-item {
  position: relative;
  width: 100%;
}

.timeline-content {
  background: #fff;
  padding: 1rem;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  position: relative;
  width: 90%;
  max-width: 300px;
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.6s ease-out;
}

/* Fecha y título */
.timeline-content .date {
  font-size: 0.85rem;
  color: #666;
}

.timeline-content h3 {
  font-size: 1.2rem;
  margin: 0.5rem 0;
  color: #231917;
  display: flex;
  align-items: center;
}

.circle {
  background: #bc7d13;
  color: #fff;
  font-weight: bold;
  border-radius: 50%;
  width: 28px;
  height: 28px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin-right: 8px;
}

/* Animación al aparecer */
.timeline-content.show {
  opacity: 1;
  transform: translateY(0);
}

    /* --- REQUISITOS --- */
.requisitos {
  padding: 4rem 1rem;
  background: #f9f9f9;
  text-align: center;

}

.requisitos h2 {
  font-size: 2rem;
  margin-bottom: 2rem;
  color: #030200;
}

/* GRID */
.requisitos-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 1.5rem;
  max-width: 900px;
  margin: auto;
}

.requisito {
  background: #fff;
  border-radius: 12px;
  padding: 1.5rem;
  box-shadow: 0 4px 10px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  opacity: 0;
  transform: translateY(40px);
  animation: fadeUp 0.8s forwards;
}
/* TITULOS */
.requisito h3 {
  margin-bottom: 0.5rem;
  color: #bc7d13;
}

/* ANIMACIÓN VISIBLE */
.requisito.show {
  opacity: 1;
  transform: translateY(0);
}
.requisito:nth-child(1) { animation-delay: 0.1s; }
.requisito:nth-child(2) { animation-delay: 0.3s; }
.requisito:nth-child(3) { animation-delay: 0.5s; }
.requisito:nth-child(4) { animation-delay: 0.7s; }
.requisito:nth-child(5) { animation-delay: 0.9s; }
.requisito:nth-child(6) { animation-delay: 1.1s; }
.requisito:nth-child(7) { animation-delay: 1.3s; }
.requisito:nth-child(8) { animation-delay: 1.5s; }

.requisito:hover {
  transform: translateY(-8px) scale(1.03);
  box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

@keyframes fadeUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.bases{
  color: #a07c2f;
}
/*boton flotante*/

  .btn-wsp {
  position: fixed;
  width: 60px;
  height: 60px;
  bottom: 50px;
  right: 20px;
  background-color: #0afa62;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.btn-wsp img {
  width: 60px;
  height: 60px;
}

.btn-wsp:hover {
  transform: scale(1.1);
  box-shadow: 0px 6px 15px rgba(0,0,0,0.4);
}
  
  /* Animación opcional para llamar la atención */
  @keyframes pulso {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.08); }
  }
  
  .btn-wsp {
    animation: pulso 2.5s ease-in-out infinite;
  }



/*footer*/
.footer {
  background-color: #030200;
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
  color: #ffda8a; /* verde corporativo */
  transform: scale(1.2);
}

.copy {
  font-size: 0.9rem;
  margin-top: 5px;
}



@media (min-width: 992px) {

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
    border-bottom: 1px solid #ffda8a;
    transform: translateY(-2px);
  }
    .active {
  border-bottom: 1px solid #ffda8a;
  color: #004aad;
  font-weight: 600;
}
/*proposito*/
 .proposito {
        flex-direction: row;
        justify-content: center;
        text-align: left;
        gap: 80px;
      }

      .proposito-content h1{
      padding-bottom: 1rem;
      font-size: 2rem;
    }

  .proposito-description{
      font-size: 1.5rem;
    }
.proposito img{
      max-width: 200px;
    }

      .beneficios {
        grid-template-columns: repeat(4, 1fr);
        max-width: 1200px;
      }
      .beneficio p{
        font-size: 1.2rem;
        padding: 0.5rem 1rem;
      }

  
      /*categoriassss*/
      .categorias {
  padding: 2rem 1rem;
  max-width: 1100px;
}
.categoria-item {
    flex-direction: row;
    text-align: left;
    gap: 4rem;
  }

  .categoria-item.invertida {
    flex-direction: row-reverse;
    text-align: right;
  }
.categoria-texto p {
  font-size: 1.3rem;

}
  .categoria-texto,
  .categoria-imagen {
    flex: 1;
  }

  .categoria-imagen img {
    max-width: 100%;
    max-width: 450px;
  }

  
  /*procesos*/
  .timeline {
    max-width: 800px;
  }

  /* Zigzag alrededor de la línea */
  .timeline-item:nth-child(odd) .timeline-content {
    margin-left: auto;
    margin-right: calc(50% + 20px);
  }

  .timeline-item:nth-child(even) .timeline-content {
    margin-left: calc(50% + 20px);
    margin-right: auto;
  }

  .timeline-content {
    max-width: 300px;
  }
  /*requisitos*/
  .requisitos-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (min-width: 992px) {
  .timeline {
    max-width: 900px;
  }
}
  </style>
</head>
<body>

  <!-- HEADER -->
  <header class="header">
  <button id="menu-btn" class="menu-btn" aria-label="Abrir menú" aria-expanded="false">&#9776;</button>

  <div class="logo">
    <a href="../index.php"><img src="../imagenes/LOGO SUMMIT-blanco.png" alt="Logo de la empresa"></a>
  </div>

  <!-- El mismo nav se usa para móvil (sidebar) y escritorio (barra horizontal) -->
  <nav class="sidebar" id="sidebar" aria-hidden="true">
    <button id="close-btn" class="close-btn" aria-label="Cerrar menú">&times;</button>
    <ul>
      <li><a href="../talleres/taller.php">Conferencias y Talleres</a></li>
      <li><a href="../cronograma/cronograma.php">Cronograma</a></li>
      <li><a href="../ponentes/ponentes.php">Ponentes</a></li>
      <li><a href="../juegoEmpresario/juegoEmpresaior.php">Business Game</a></li>
      <li><a href="../pitch/pitch.php">Ring de las Startups</a></li>
      <li><a href="../awards/awards.php" class="active">Incuval Awards</a></li>
    </ul>
  </nav>
</header>
<!-- Overlay (clic fuera cierra el sidebar en móvil) -->
<div id="overlay" class="overlay" aria-hidden="true"></div>



  <!-- HERO IMAGE -->
<section class="hero">
  <picture>
    <!-- Escritorio -->
    <source media="(min-width: 1024px)" srcset="../imagenes/awards/header-escritorio.jpg">
    <!-- Tablet -->
    <source media="(min-width: 480px)" srcset="../imagenes/awards/header-tablet.jpg">
    <!-- Móvil (por defecto) -->
    <img src="../imagenes/awards/header-movil.jpg" alt="Imagen principal">
  </picture>
</section>

<!-- Propósito -->
  <!-- PROPÓSITO -->
  <section class="proposito">
    <div class="proposito-content">
      <h1>Incuval Awards</h2>
      <p class="proposito-description">Visibilizar el talento emprendedor,
          fomentar la innovación con impacto
          social y ambiental, e impulsar el
          crecimiento de proyectos que
          transforman la región, fortaleciendo
          así el posicionamiento de Huánuco
          como un referente de emprendimiento
          e innovación.</p>
      <button class="inscribirse"><a href="https://docs.google.com/forms/d/e/1FAIpQLScddG-gYRVfz4IH8I-uqyMtiMIR_6JRsycQxbacpdIfrqA-Nw/viewform" target="_blank">Inscribirse</a></button>
    </div>
    <img src="../imagenes/awards/TROFEO INCUVAL-01.png" alt="Propósito Incuval">
  </section>

  <!-- BENEFICIOS --> 
  <section class="bene-principal">
    <h2>Beneficios</h2>
    <div class="beneficios">
      <div class="beneficio">
        <h3>1</h3>
        <p>Estatuilla de reconocimiento</p>
      </div>
      <div class="beneficio">
        <h3>2</h3>
        <p>Resolución de reconocimiento del VRI – UNHEVAL</p>
      </div>
      <div class="beneficio">
        <h3>3</h3>
        <p>Nota de prensa y difusión especial en medios y redes oficiales</p>
      </div>
      <div class="beneficio">
        <h3>4</h3> 
        <p>Acceso gratuito por 1 mes a Platzi</p>
      </div>
    </div>
  </section>

<!-- CATEGORÍAS -->
<section class="categorias">
  <h2>Categorías</h2>

  <div class="categoria-item">
    <div class="categoria-texto">
      <h3>TECH VISIONARIES</h3>
      <p>Se premian emprendimientos que impulsen la transformación tecnológica con soluciones innovadoras de alto valor, que cuenten con un producto, servicio o prototipo validado en el mercado o en prueba.</p>
    </div>
    <div class="categoria-imagen">
      <img src="../imagenes/awards/categoria-1.jpg" alt="Categoría 1">
    </div>
  </div>

  <div class="categoria-item invertida">
    <div class="categoria-texto">
      <h3>HUELLAS DE IMPACTO</h3>
      <p>Premia proyectos con impacto social o ambiental sostenible, especialmente en comunidades vulnerables, con resultados medibles.</p>
    </div>
    <div class="categoria-imagen">
      <img src="../imagenes/awards/categoria-2.jpg" alt="Categoría 2">
    </div>
  </div>

  <div class="categoria-item">
    <div class="categoria-texto">
      <h3>WARMIKUNA KALLPA</h3>
      <p>Reconoce a mujeres líderes que, con resiliencia y visión, han creado emprendimientos exitosos, inspirando a otras y rompiendo barreras.</p>
    </div>
    <div class="categoria-imagen">
      <img src="../imagenes/awards/categoria-3.jpg" alt="Categoría 3">
    </div>
  </div>

  <div class="categoria-item invertida">
    <div class="categoria-texto">
      <h3>SEMILLAS DEL FUTURO</h3>
      <p>Reconoce a jóvenes y estudiantes universitarios (hasta 29 años) que lideran emprendimientos en marcha o en etapa inicial, destacando su creatividad, visión transformadora y compromiso con el cambio positivo.</p>
    </div>
    <div class="categoria-imagen">
      <img src="../imagenes/awards/categoria-4.jpg" alt="Categoría 4">
    </div>
  </div>

  <div class="categoria-item">
    <div class="categoria-texto">
      <h3>MYPE INNOVA</h3>
      <p>Premia a micro y pequeñas empresas que implementan innovaciones en productos, servicios, procesos o modelos de negocio.</p>
    </div>
    <div class="categoria-imagen">
      <img src="../imagenes/awards/categoria-5.jpg" alt="Categoría 5">
    </div>
  </div>

  <div class="acciones-finales">
    <a href="https://docs.google.com/forms/d/e/1FAIpQLScddG-gYRVfz4IH8I-uqyMtiMIR_6JRsycQxbacpdIfrqA-Nw/viewform" class="btn-inscribirse" target="_blank">Inscribirse</a>
    <a href="https://drive.google.com/file/d/15y09_NxaGwCmz_X5FV22UsXmWDMPTedK/view" target="_blank" class="enlace-bases" >Leer bases completas</a>
  </div>
</section>


  <!-- PROCESO -->
<section class="proceso">
  <h2>Proceso</h2>
  <div class="timeline">
    <div class="timeline-item">
      <div class="timeline-content">
        <span class="date">19/08/25 – 07/09/25</span>
        <h3><span class="circle">1</span> Convocatoria</h3>
        <p>Se apertura la convocatoria a través de redes sociales y otros canales...</p>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-content">
        <span class="date">19/08/25 – 07/09/25</span>
        <h3><span class="circle">2</span> Entrevistas</h3>
        <p>Se realizarán entrevistas virtuales de hasta 5 minutos...</p>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-content">
        <span class="date">08/09/25 – 10/09/25</span>
        <h3><span class="circle">3</span> Primera evaluación</h3>
        <p>Los participantes serán evaluados y se publicará la lista de finalistas...</p>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-content">
        <span class="date">11/09/25 – 17/09/25</span>
        <h3><span class="circle">4</span> Segunda evaluación</h3>
        <p>Se llevará a cabo la evaluación de los finalistas por parte del jurado...</p>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-content">
        <span class="date">19/09/25</span>
        <h3><span class="circle">5</span> Anuncio de ganadores</h3>
        <p>La publicación de resultados se realizará en el marco del Huánuco Tech+...</p>
      </div>
    </div>
  </div>
</section>

  <!-- REQUISITOS GENERALES -->
<section class="requisitos">
  <h2>Requisitos Generales</h2>
  <div class="requisitos-grid">
    <div class="requisito">
      <h3>Requisito 1</h3>
      <p>El emprendimiento debe estar ubicado o tener
impacto directo en la región Huánuco.</p>
    </div>
    <div class="requisito">
      <h3>Requisito 2</h3>
      <p>Debe encontrarse en funcionamiento y contar con al
menos un producto, servicio o prototipo validado.</p>
    </div>
    <div class="requisito">
      <h3>Requisito 3</h3>
      <p>Postular únicamente en la categoría que mejor
represente la propuesta; el comité organizador podrá
reubicar la postulación si lo considera pertinente.</p>
    </div>
    <div class="requisito">
      <h3>Requisito 4</h3>
      <p>Puede postular una persona natural (fundador/a) o
persona jurídica (empresa, asociación, startup, MYPE,
etc.).</p>
    </div>
    <div class="requisito">
      <h3>Requisito 5</h3>
      <p>No se aceptarán postulaciones fuera de los plazos establecidos</p>
    </div>
    <div class="requisito">
      <h3>Requisito 6</h3>
      <p>Cumplir con las normativas vigentes, no vulnerar
derechos humanos y no generar daños al medio
ambiente.</p>
    </div>
    <div class="requisito">
      <h3>Requisito 7</h3>
      <p>Leer y aceptar las <a class="bases" href="https://drive.google.com/file/d/15y09_NxaGwCmz_X5FV22UsXmWDMPTedK/view" target="_blank">bases de la convocatoria</a></p>
    </div>
    <div class="requisito">
      <h3>Requisito 8</h3>
      <p>Autorizar el uso de información, imágenes y material audiovisual para la difusión del evento.</p>
    </div>
  </div>
</section>

<!--boton flotanteeeee-->
<a href="https://wa.me/51987654321?text=Hola,%20me%20interesa%20registrarme%20en%20el%20evento" target="_blank" class="btn-wsp">
  <img src="../imagenes/whatsapp.png" alt="WhatsApp">
</a>

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


    //categorias
 document.addEventListener("DOMContentLoaded", () => {
    const categorias = document.querySelectorAll(".categoria-item");

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target); // deja de observar una vez que ya apareció
        }
      });
    }, { threshold: 0.2 }); // se activa cuando 20% del bloque es visible

    categorias.forEach(categoria => {
      observer.observe(categoria);
    });
  });

  //procesoss
const timelineItems = document.querySelectorAll('.timeline-content');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if(entry.isIntersecting) {
      entry.target.classList.add('show');
    }
  });
}, { threshold: 0.1 });

timelineItems.forEach(item => observer.observe(item));
  </script>
</body>
</html>