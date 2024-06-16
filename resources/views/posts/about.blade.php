<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Aesthetics - Sobre Nosotros</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</head>
<body>
     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('assets/images/logo2.png') }}" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class=" navbar-collapse collapse show" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/posts/#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/posts/#servicios">Servicios</a><li>
                    <li class="nav-item"><a class="nav-link" href="#about">Sobre Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="/posts/contacto">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>


  <!-- Masthead-->
  <header class="about">
    <section id="sobre nosotros" class="py-5">
    <div class="container">
        <div class="masthead-subheading">SOBRE NOSOTROS</div>
    </div>
</section>
</header>






    <section class="half-section left-image">
        <div class="container">
          <div class="half-image">
            <img src="{{ asset('assets/images/nosotros2.jpeg') }}" alt="Left Image">
          </div>
          <div class="half-text">
            <h2 class="Cb">Cultiva tu confianza y bienestar interior!</h2>
            <p class="parra">En Daily Aesthetics, nos dedicamos a realzar tu belleza y tu confianza. Nuestro equipo está aquí para brindarte servicios de alta calidad y hacerte sentir radiante en cada visita. Ofrecemos una amplia gama de servicios, desde cortes y peinados hasta tratamientos faciales y manicuras. Nuestros estilistas altamente capacitados están comprometidos a brindarte una experiencia excepcional en cada cita.</p>
          </div>
        </div>
      </section>

      <section class="half-section right-image">
        <div class="container">
          <div class="half-text">
            <h2 class="He">Haz espacio para lo extraordinario!</h2>
            <p class="parra">Nos esforzamos por crear un ambiente acogedor y relajante donde te sientas mimado y cuidado. Nuestro objetivo es superar tus expectativas y dejarte luciendo y sintiéndote lo mejor posible. Únete a nosotros y descubre lo que nuestro salón de belleza puede hacer por ti! Agenda tu cita hoy mismo y déjanos realzar tu belleza interior y exterior.</p>
          </div>
          <div class="half-image">
            <img src="{{ asset('assets/images/nosotros.jpeg') }}" alt="Right Image">
          </div>
        </div>
      </section>

   


<!-- Footer -->
<footer class="bg-dark text-light py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('assets/images/logo.png') }}"alt="Logo" style="height: 50px;">
            <span class="brand-name ms-2">Daily Aesthetics</span>
          </a>
        </div>
        <div class="footer-derecho col-md-4 text-center">
          <p>Derechos de autor &copy; 2024 Daily Aesthetics. Todos los derechos reservados.</p>
        </div>
        <div class="footer-contact col-md-4">
          <h5>Contactos</h5>
          <p>Ubicación: Dirección Ejemplo</p>
          <p>Email: contacto@dailyaesthetics.com</p>
          <p>Teléfono: +123 456 7890</p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
