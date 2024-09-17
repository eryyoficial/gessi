<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gessi')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('css/dash.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>

    <!-- CABEÇALHO -->
    <header class="d-flex align-items-center justify-content-around py-3 header text-light">
        <div class="">
            <a href="/gessi" class="d-inline-flex text-light text-decoration-none">
                <h2 class="my-auto">GESSI</h2>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/admin" class="nav-link px-2 text-light fw-semibold ">Home</a></li>
            <li><a href="{{ route('dashboard.residents') }}" class="nav-link px-2 text-light fw-semibold ">Chat</a></li>
            <li><a href="/admin/residentes" class="nav-link px-2 text-light fw-semibold ">Notificações</a></li>
            <li><a href="/admin/cuidadores" class="nav-link px-2 text-light fw-semibold ">Comunidade</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <button style="font-size: 1.5rem" type="button" class="btn text-success me-2"><i
                    class="ri-notification-3-line"></i></button>
            <button type="button" class="btn btn-outline-danger"><i class="ri-logout-box-r-line"></i>Logout</button>
        </div>
    </header>



    <!-- MAIN -->
    <div class="division d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary sidebar">
            <div class="d-flex flex-column align-items-center">
                <img src="https://github.com/mdo.png" alt="" width="150" height="150"
                    class="mx-auto rounded-circle mb-3">
                <h3 class="fw-bold text-white">Administrador</h3>
                <p class="text-white-50">Alberto José</p>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column">
                <li>
                    <a href="#" id="link-residentes" class="nav-link link-body-emphasis text-light"
                        data-content="residents">
                        <i class="ri-user-line me-1"></i>
                        Residentes
                    </a>
                </li>
                <li>
                    <a href="#" id="link-cuidadores" class="nav-link link-body-emphasis text-light"
                        data-content="caregivers">
                        <i class="ri-group-line me-1"></i>
                        Cuidadores
                    </a>
                </li>
                <li>
                    <a href="#" id="link-voluntarios" class="nav-link link-body-emphasis text-light"
                        data-content="volunteers">
                        <i class="ri-hand-heart-line me-1"></i>
                        Voluntários
                    </a>
                </li>
                <li>
                    <a href="#" id="link-doacoes" class="nav-link link-body-emphasis text-light"
                        data-content="donations">
                        <i class="ri-money-dollar-circle-line me-1"></i>
                        Doações
                    </a>
                </li>
                <li>
                    <a href="#" id="link-atividades" class="nav-link link-body-emphasis text-light"
                        data-content="activities">
                        <i class="ri-calendar-line me-1"></i>
                        Atividades
                    </a>
                </li>
                <li>
                    <a href="#" id="link-relatorios" class="nav-link link-body-emphasis text-light"
                        data-content="reports">
                        <i class="ri-file-chart-line me-1"></i>
                        Relatórios
                    </a>
                </li>
            </ul>
        </div>

        {{-- <iframe class="container border border-danger bg-dark" src="{{route('dashboard.residents')}}" frameborder="0"></iframe> --}}

        <div class="w-100" style="height: 100vh">
            @yield('content')
        </div>
    </div>











    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="js/scripts.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- Custom Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>
