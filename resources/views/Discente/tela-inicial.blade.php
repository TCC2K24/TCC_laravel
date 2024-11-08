<x-app-layout>
    <x-navigation></x-navigation>


    <!-- Conteúdo da página -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto bg-light vh-100">
                <!-- Navbar lateral -->
                <ul class="nav nav-pills flex-column list-group" style="margin-top: 95px;">
                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary active">
                        <a href="{{ route('discente.tela-inicial') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <i class="bi bi-house-door"></i>
                            <span class="text-white">Início</span>
                        </a>
                    </li>

                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                        <a href="{{ route('discente.visualizar-pesquisas') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <i class="bi bi-journal-text"></i>
                            <span class="text-white">Minhas Pesquisas</span>
                        </a>
                    </li>

                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                        <a href="{{ route('discente.meus-certificados') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <i class="bi bi-clipboard2-check"></i>
                            <span class="text-white">Meus Certificados</span>
                        </a>
                    </li>

                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                        <a href="#" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <i class="bi bi-bank"></i>
                            <span class="text-white">Unidades Responsáveis</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col d-flex align-items-center justify-content-center">
                <div class="w-25 h-50 d-flex align-items-center justify-content-center">
                    <p class="text-dark text-center">
                        <mark class="bg-white fw-bold text-primary">Bem-vindo</mark> ao Perfil do
                            Aluno. Este sistema foi desenvolvido para proporcionar uma plataforma intuitiva e eficiente,
                            onde você pode participar das pesquisas de avaliação institucional, responder aos
                            formulários e acessar seus certificados de participação. Sua opinião é fundamental para a melhoria contínua das
                            nossas disciplinas e do corpo docente. Utilize o menu ao lado para navegar pelas principais funcionalidades.
                    </p>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>


    