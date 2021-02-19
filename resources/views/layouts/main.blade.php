<html>

<head>
    <title>@yield('Titulo')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="assets/js/carrusel.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/carrusel.css">
</head>

<body>
    <div class="navbar">
        <table id="navbar">
            <tr>
                <td><a id="titulo" href="/">Tour</a></td>
                <td><a class="" href="/user">Crud</a></td>
                <td id="miSelect"><select class="select">
                        <option>Categorías</option>
                        @foreach ($categoriaList as $categoria)
                        <option value="{{$categoria->id ?? ''}}">{{$categoria->nombre ?? ''}}</option>
                        @endforeach
                    </select>
                </td>
                <td >
                    <form action="{{route('comercio.search')}}" class="miForm">
                    {{ csrf_field() }}

                        <input type="search" class="input" name="busqueda">
                        <button type="submit" class="submit" value=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="r-xfsgu1 r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-18qmn74 r-1hfyk0a r-bnwqim r-1plcrui r-lrvibr"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg></button>
                    </form>
                </td>
                
                <td  id="login"><a  href="/login">Inicia sesión</a></td>
            </tr>
        </table>
    </div>
    
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


    <div id="container">
        <div class="row justify-content-center">
            @foreach ($comercioList as $comercio)
            <div class="col-5" onclick="mostrarComercio({{$comercio->id}})">
                <div class="nombre">{{$comercio->nombre ?? ''}}</div>
                <div><a href="{{$comercio->id}}"></a></div>
                <div class="ubicacion"><img src="https://svgsilh.com/svg/1093169.svg" style="height:25px;width:25px;">{{$comercio->ubicacion ?? ''}}</div>
                <div class="descripcion">{{$comercio->descripcion ?? ''}}</div>
            </div>

            @endforeach
        </div>
    </div>

    <script>
        function mostrarComercio(id) {
            location.href = "/comercio/public/" + id;
        }
    </script>

</body>

</html>