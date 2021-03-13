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

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="/">Tour Almería</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-3 bg-light" id="navbarScroll">
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
                            <li><a class="dropdown-item" name="busqueda" href="/comercio/search?busqueda={{$categoria->nombre}}">{{$categoria->nombre}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <form action="{{route('comercio.search')}}" class="d-flex my-2 ml-1" style="width: 40%;">
                    {{ csrf_field() }}
                    <input class="form-control me-2" required type="search" placeholder="Search" aria-label="Search" name="busqueda">
                    <button class="btn btn-outline-primary" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </form>
                <ul class="navbar-nav ms-auto p-2">
                    <li class="nav-item">
                        <a class="nav-link active" id="login" href="/login">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            Inicia sesión </a>
                    </li>
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


    <footer class="position-relative bottom-0 end-0 w-100 bg-dark text-center text-white">
        <!--<div class="container p-4 pb-0">
                <section class="mb-4">
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
                </section>
            </div>
            -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white" href="/">TourAlmeria.com</a>
        </div>
    </footer>
</body>

<script>
    $(document).ready(function(){
        $("#arribaDiv").fadeOut(0);
        $(window).scroll(function(){
            if($(window).scrollTop() > 1500){
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