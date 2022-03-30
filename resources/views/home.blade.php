<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Inbioslab</title>    
    
  </head>  
  
  <body>
        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><h3>Inbioslab</h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Sedes <span class="sr-only">(current)</span></a>
                    </li>                
                    <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ir a
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/tarifarios">Tarifario</a>
                        <a class="dropdown-item" href="#">Ver resultados</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Nuestros servicios</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Promociones</a>
                    </li>                    
                    <li class="nav-item active">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-2 py-2 sm:block">
                                    @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Empresas</a>

                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                                    @endif
                                     @endauth
                                </div>
                            @endif
                    </li>               
                </ul>              
            </div>
        </div>
          </nav>
        <!-- /Header -->
        <!-- main -->
        <main id="main">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img class="d-block w-100" src="./assets/imagen/inbios1.jpg" alt="First slide">
                  </div>
                <div class="carousel-item">
                     <img class="d-block w-100" src="./assets/imagen/inbios2.jpg" alt="Second slide">
                </div>
               <div class="carousel-item">
                    <img class="d-block w-100" src="./assets/imagen/inbios3.jpg" alt="Third slide">
               </div>
               <div class="carousel-item">
                     <img class="d-block w-100" src="./assets/imagen/inbios4.png" alt="Third slide">
                </div>
                </div>
            </div>
        </main>       
        <!-- /main -->
        <!-- Speakers -->
        <section>
            <div class="Speakers">
            <div class="container mt-4">
                <div class="row">
                    <div class="col text-center text-uppercase">
                        <small>Conose nuestras sedes</small>
                        <h2>Sedes</h2>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="./assets/imagen/cesar.png" alt="Foto de Cesar">
                            <div class="card-body">
                              <h5 class="card-title">Jr. CAlleria 135</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="./assets/imagen/cesar.png" alt="Foto de Cesar">
                            <div class="card-body">
                              <h5 class="card-title">Jr. Agustin Cauper 290</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="./assets/imagen/yarina.jpg" alt="Foto de Cesar">
                            <div class="card-body">
                              <h5 class="card-title">Jr. Aguaytia Mz. D Lt.10</h5>
                              <p class="card-text">Frenten al hospital amazonico de emergencia.</p>                              
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
        </section>       
                   
        <!-- /Speakers -->

        <!-- Footer -->
       <footer id="footer" class="pb-4 pt-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-lg">
                    <a href="">Inicio</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="">Nosotros</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="">Sedes</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="">Convenios</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="">Terminos y Condiciones</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="">Privacidad</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="">Estudiantes</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>