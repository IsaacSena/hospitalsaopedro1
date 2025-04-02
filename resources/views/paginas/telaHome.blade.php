<x-layout titulo="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white py-3 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">
            <img style="width:60px; height:auto;" src="{{ URL::to('/assets/img/logo3.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav d-flex align-items-center mx-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sobrenos">Sobre-nós</a>
                    </li>
                </ul>
                <form class="d-flex justify-content-center" role="search">
                    <button class="btn btn-outline-primary mx-2" type="button" onclick="window.location.href='/loginPaciente'">Paciente</button>
                    <button class="btn btn-outline-primary mx-2" type="button" onclick="window.location.href='/loginFuncionario'">Funcionários</button>
                    <button class="btn btn-outline-secondary mx-2" type="button" onclick="window.location.href='/loginAdm'">Portal ADM</button>
                </form>
            </div>
        </div>
    </nav>

    <!--é um carrosel auto play-->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="{{ URL::to('/assets/img/home1.png') }}">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{ URL::to('/assets/img/home2.png') }}">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>














    

    <!-- Footer -->
    <footer class="bg" style="background-color:#72C5E6; text-center text-lg-start text-white w-100 mt-5">
        <div class="container-fluid p-4">
            <div class="row my-4">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
                    <img style="width:150px; height:auto;" src="{{ URL::to('/assets/img/logo3.png') }}">
                    </div>
                    <p class="text-center">Hospital São Pedro <br>Bem-vindo ao nosso hospital! Oferecemos atendimento de qualidade e cuidado com a sua saúde.</p>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Pacientes</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="/loginPaciente" class="text-white">Login</a>
                        </li>
                        <li class="mb-2">
                            <a href="/cadastrarPaciente" class="text-white">Registrar-se</a>
                        </li>
                        <li class="mb-2">
                            <a href="/alterarSenhaPaciente" class="text-white">Alterar Senha</a>
                        </li>
                        <li class="mb-2">
                            <a href="/consultaPaciente" class="text-white">Consultas</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Funcionários</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="/loginFuncionarios" class="text-white">Login</a>
                        </li>
                        <li class="mb-2">
                            <a href="/alterarSenhaFuncionario" class="text-white">Alterar Senha</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Portal ADM</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="/loginAdm" class="text-white"><i class="fas fa-paw pe-3"></i>Login</a>
                        </li>
                        <li class="mb-2">
                            <a href="/cadastrarAdm" class="text-white"><i class="fas fa-paw pe-3"></i>Registrar-se</a>
                        </li>
                        <li class="mb-2">
                            <a href="/alterarSenhaAdm" class="text-white"><i class="fas fa-paw pe-3"></i>Alterar Senha</a>
                        </li>
                    </ul>
                </div>>
            </div>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2025 Copyright:
            <a class="text-white">Hospital São Pedro</a>
        </div>
    </footer>
</x-layout>
