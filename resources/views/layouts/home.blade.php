@extends('layouts.app')

@section('content')

    <!-- ========================= CARROSSEL HERO ========================= -->

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="coverimg-one"></div>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Bem-vindo à Kino Angola</h1>
                        <p class="opacity-75">Encontre os melhores restaurantes, bares, e roulotes da nossa banda</p>
                        <p><a class="botao_principal text-white" href="#searchfilter">Explorar Agora</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="coverimg-two"></div>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Gastronomia Cultural</h1>
                        <p>Sua Aventura Gastronômica Começa <a class="botao_principal text-white" href="views/estabelecimentos.html#cultural">Aqui</a></p>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="coverimg-three"></div>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Encontre os melhores restaurantes <br> e locais de lazer ao seu redor.</h2>
                        <p><a class="botao_principal text-white" href="views/estabelecimentos.html">Visitar Estabelecimentos</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
