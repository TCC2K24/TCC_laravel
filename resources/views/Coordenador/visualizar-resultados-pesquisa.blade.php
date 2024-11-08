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

            <div class="col" style="margin-top: 80px;">
                <div class="p-2 fw-bold text-secondary d-flex">
                    <a class="navbar-brand h4 fs-4 text-secondary" href="{{ route('coordenador.visualizar-resultados') }}">
                        <i class="bi bi-arrow-left-short"></i> Resultados
                    </a>
                </div>

                <div class="container-fluid">
                    <div class="ms-2 align-items-center justify-content-center">
                        <div class="mt-3">
                            <div class="table-responsive">

                                <table class="table table-bordered align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="table-secondary">Pesquisa</th>
                                            <th scope="col" class="table-secondary">Disponível de</th>
                                            <th scope="col" class="table-secondary">Disponível até</th>
                                            <th scope="col" class="table-secondary">Grupo</th>
                                            <th scope="col" class="table-secondary">Situação</th>
                                            <th scope="col" class="table-secondary">Acompanhamento</th>
                                        </tr>
                                    </thead>

                                    <tbody class="table-group-divider">

                                        <tr>
                                            <td>Pesquisa</td>
                                            <td>Data</td>
                                            <td>Data</td>
                                            <td>Grupo</td>
                                            <td>Fechado</td>
                                            <td class="text-success fw-bold">Finalizado</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>