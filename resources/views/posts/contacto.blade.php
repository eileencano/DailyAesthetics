<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Aesthetics - Sobre Nosotros</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                    <li class="nav-item"><a class="nav-link" href="/posts/about">Sobre Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto ">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="contact-header">
        <h1>CONTACTO</h1>
    </section>

    <section class="contact-info">
        <div class="container1">
            <div class="row ">
                <!-- Columna para Ubicación -->
                <div class="tarjt col-12 col-md-4 ">
                    <div class="tarjeta1">
                        <div class="tarjeta-bodyu text-center">
                            <i class="fas fa-map-marker-alt fa-3x"></i>
                            <h5 class="tarjeta-titleu">Ubicación</h5>
                            <p class="tarjeta-textu">Cra 8 #12-23</p>
                        </div>
                    </div>
                </div>
                <!-- Columna para Contacto -->
                <div class=" tarjt col-12 col-md-4 ">
                    <div class="tarjeta2">
                        <div class="tarjeta-bodyc text-center">
                            <i class="fas fa-phone fa-3x"></i>
                            <h5 class="tarjeta-titlec">Contacto</h5>
                            <p class="tarjeta-textc">321-453-7581</p>
                        </div>
                    </div>
                </div>
                <!-- Columna para Email -->
                <div class=" tarjt col-12 col-md-4">
                    <div class="tarjeta3">
                        <div class="tarjeta-bodye text-center">
                            <i class="fas fa-envelope fa-3x"></i>
                            <h5 class="tarjeta-titlee">Email</h5>
                            <p class="tarjeta-texte">dailyaesthetics@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="map">
        <img src="{{ asset('assets/images/ubicacion.jpeg') }}" class="img" alt="..." >

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
        <div class="footer-derecho col-md-4 text-center ">
          <p>Derechos de autor &copy; 2024 Daily Aesthetics. Todos los derechos reservados.</p>
        </div>
        <div class="footer-contact col-md-4">
          <p>Contactos</>
          <p>Ubicación: Dirección Ejemplo</p>
          <p>Email: contacto@dailyaesthetics.com</p>
          <p>Teléfono: +123 456 7890</p>
        </div>
      </div>
    </div>
  </footer>


</body>
</html>
