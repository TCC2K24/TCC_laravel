<x-app-layout>

     <!-- Navbar fixa -->
     <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Logo_oficial_da_UFPR_%28fundo_branco%29.svg/1200px-Logo_oficial_da_UFPR_%28fundo_branco%29.svg.png"
                    alt="Logo" width="60" height="50" class="d-inline-block align-items-center">
                Formulários UFPR
            </a>

            <i class="bi bi-person-fill" style="font-size: 30px;"></i>

        </div>
    </nav>

    <!-- Conteúdo da página -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto bg-light vh-100">
                <!-- Navbar lateral -->
                <ul class="nav nav-pills flex-column list-group" style="margin-top: 95px;">
                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary active">
                        <a href="{{ route('cpa.tela-inicial') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <i class="bi bi-house-door"></i>
                            <span class="text-white">Início</span>
                        </a>
                    </li>
 
                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                        <a href="{{ route('cpa.resultados') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
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

            <div class="col" style="margin-top: 80px;">
                <div class="p-2 fw-bold text-secondary d-flex">
                    <a class="navbar-brand h4 fs-4 text-secondary" href="{{ route('coordenador.visualizar-resultados') }}">
                        <i class="bi bi-arrow-left-short"></i> Resultados
                    </a>
                </div>

                <div class="d-flex justify-content-center align-items-center mt-3">
                    <div class="card col-md-6">
                        <h5 class="card-header">Matéria</h5>
                        <div class="card-body">
                            <h5 class="card-title">Informação</h5>
                            <p class="card-text">Descrição.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</x-app-layout>