<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">



    </head>

    <body id="page-top">
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
                        <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#serviciosCarrusel">Servicios</a><li>
                        <li class="nav-item"><a class="nav-link" href="/posts/about">Sobre Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="/posts/contacto">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
       <header class="inicio">
    <section id="inicio" class="py-5">
        <div class="container">
            <div class="masthead-subheading">EL AMOR PROPIO COMIENZA CON EL CUIDADO PERSONAL!</div>
        </div>
    </section>
</header>


        <!-- Sección 2 - ELIGENOS -->
<section id="sobre-nosotros" class="py-5">
    <div class="container">

      <div class="row">
        <div class="col-md-3">
          <img src="{{ asset('assets/images/elegirnos.jpeg') }}" alt="Logo" style="height: 300px;"class="img-fluid" >
        </div>

        <div class="col-md-5">
            <h4 class="T">¿Porque Elegirnos?</h4>
          <p class="D">Deslumbra con tu belleza en nuestro exclusivo salón.
              Somos tu destino para transformarte en la mejor version
               de ti misma.¡Dejanos resaltar tu estilo y realzar tu
               confianza!.Descubre la excelencia en cada servicio que
              ofrecemos.¡Bienvenidos  a una experiencia de belleza
               inigualable!
          </p>
        </div>

        <div class="col-md-3">
          <img src="{{ asset('assets/images/elegirnos2.jpeg') }}" alt="Logo" style="height: 300px;"class="img-fluid" >
        </div>
      </div>
    </div>
  </section>


<!-- Sección 3 - SERVICIOS -->
<!-- se pone@ y se llama el recurso dentro de las dos @-->

<!-- Sección 3 - servicios con Carrusel -->
<div id="serviciosCarrusel" class="carousel slide" data-ride="carousel">
    <h2 class="p">¡TU ESTILO, TU ELECCION, TU COMODIDAD!</h2>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">

                 <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/maquillaje.jpeg') }}" class="card-img-top" alt="Maquillaje">
                        <div class="card-body">
                            <h5 class="card-title">Maquillaje</h5>
                            <p class="card-text">La aplicación de productos cosméticos en el rostro para realzar la belleza natural y crear un look deseado, ya sea para eventos especiales, sesiones de fotos o uso diario.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/depilacion.jpeg') }}" class="card-img-top" alt="Depilación">
                        <div class="card-body">
                            <h5 class="card-title">Depilación</h5>
                            <p class="card-text">El proceso de eliminar el vello no deseado del cuerpo utilizando varios métodos como cera, láser, crema depilatoria o hilo. Puede realizarse en diferentes áreas del cuerpo, incluyendo piernas, brazos, axilas, rostro y área del bikini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/acrilicas.jpeg') }}" class="card-img-top" alt="Acrílicas">
                        <div class="card-body">
                            <h5 class="card-title">Acrílicas</h5>
                            <p class="card-text">Una técnica de extensión de uñas que utiliza una mezcla de polvo acrílico y líquido monómero para crear uñas fuertes y duraderas que pueden ser esculpidas y pintadas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/cepillado.jpeg') }}" class="card-img-top" alt="Cepillado">
                        <div class="card-body">
                            <h5 class="card-title">Cepillado</h5>
                            <p class="card-text">Un tratamiento de peinado que implica el uso de un secador y un cepillo para alisar y dar forma al cabello, dejándolo liso, suave y con volumen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/tintura.jpeg') }}" class="card-img-top" alt="Tintura">
                        <div class="card-body">
                            <h5 class="card-title">Tintura</h5>
                            <p class="card-text">El proceso de aplicar color al cabello utilizando productos químicos para cambiar su color natural, cubrir canas o crear efectos de color como mechas o balayage.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/pedicura.jpeg') }}" class="card-img-top" alt="Pedicura">
                        <div class="card-body">
                            <h5 class="card-title">Pedicura</h5>
                            <p class="card-text">Similar a la manicura, pero centrado en los pies y las uñas de los pies. Incluye la limpieza, el recorte, la forma y la pintura de las uñas, así como el cuidado de la piel de los pies, incluyendo exfoliación y masaje.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/diseño de cejas.jpeg') }}" class="card-img-top" alt="Diseño de cejas">
                        <div class="card-body">
                            <h5 class="card-title">Diseño de Cejas</h5>
                            <p class="card-text">Un servicio que se enfoca en dar forma y definir las cejas según la estructura del rostro del cliente, utilizando técnicas como el depilado con cera, pinzas o hilo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/corte1.jpeg') }}" class="card-img-top" alt="Diseño de cejas">
                        <div class="card-body">
                            <h5 class="card-title">Corte de Cabello</h5>
                            <p class="card-text">Un servicio de peluquería que implica la reducción y el estilo del cabello según las preferencias del cliente, utilizando diversas técnicas para lograr el look deseado</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#serviciosCarrusel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#serviciosCarrusel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>
<!-- Fin del carrusel -->



<!-- Sección 4 - Agendamiento-->
<section class="citas">
    <h2>Tu momento de glamour en un abrir y cerrar de ojos!</h2>
    <a href="{{ route('citas.index') }}" class="button">Agendar cita</a>
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
        <div class=" footer-derecho col-md-4 text-center">
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

<!-- Bootstrap core JS-->
<script src="{{ asset('assets/js/scripts.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2Jy+h3m0nnaFf06zMGsLA6eClpa4GYB7g43Qrqh3jOQ64Dd2k8v5n47m5x5" crossorigin="anonymous"></script>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

<!-- Incluir Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Incluir Bootstrap JS y sus dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





    </body>
</html>
