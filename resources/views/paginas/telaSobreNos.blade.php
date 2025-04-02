<x-layout titulo="sobreNos">
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

    <!-- Main Content -->
    <main>
        <!-- Hero Section (Imagem do Hospital) -->
        <section style="display: grid; place-items: center; height: 100vh;">
            <div style="width: 100%; height: 700px; background-image: url('https://portalhospitaisbrasil.com.br/wp-content/uploads/2021/09/predio.jpg'); background-size: cover; border: 1px solid #ccc;">
            </div>
        </section>

        <!-- História do Hospital -->
        <section style="display: flex; justify-content: center; align-items: center; padding: 60px 0;">
            <div style="width: 80%; max-width: 1200px; display: flex; justify-content: space-between; gap: 20px;">
                <div style="flex: 1; background-color: #E3F6FF; padding: 20px;">
                    <h2 style="font-size: 28px; font-weight: bold; color: #333;">História do Hospital São Pedro</h2>
                    <p style="font-size: 18px; line-height: 1.6; color:  #555;">
                        Fundado no ano 2000, o Hospital São Pedro nasceu com a missão de oferecer atendimento médico particular de alta qualidade para a população de Vila Esperança. Criado para suprir a necessidade de um centro de saúde moderno, foi construído com o apoio de médicos, empresários e da comunidade, tornando-se uma referência em cuidado e inovação.
                    </p>
                    <p style="font-size: 18px; line-height: 1.6; color: #555;">
                        Desde sua inauguração, com 50 leitos e pronto-atendimento 24h, o hospital cresceu e evoluiu. Hoje, conta com mais de 200 leitos, centro cirúrgico de última geração, UTI especializada e diversas especialidades médicas, garantindo segurança, conforto e atendimento humanizado para seus pacientes.
                    </p>
                </div>
                <div style="flex: 1;">
                <img src="https://th.bing.com/th/id/OIP.3sOyCXTIKajAXASJHAjQVAHaE6?rs=1&pid=ImgDetMain" alt="Estrutura Hospital" style="width: 100%; height: auto; border-radius: 8px;">
                </div>
            </div>
        </section>

        <!-- Estrutura e Tecnologia -->
        <section style="display: flex; justify-content: center; align-items: center; padding: 60px 0;">
            <div style="width: 80%; max-width: 1200px; display: flex; justify-content: space-between; gap: 20px;">
                <div style="flex: 1;">
                    <img src="https://topview.com.br/wp-content/uploads/2024/02/estrutura_iop-instituto-oncologia-parana-premio-mais-saude-topview.jpg" alt="Estrutura Hospital" style="width: 100%; height: auto; border-radius: 8px;">
                </div>
                <div style="flex: 1; background-color: #E3F6FF; padding: 20px;">
                    <h2 style="font-size: 28px; font-weight: bold; color: #333;">Estrutura e Tecnologia do Hospital São Pedro</h2>
                    <p style="font-size: 18px; line-height: 1.6; color: #555;">
                        O Hospital São Pedro oferece uma infraestrutura moderna e completa, com mais de 200 leitos, centro cirúrgico de última geração, UTI de alta complexidade e pronto-atendimento 24h.
                    </p>
                    <p style="font-size: 18px; line-height: 1.6; color: #555;">
                        Combinamos tecnologia avançada e atendimento humanizado, utilizando equipamentos de ponta e prontuários eletrônicos para garantir diagnósticos rápidos e precisos. Investimos também em telemedicina para consultas à distância, proporcionando conveniência e eficiência.
                    </p>
                    <p style="font-size: 18px; line-height: 1.6; color: #555;">
                        Nosso compromisso é oferecer um atendimento seguro, acolhedor e de excelência para cada paciente.
                    </p>
                </div>
            </div>
        </section>

        <!-- Depoimentos -->
         <h2 style="text-align:center;"><br>Fundadores</h2>
        <section style="display: flex; justify-content: center; gap: 20px; padding: 60px 0;">
            <div style="text-align: center; max-width: 400px;">
            <img style="width:223px; height:auto;" src="{{ URL::to('/assets/img/leon.jpeg') }}">
                <strong><p style="font-size: 18px;">Leonardo</p></strong>
                <p style="font-size: 16px; line-height: 1.4; padding: 10px 0; color: #555;">"Saúde de qualidade deve ser um compromisso, não um privilégio. Construímos este hospital para levar inovação e um atendimento de alto padrão a quem precisa"</p>
            </div>
            <div style="text-align: center; max-width: 400px;">
            <img style="width:300px; height:auto;" src="{{ URL::to('/assets/img/emerson.jpeg') }}">
                <strong><p style="font-size: 18px;">Emerson</p></strong>
                <p style="font-size: 16px; line-height: 1.4; padding: 10px 0; color: #555;">"A medicina não é apenas tratar doenças, mas cuidar de pessoas. Fundamos este hospital para que cada paciente seja tratado com respeito, dignidade e excelência."</p>
            </div>
        </section>
    </main>

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
