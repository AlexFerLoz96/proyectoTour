<html>

<head>
    <title>TourAlmeria</title>
    @yield('librerias')

    <style>
        .navbar {
            height: 6rem;
        }

        #arribaDiv{
            position: fixed;
            display: none;
            width: 3rem;
            height: 3rem;
            z-index: 999;
            right: 2.1rem;
            bottom: 4.7rem;
        }

        #arriba{
            padding: 0.3rem;
        }

        #arriba:hover{
            cursor: pointer;
        }

        .nav-item{
            border-bottom: 3px solid #f8f9fa;
        }

        .nav-item:hover{
            border-bottom: 3px solid #0d6efd;
            transition: 1s;
        }

        .path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: dash 5s linear forwards;
        }

        @keyframes dash {
            to {
                stroke-dashoffset: 0;
            }
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="/"><svg aria-hidden="true" width="40" focusable="false" data-prefix="far" data-icon="globe-europe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-globe-europe fa-w-16 fa-5x">
            <defs>
    <linearGradient id="left-to-right">
      <stop offset="0" stop-color="#2565C1">
        <animate dur="1s" attributeName="offset" fill="freeze" from="0" to="1" />
      </stop>
      <stop offset="0" stop-color="transparent">
        <animate dur="1s" attributeName="offset" fill="freeze" from="0" to="1" />
      </stop>
      
    </linearGradient>
  </defs>
            <path class="path" fill="url(#left-to-right)" d="M178.1 123.7c0-6.2-5.1-11.3-11.3-11.3-3 0-5.9 1.2-8 3.3l-25.4 25.4c-2.1 2.1-3.3 5-3.3 8 0 6.2 5.1 11.3 11.3 11.3h16c3 0 5.9-1.2 8-3.3l9.4-9.4c2.1-2.1 3.3-5 3.3-8v-16zM248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm175.1 344.4h-13.4c-4.8 0-9.5-1.9-12.9-5.3l-17.3-17.3c-6-6-14.1-9.4-22.6-9.4h-18.3l-43.2-37.1c-8.2-7.1-18.7-10.9-29.6-10.9h-31.2c-8.2 0-16.3 2.2-23.4 6.5l-42.9 25.7c-13.7 8.2-22.1 23-22.1 39v23.9c0 14.3 6.7 27.8 18.2 36.4l22.2 16.7c8.6 6.5 24.6 11.8 35.4 11.8h20.2c8.8 0 16 7.2 16 16v7.1c-3.4.2-6.7.5-10.1.5-110.3 0-200-89.7-200-200 0-108.3 86.7-196.6 194.3-199.7L213.3 78c-2 1.5-3.2 3.9-3.2 6.4v20c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8v-8l16-16h20.7c6.2 0 11.3 5 11.3 11.3 0 3-1.2 5.9-3.3 8L260 126.5c-1.2 1.2-2.7 2.2-4.4 2.7l-40 13.3c-3.3 1.1-5.5 4.1-5.5 7.6 0 6.6-2.6 12.8-7.2 17.5l-20.1 20.1c-3 3-4.7 7.1-4.7 11.3v25.4c0 8.8 7.2 16 16 16h22.1c6.1 0 11.6-3.4 14.3-8.8l9.4-18.7c1.4-2.7 4.1-4.4 7.2-4.4h3.1c4.4 0 8 3.6 8 8s3.6 8 8 8h16c4.4 0 8-3.6 8-8v-2.2c0-3.4 2.2-6.5 5.5-7.6l31.6-10.5c6.5-2.2 10.9-8.3 10.9-15.2v-4.5c0-8.8 7.2-16 16-16h36.7c6.2 0 11.3 5.1 11.3 11.3v9.4c0 6.2-5.1 11.3-11.3 11.3h-32c-3 0-5.9 1.2-8 3.3l-9.4 9.4c-2.1 2.1-3.3 5-3.3 8 0 6.2 5.1 11.3 11.3 11.3h16c3 0 5.9 1.2 8 3.3l9.4 9.4c2.1 2.1 3.3 5 3.3 8v8.7l-12.5 12.5c-4.6 4.6-4.6 12-.1 16.7l31.9 32.6c3 3.1 7.1 4.8 11.4 4.8h20.3c-3.8 11-8.5 21.7-14.1 31.9z">
            </path></svg> Almería</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-3 bg-light" id="navbarScroll">
                <ul class="navbar-nav me-auto  my-2 my-lg-0 navbar-nav-scroll" style="margin-right: 5% !important;">
                    @if(isset(Auth::User()->id))
                    @if(Auth::User()->id == 1)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/user">CRUD</a>
                    </li>
                    @endif
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            @foreach ($categoriaList as $categoria)
                            <li><a class="dropdown-item" name="busqueda" href="/comercio/search?busqueda={{$categoria->nombre}}">{{$categoria->nombre}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <form action="{{route('comercio.search')}}" class="d-flex my-2 ml-1" style="width: 40%;">
                    {{ csrf_field() }}
                    <input class="form-control me-2" required type="search" placeholder="¿Qué deseas buscar?" autocomplete="off" aria-label="Search" name="busqueda">
                    <button class="btn btn-outline-primary" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </form>
                <ul class="navbar-nav ms-auto p-2">
                    
                    @if(isset(Auth::User()->id))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Bienvenido, {{Auth::User()->name}}</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li>
                        <a href="#" class="dropdown-item">Perfil</a><!--Añadir opciones de usuario-->
                        </li>                           
                        <li>
                        <a class="dropdown-item" href="/logout">
                        <svg width="25" height="25" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-sign-out-alt fa-w-16 fa-3x"><path fill="#2565C1" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z" class=""></path></svg>
                        Logout
                        </a>
                        </li>
                        </ul>
                    </li>
                        
                    @else
                    <li class="nav-item">
                    <a class="nav-link active" id="login" href="/login">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2565C1" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            Inicia sesión </a>
                    </li>
                    @endif
                    
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

    <div id="arribaDiv">
        <svg aria-hidden="true" id="arriba" focusable="false" data-prefix="fad" data-icon="chevron-double-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-double-up fa-w-14 fa-3x">
            <g class="fa-group">
                <path fill="#0d6efd" opacity="0.5" d="M435 420.86a24 24 0 0 1 0 33.94l-22.63 22.67a23.93 23.93 0 0 1-33.85 0L224 323.5l-154.5 154a23.93 23.93 0 0 1-33.85 0L13 454.8a24 24 0 0 1 0-33.94l194-194.33a23.93 23.93 0 0 1 33.88 0z" class="fa-secondary"></path>
                <path fill="#0d6efd" d="M435 228.86a24 24 0 0 1 0 33.94l-22.63 22.67a23.93 23.93 0 0 1-33.85 0L224 131.5l-154.5 154a23.93 23.93 0 0 1-33.85 0L13 262.8a24 24 0 0 1 0-33.94L207 34.53a23.93 23.93 0 0 1 33.88 0z" class="fa-primary"></path>
            </g>
        </svg>
    </div>


    <footer class="position-relative bg-gray-dark bottom-0 end-0 w-100 bg-dark text-center text-white">
        <div class="row">
            <div class="col ms-5 my-5">
                <table class="ms-5">
                    <tbody>
                        <tr>
                            <td>
                                <h2 class="text-white">Asistencia</h2>
                            </td>
                        </tr>
                      <tr class="my-1">
                        <td class="align-baseline">
                            <a class="text-white" href="/contacto" target="_blank">Contacto</a>
                        </td>
                      </tr>
                      <tr class="my-1">
                        <td class="align-baseline">
                            <a class="text-white" href="/politica" target="_blank">Política de privacidad</a>
                        </td>
                      </tr>
                      <tr  class="my-1">
                        <td class="align-baseline">
                            <a class="text-white" href="/info" target="_blank">Información legal</a>
                        </td>
                      </tr>
                      <tr  class="my-1">
                        <td class="align-baseline">
                            <a class="text-white" href="/mapa" target="_blank">Mapa del sitio</a>
                        </td>
                      </tr>
                    </tbody>
                </table>
                <div class="col">
                        <svg fill="none" height="20" viewBox="0 0 9 18" id="ic-facebook" xmlns="http://www.w3.org/2000/svg"><path d="M5.842 18V9.79h2.653l.397-3.2h-3.05V4.545c0-.926.247-1.557 1.527-1.557H9V.126A21.06 21.06 0 006.623 0C4.27 0 2.66 1.491 2.66 4.23v2.36H0v3.2h2.66V18h3.182z" fill="currentColor"></path></svg>
                        <svg aria-hidden="true" height="25" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14 fa-3x"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path></svg>
                        <svg fill="none" height="20" viewBox="0 0 18 15" id="ic-twitter" xmlns="http://www.w3.org/2000/svg"><path d="M5.66 15c6.793 0 10.508-5.771 10.508-10.776 0-.164 0-.328-.01-.49A7.622 7.622 0 0018 1.774a7.228 7.228 0 01-2.121.595A3.786 3.786 0 0017.503.275a7.29 7.29 0 01-2.346.919A3.669 3.669 0 0013.062.05a3.616 3.616 0 00-2.341.399 3.754 3.754 0 00-1.623 1.777 3.88 3.88 0 00-.234 2.422A10.28 10.28 0 014.648 3.5 10.539 10.539 0 011.253.69a3.874 3.874 0 00-.405 2.76c.213.94.766 1.76 1.548 2.296A3.596 3.596 0 01.72 5.273v.048c0 .874.295 1.722.835 2.398a3.68 3.68 0 002.128 1.315 3.598 3.598 0 01-1.668.065A3.79 3.79 0 003.33 10.98a3.637 3.637 0 002.137.748A7.293 7.293 0 010 13.299a10.266 10.266 0 005.66 1.698" fill="currentColor"></path></svg>
                        <svg fill="none" height="20" viewBox="0 0 19 17" id="ic-linkedin" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.57 5.674V17H1.127V5.674H4.57zm.227-3.503c0 1.087-.748 1.957-1.949 1.957h-.022C1.67 4.128.923 3.258.923 2.17c0-1.111.77-1.957 1.948-1.957s1.903.846 1.926 1.957zM11.187 17H7.378s.05-10.289 0-11.354h3.807v1.607l-.025.04h.025v-.04c.506-.774 1.412-1.874 3.431-1.874C17.122 5.38 19 7.002 19 10.49V17h-3.807v-6.074c0-1.527-.55-2.568-1.928-2.568-1.052 0-1.679.702-1.954 1.38-.1.243-.125.582-.125.921V17z" fill="currentColor"></path></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center p-3">
            © 2021 Copyright:
            <a class="text-white" href="/">TourAlmeria.com</a>
        </div>
    </footer>
</body>

<script>
    $(document).ready(function(){
        $("#arribaDiv").fadeOut(0);
        $(window).scroll(function(){
            if($(window).scrollTop() > 1000){
                $("#arribaDiv").attr("display", "inline-block").fadeIn(1000);
            } else{
                $("#arribaDiv").fadeOut();
            }
        });
        $("#arribaDiv").click(function(){
            window.scrollTo(0, 0);
        });
    });
</script>

</html>