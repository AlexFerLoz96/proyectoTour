<html>

<head>
    <title>@yield('Titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="assets/js/carrusel.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/carrusel.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="/">Tour Almería</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-3" id="navbarScroll">
                <ul class="navbar-nav me-auto  my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px; margin-right: 5% !important;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/user">CRUD</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            @foreach ($categoriaList as $categoria)
                            <li><a class="dropdown-item" href="/categoria">{{$categoria->nombre}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <form action="{{route('comercio.search')}}" class="d-flex my-2 ml-1" style="width: 40%;">
                    {{ csrf_field() }}
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busqueda">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ms-auto p-2">
                    <li class="nav-item">
                        <a class="nav-link active" id="login" href="/login">Inicia sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="b1">
        <div class="b1-slider">
            <div class="b1-slide">
                <div class="b1-bg" style="background-image: url('https://www.guiaturisticoalmeria.es/wp-content/uploads/2019/07/1-alcazaba-almeria.jpg');">
                </div>
                <div class="wancho b1-cnt">
                    <figure class="b1-lanza-video">
                        <i class="icon-SVG-11"></i>
                    </figure>
                    <div class="b1-center">
                        <div class="b1-text">
                            <h2>
                                Compañía peruana líder en consultoría
                                <strong>Gestión de proyectos y asesoría </strong>
                            </h2>
                        </div>
                        <a href="#" class="g-button">
                            <span>LEER MÁS</span>
                            <i class="icon-SVG-12"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="b1-slide">
                <div class="b1-bg" style="background-image: url('https://multimedia.andalucia.org/media/60DBA931A7E0442C961B1EC45AB4EC30/img/B0AD9F73E8D44AF6BFE0CBC6C3009836/19-15_Playa_de_Playaza_de_Rodalquilar_Almeria.jpg?responsive');"></div>
                <div class="wancho b1-cnt">
                    <figure class="b1-lanza-video">
                        <i class="icon-SVG-11"></i>
                    </figure>
                    <div class="b1-center">
                        <div class="b1-text">
                            <h2>
                                Compañía peruana líder
                                <strong>Gestión de proyectos </strong>
                            </h2>
                        </div>
                        <a href="#" class="g-button">
                            <span>LEER MÁS</span>
                            <i class="icon-SVG-12"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="b1-slide">
                <div class="b1-bg" style="background-image: url('https://cdn.getyourguide.com/img/location/5440ed46358e9.jpeg/88.jpg');"></div>
                <div class="wancho b1-cnt">
                    <figure class="b1-lanza-video">
                        <i class="icon-SVG-11"></i>
                    </figure>
                    <div class="b1-center">
                        <div class="b1-text">
                            <h2>
                                Almería
                                <strong>Taberna cervecera</strong>
                            </h2>
                        </div>
                        <a href="#" class="g-button">
                            <span>LEER MÁS</span>
                            <i class="icon-SVG-12"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="b1-slide">
                <div class="b1-bg" style="background-image: url('https://diarioelcanal.com/wp-content/uploads/2020/09/muelle-levante-puerto-de-almeria.jpg');"></div>
                <div class="wancho b1-cnt">
                    <figure class="b1-lanza-video">
                        <i class="icon-SVG-11"></i>
                    </figure>
                    <div class="b1-center">
                        <div class="b1-text">
                            <h2>
                                Compañía peruana líder
                                <strong>Gestión de proyectos </strong>
                            </h2>
                        </div>
                        <a href="#" class="g-button">
                            <span>LEER MÁS</span>
                            <i class="icon-SVG-12"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="b1-slide">
                <div class="b1-bg" style="background-image: url('https://www.educatioservanda.org//wp-content/uploads/2016/07/patronato-almeria-1.jpg');"></div>
                <div class="wancho b1-cnt">
                    <figure class="b1-lanza-video">
                        <i class="icon-SVG-11"></i>
                    </figure>
                    <div class="b1-center">
                        <div class="b1-text">
                            <h2>
                                Compañía peruana líder
                                <strong>Gestión de proyectos </strong>
                            </h2>
                        </div>
                        <a href="#" class="g-button">
                            <span>LEER MÁS</span>
                            <i class="icon-SVG-12"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="b1-slide">
                <div class="b1-bg" style="background-image: url('https://www.dondeviajamos.com/wp-content/uploads/2015/12/7450036670_376f6833f5_k-1024x375.jpg');"></div>
                <div class="wancho b1-cnt">
                    <figure class="b1-lanza-video">
                        <i class="icon-SVG-11"></i>
                    </figure>
                    <div class="b1-center">
                        <div class="b1-text">
                            <h2>
                                Compañía peruana líder
                                <strong>Gestión de proyectos </strong>
                            </h2>
                        </div>
                        <a href="#" class="g-button">
                            <span>LEER MÁS</span>
                            <i class="icon-SVG-12"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="b1-slide">
                <div class="b1-bg" style="background-image: url('https://unsplash.it/1920/700');"></div>
                <div class="wancho b1-cnt">
                    <figure class="b1-lanza-video">
                        <i class="icon-SVG-11"></i>
                    </figure>
                    <div class="b1-center">
                        <div class="b1-text">
                            <h2>
                                Compañía peruana líder
                                <strong>Gestión de proyectos </strong>
                            </h2>
                        </div>
                        <a href="#" class="g-button">
                            <span>LEER MÁS</span>
                            <i class="icon-SVG-12"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="b1-slide">
                <div class="b1-bg" style="background-image: url('https://unsplash.it/1920/700');"></div>
                <div class="wancho b1-cnt">
                    <figure class="b1-lanza-video">
                        <i class="icon-SVG-11"></i>
                    </figure>
                    <div class="b1-center">
                        <div class="b1-text">
                            <h2>
                                Compañía peruana líder
                                <strong>Gestión de proyectos </strong>
                            </h2>
                        </div>
                        <a href="#" class="g-button">
                            <span>LEER MÁS</span>
                            <i class="icon-SVG-12"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="b1-slide">
                <div class="b1-bg" style="background-image: url('https://unsplash.it/1920/700');"></div>
                <div class="wancho b1-cnt">
                    <figure class="b1-lanza-video">
                        <i class="icon-SVG-11"></i>
                    </figure>
                    <div class="b1-center">
                        <div class="b1-text">
                            <h2>
                                Compañía peruana líder
                                <strong>Gestión de proyectos </strong>
                            </h2>
                        </div>
                        <a href="#" class="g-button">
                            <span>LEER MÁS</span>
                            <i class="icon-SVG-12"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="b1-slide">
                <div class="b1-bg" style="background-image: url('https://unsplash.it/1920/700');"></div>
                <div class="wancho b1-cnt">
                    <figure class="b1-lanza-video">
                        <i class="icon-SVG-11"></i>
                    </figure>
                    <div class="b1-center">
                        <div class="b1-text">
                            <h2>
                                Compañía peruana líder
                                <strong>Gestión de proyectos </strong>
                            </h2>
                        </div>
                        <a href="#" class="g-button">
                            <span>LEER MÁS</span>
                            <i class="icon-SVG-12"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <h2 class="my-5 text-center" id="titulo">Mejores sitios para visitar en Almería</h2>

    <div class="container">
        <div class="row justify-content-center">
            @foreach ($comercioList as $comercio)
            <div class="col-3 mx-5 my-5 border shadow rounded" onclick="mostrarComercio({{$comercio->id}})">
                @foreach ($imagenList as $imagen)
                @if($comercio->id == $imagen->comercio_id)
                <img class="img-responsive w-100" src="/assets/imgs/comercio/{{$imagen->ruta}}" alt="{{$imagen->descripcion}}">
                @break
                @endif
                @endforeach
                <h2 class="p-2">{{$comercio->nombre ?? ''}}</h2>
                <div class="p-2"><img src="https://svgsilh.com/svg/1093169.svg" style="height:25px;width:25px;">{{$comercio->ubicacion ?? ''}}</div>
                <div id="descripcion" class="p-2">{{$comercio->descripcion ?? ''}}</div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-5">
        <hr>
        <h2 class="my-6 mt-5 text-center">Sitios que tienes que visitar en Almería</h2>
        <p class="text-center my-5">Una visita a la provincia de Almería ofrece todo lo necesario para unas vacaciones perfectas.
            Aventúrate en su escarpado paisaje para disfrutar de sus maravillas naturales,
            desenchufa en su larguísimas y sublimes playas y mézclate con los lugareños en la histórica ciudad de Almería.
        </p>
        <div class="row justify-content-center">
            @foreach($imagenCiudad as $imagen)
            <div class="col-5 p-0 m-3 border">
                <img class="img-responsive w-100" style="border-radius: initial;" src="/assets/imgs/comercio/{{$imagen->ruta}}" alt="{{$imagen->descripcion}}">
                <p class="p-3">{{$imagen->descripcion}}</p>
            </div>
            @endforeach


        </div>
    </div>


    <script>
        function mostrarComercio(id) {
            location.href = "/comercio/public/" + id;
        }

        $(document).ready(function() {
            $("#login").mouseenter(function() {
                $(this).css("border-bottom", "5px solid black").animate({
                    'borderWidth': '4px',
                    'borderColor': 'black'
                }, 500);
            });
            $("#login").mouseleave(function() {
                $(this).animate({
                    'borderWidth': '0px',
                    'borderColor': 'black'
                }, 500).css("border-style", "none");
            })
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>