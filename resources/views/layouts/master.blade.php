<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Astronomyapp</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="{{ url('/') }}">Astronomyapp</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">

                    @guest
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Bienvenido</a></li>
                    @else    
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/registroEstudiantes') }}">Registrar estudiantes</a></li>    
                    @endguest
                </ul>
                
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @guest

                    @if (Route::has('login'))
                        <a class="btn btn-primary shadow-sm" type="button" href="{{ route('login') }}" style="background: rgb(0,163,255);border-color: rgb(0,163,255); margin-right:5px; ">Iniciar Sesión</a>
                    @endif

                    @if (Route::has('register'))
                        <a class="btn btn-primary shadow-sm" type="button" href="{{ route('register') }}" style="background: rgb(0,163,255);border-color: rgb(0,163,255); margin-right:5px; ">Registrarse</a>
                    @endif

                    @else

                        <a class="btn btn-primary shadow-sm" type="button" href="{{ route('logout') }}" style="background: rgb(0,163,255);border-color: rgb(0,163,255); margin-right:5px; "
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                </div>
                {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <a class="btn btn-primary shadow-sm" type="button" href="{{ route('login') }}" style="background: rgb(0,163,255);border-color: rgb(0,163,255); margin-right:5px; ">Iniciar Sesión</a>
                    <a class="btn btn-primary shadow-sm" type="button" href="{{ route('register') }}" style="background: rgb(0,163,255);border-color: rgb(0,163,255); margin-right:5px; ">Registrarse</a>
                </div> --}}
                {{-- <button class="btn btn-primary shadow-sm" type="button" href="{{ route('login') }}" style="background: rgb(0,163,255);border-color: rgb(0,163,255); margin-right:5px; ">Iniciar Sesión</button>
                <button class="btn btn-primary shadow-sm" type="button" style="background: rgb(0,163,255);border-color: rgb(0,163,255); margin-left:5px; margin-right:5px;  ">Registrarse</button> --}}
            </div>
        </div>
    </nav>
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="color: rgba(0, 0, 0, 0.7);background: url(&quot;assets/img/space/mainBackground.jpg&quot;), #444444;border-color: rgb(255,255,255);padding-top: 20px;">
        
        {{-- CONTENIDO --}}

          @yield('contenido')
        
          {{-- FIN CONTENIDO --}}
        </section>
    </main>
    <footer class="page-footer dark" style="background: rgb(0,40,62);padding-top: 0;">
      <div class="container">
          <div class="row">
              <div class="col-sm-4 col-lg-4 offset-sm-4 offset-md-4 offset-lg-4 text-center">
                  <h5>About us</h5>
                  <ul>
                      <li><a href="#">Company Information</a></li>
                      <li><a href="#">Contact us</a></li>
                      <li><a href="#">Reviews</a></li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="footer-copyright" style="background: rgb(0,0,0);margin-top: 0px;">
          <p>© 2020 Copyright Text</p>
      </div>
  </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>