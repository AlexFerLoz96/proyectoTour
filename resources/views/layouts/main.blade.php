<html>

<head>
    <title>@yield('Titulo')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="assets/js/carrusel.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/carrusel.css">
</head>

<body>

    <nav id="navbar" class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Tour</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/categoria/public">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/comercio">Comercios</a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Inicia sesión</a>
                </li>
            </ul>
            <!--
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            -->
        </div>
    </nav>
    <!--<div id="fondo-negro"></div>
    <h1 id="text-intro-image" style="position: absolute; z-index: 1;">Almería
        <span class="subtitulo-intro-image">Conoce nuestra ciudad</span></h1>
    <div id="intro-image" class="intro-image" style="background-image:url(https://cdn.getyourguide.com/img/location/5440ed46358e9.jpeg/88.jpg);">
        
        
    </div>-->
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
            <div class="b1-slide" >
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


    <div id="container">
        <div class="row justify-content-center">
            @foreach ($comercioList as $comercio)
            <div class="col-5" onclick="mostrarComercio({{$comercio->id}})">
                <div class="nombre">{{$comercio->nombre ?? ''}}</div>
                <div class="ubicacion"><img src="https://svgsilh.com/svg/1093169.svg" style="height:25px;width:25px;">{{$comercio->ubicacion ?? ''}}</div>
                <div class="descripcion">{{$comercio->descripcion ?? ''}}</div>
            </div>

            @endforeach
        </div>
    </div>
    
    <script>
    
        function mostrarComercio(id){
            location.href = "/comercio/public/" + id;
        }

    </script>

</body>

</html>