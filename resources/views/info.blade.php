@extends('layouts.main')
@section('librerias')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="/../../assets/css/public.css"> --}}
@endsection

@section('content')

    <div class="container m-5 align-center">
        <div class="row m-5">
            <div class="col m-5">
                <h1>Aviso legal</h1>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <div>Alojamiento web:</div>
                    </div>
                    <div class="col-3">
                        <div>TourAlmeria<br>Calle Javier Sanz, 15<br>04004
                            Almería<br>España</div>
                    </div>
                </div> <br>

                <div class="row">
                    <div class="col-3">
                        <div>Consejo de Administración:</div>
                    </div>
                    <div class="col-3">
                        <div>Calle Javier Sanz, 15, 04004 Almería</div>
                    </div>
                </div> <br>

                <div class="row">
                    <div class="col-3">
                        <div>Contacto:</div>
                    </div>
                    <div class="col-3">
                        <div>
                            <a href="/contact">
                                Contacto
                            </a>
                        </div>
                    </div>
                </div> <br>

                <div class="row">
                    <div class="col-3">
                        <div>
                            Registro:
                        </div>
                    </div>
                    <div class="col-3">
                        <div>Calle Javier Sanz, 15, 04004 Almería</div>
                    </div>
                </div> <br>










                <div class="row">La Comisión Europea dispone de una plataforma para la resolución
                    de litigios
                    en línea (RLL). Puedes acceder a ella a través del siguiente enlace: <a
                        href="http://ec.europa.eu/consumers/odr/%22%3">http://ec.europa.eu/consumers/odr</a></div> <br>
                <div class="row">
                    TourAlmeria no tiene la obligación ni la intención de participar en la resolución de conflictos
                    a través de
                    juntas arbitrales de consumo.
                </div>
            </div>
        </div>
    </div>
@endsection
