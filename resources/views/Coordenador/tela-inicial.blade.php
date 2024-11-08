<x-app-layout>
    <x-navigation></x-navigation>


    <!-- Conteúdo da página -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto bg-light vh-100">
                <!-- Navbar lateral -->
                <ul class="nav nav-pills flex-column list-group" style="margin-top: 95px;">
                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary active">
                        <a href="{{ route('coordenador.tela-inicial') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <i class="bi bi-house-door"></i>
                            <span class="text-white">Início</span>
                        </a>
                    </li>
 
                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                        <a href="{{ route('coordenador.resultados') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <i class="bi bi-bar-chart-line"></i>
                            <span class="text-white">Resultados</span>
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
                            Coordenador. Este sistema foi desenvolvido para fornecer uma plataforma eficiente e
                            intuitiva, onde você pode acompanhar as respostas e acessar relatórios .
                            Utilize o menu ao lado para navegar pelas principais funcionalidades.
                    </p>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>


   



