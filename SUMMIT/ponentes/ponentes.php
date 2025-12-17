<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponentes</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
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
  z-index: 1500;}

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

/*galería*/
      h1 {
      text-align: center;
      font-size: 1.5rem;
      margin: 2rem 0;
      color: #32158c;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .card {
      background: #fff;
      border-radius: 1rem;
      overflow: hidden;
      text-align: center;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      cursor: pointer;
      position: relative;
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 0.7s ease forwards;
      padding-bottom: 1rem;
    }

    .card:nth-child(1) { animation-delay: 0.2s; }
    .card:nth-child(2) { animation-delay: 0.4s; }
    .card:nth-child(3) { animation-delay: 0.6s; }
    .card:nth-child(4) { animation-delay: 0.8s; }
    .card:nth-child(5) { animation-delay: 1s; }
    .card:nth-child(6) { animation-delay: 1.2s; }
    .card:nth-child(7) { animation-delay: 1.4s; }
    .card:nth-child(8) { animation-delay: 1.6s; }
    .card:nth-child(9) { animation-delay: 1.8s; }
    .card:nth-child(10) { animation-delay: 2s; }
    .card:nth-child(11) { animation-delay: 2.2s; }
    .card:nth-child(12) { animation-delay: 2.4s; }
    .card:nth-child(13) { animation-delay: 2.6s; }
    .card:nth-child(14) { animation-delay: 2.8s; }
    .card:nth-child(15) { animation-delay: 3s; }
    .card:nth-child(16) { animation-delay: 3.2s; }
    .card:nth-child(17) { animation-delay: 3.4s; }
    .card:nth-child(18) { animation-delay: 3.6s; }
    .card:nth-child(19) { animation-delay: 3.8s; }
    .card:nth-child(20) { animation-delay: 4s; }
    .card:nth-child(21) { animation-delay: 4.2s; }
    .card:nth-child(22){ animation-delay: 4.4s; }
    .card:nth-child(23) { animation-delay: 4.6s; }
    .card:nth-child(24) { animation-delay: 4.8s; }
    .card:nth-child(25) { animation-delay: 5s; }
    .card:nth-child(26) { animation-delay: 5.2s; }
    .card:nth-child(27) { animation-delay: 5.4s; }
    .card:nth-child(28) { animation-delay: 5.6s; }
    .card:nth-child(29) { animation-delay: 5.8s; }
    .card:nth-child(30) { animation-delay: 6s; }
    .card:nth-child(31) { animation-delay: 6.2s; }
    .card:nth-child(32) { animation-delay: 6.4s; }
    .card:nth-child(33) { animation-delay: 6.6s; }
    .card:nth-child(34) { animation-delay: 6.8s; }
    .card:nth-child(35) { animation-delay: 7s; }
    .card:nth-child(36) { animation-delay: 7.2s; }
    .card:nth-child(37) { animation-delay: 7.4s; }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .card:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }

    .card img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      margin-top: 1.5rem;
      transition: transform 0.4s ease;
      position: relative;
      z-index: 1;
    }

    .card:hover img {
      transform: scale(1.1);
    }

    .card h3 {
      margin: 1rem 0 0.5rem;
      font-size: 1.2rem;
      font-weight: bold;
      color: #222;
      position: relative;
      z-index: 1;
    }
    .card p{
      font-size: 1rem;
      color: #333;
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
  color: #32158c;
  font-weight: 600;
}

  /*galeriaaa*/
    h1 {
      font-size: 2.5rem;
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
      <li><a href="../talleres/taller.php">Conferencias y Paneles</a></li>
      <li><a href="../cronograma/cronograma.php">Cronograma</a></li>
      <li><a href="../ponentes/ponentes.php " class="active">Ponentes</a></li>
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

  <h1>🌍 Nuestros Ponentes</h1>
<div class="gallery">

  <div class="card">
    <img src="../imagenes/ponentes/Adolfo Hernán Palomino Portugal.png" alt="Ponente 1">
    <h3>Adolfo Hernán Palomino Portugal</h3>
      <p>Director de Cataliza</p>
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/ALESSANDRA RIVERA.png" alt="Ponente 1">
    <h3>Alessandra Rivera</h3>
      <p>Coordinadora de impacto UTEC VENTURES</p>
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/alex-jimenez.png" alt="Ponente 1">
    <h3>Alex Jimenez</h3>
      <p>Ejecutivo de proyectos del programa Proinnóvate</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Alex Ortega.png" alt="Ponente 1">
    <h3>Alex Ortega</h3>
      <p>Gerente Innovo USACH</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/ALEXANDER MARTINEZ.png" alt="Ponente 1">
    <h3>Alexander Martinez</h3>
      <p>Lider en innovación 3.0 (IA)</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/ANDREA DULANTO.png" alt="Ponente 1">
    <h3>Andrea Dulanto</h3>
      <p>Analista de Innovación UTEC VENTURES</p>
    
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/ANTONELLA PUNTRIANO.png" alt="Ponente 1">
    <h3>Antonella Puntriano</h3>
      <p>Founder de NUO.LAT</p>
     
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/arturo-coral.png" alt="Ponente 1">
    <h3>Arturo Coral</h3>
      <p>CEO Hero Startup</p>
     
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Benjamín Carrasco.png" alt="Ponente 1">
    <h3>Benjamín Carrasco</h3>
      <p>Jefe - CDN Sercotec Aconcagua - Chile</p>
     
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Carlos Ventura Matos.png" alt="Ponente 1">
    <h3>Carlos Ventura Matos</h3>
      <p>Especialista en Emprendimiento Incuval Ventures</p>
     
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Cecilia Zegarra Benavides.png" alt="Ponente 1">
    <h3>Cecilia Zegarra Benavides</h3>
      <p>Mentora de Incuval Ventures</p>
    
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Cesar Cervantes Esponda.png" alt="Ponente 1">
    <h3>Cesar Cervantes Esponda</h3>
      <p>CEO de KUZIFUND</p>
    
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/deyvid piero tolentino isidro.png" alt="Ponente 1">
    <h3>Deyvid Piero Tolentino Isidro</h3>
      <p>CEO de XRAI</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Diana Lisa Mori Rodrigo.png" alt="Ponente 1">
    <h3>Diana Lisa Mori Rodrigo</h3>
      <p>Mentora de Incuval Ventures</p>
     
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Diana Paredes Zuloaga.png" alt="Ponente 1">
    <h3>Diana Paredes Zuloaga</h3>
      <p>CEO de Ecosfera & Gerente en Spirutech</p>
    
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Elizabeth Acuña Rivera.png" alt="Ponente 1">
    <h3>Elizabeth Acuña Rivera</h3>
      <p>Partner de EWA CAPITAL</p>
     
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Franklin Espinoza Huertas.png" alt="Ponente 1">
    <h3>Franklin Espinoza Huertas</h3>
      <p>CEO de MAYUGO</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/GUILLERMO FOSHLEN PAGANO FAUSTINO.png" alt="Ponente 1">
    <h3>Guillermo Foshlen Pagano Faustino</h3>
      <p>CEO de FIRMEASY</p>
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/JESUS ALVUNO.png" alt="Ponente 1" class="jesus">
    <h3>Jesús Edilberto Alvino López</h3>
    <p>CEO de SACSMYPE</p>
     
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Joseph Marcial, Luján Carrión.png" alt="Ponente 1">
    <h3>Joseph Marcial, Luján Carrión</h3>
      <p>Fundador de Ecosistema Startup Peruano</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/JUAN MIGUEL GALEAS.png" alt="Ponente 1">
    <h3>Juan Miguel Galeas</h3>
      <p>CEO - GALEAS GROUP</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/KARINA REBOLLEDO.png" alt="Ponente 1">
    <h3>Karina Rebolledo</h3>
      <p>Asesora Generalista - CDN Sercotec Aconcagua - Chile</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Kevin Edinson Vilcherres Trinidad.png" alt="Ponente 1">
    <h3>Kevin Edinson Vilcherres Trinidad</h3>
      <p>Consultor Sr. Product & Growth en Growty</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/KEVIN GRANDA.png" alt="Ponente 1">
    <h3>Kevin Granda</h3>
      <p>Managing Partner - UTEC VENTURES</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/LUIS ALBERTO ESCOBEDO CORBERA.png" alt="Ponente 1">
    <h3>Luis Alberto Escobedo Corbera</h3>
      <p>CEO de PETCLUB</p>
     
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/LUIS NARRO.png" alt="Ponente 1">
    <h3>Luis Narro</h3>
      <p>Inversor de capital riesgo ALAYA CAPITAL</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Luis Rebolledo Ortiz.png" alt="Ponente 1">
    <h3>Luis Rebolledo Ortiz</h3>
      <p>Jefe Unidad de Administración y Finanzas en Start-Up Chile </p>
     
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/miura fernández garcía.png" alt="Ponente 1">
    <h3>Miura Fernández García</h3>
      <p>CEO de APRENDLY</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Mónica Reyes Coronado.png" alt="Ponente 1">
    <h3>Mónica Reyes Coronado</h3>
      <p>Directora de Desarrollo de Negocios y Administración - The Board</p>
     
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/nicolas-neuhaus.png" alt="Ponente 1">
    <h3>Nicolás Neuhaus</h3>
      <p>The Board Perú</p>
     
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Olga Marisabel Lazo Segura.png" alt="Ponente 1">
    <h3>Olga Marisabel Lazo Segura</h3>
      <p>Funcionaria Sunat - ITI Huánuco</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Ricardo Javier Chang Lau.png" alt="Ponente 1">
    <h3>Ricardo Javier Chang Lau</h3>
      <p>Mentor de Incuval Ventures</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/SEBASTIÁN RUIZ DE CASTILLA.png" alt="Ponente 1">
    <h3>Sebastián Ruiz De Castilla</h3>
      <p>Lider de programa en UTEC VENTURES</p>
    
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Serghio Stive Campos Espinoza.png" alt="Ponente 1">
    <h3>Serghio Stive Campos Espinoza</h3>
      <p>CTO de SPRINTIA</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Vanesa.png" alt="Ponente 1">
    <h3>Vanesa</h3>
      <p>CEO de Ecomachine & Barboom</p>
     
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Yanel Ulpiano Nieto.png" alt="Ponente 1">
    <h3>Yanel Ulpiano Nieto</h3>
      <p>CEO de DOMMIES</p>
      
  </div>

  <div class="card">
    <img src="../imagenes/ponentes/Yllich Paul Ruiz Del Aguila.png" alt="Ponente 1">
    <h3>Yllich Paul Ruiz Del Aguila</h3>
      <p>Sub Gerente de Telemarketing en Rimac Seguros y Reaseguros</p>
      
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
</script>
</body>
</html>