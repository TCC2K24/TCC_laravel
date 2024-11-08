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
                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                        <a href="{{ route('cpa.tela-inicial') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <i class="bi bi-house-door"></i>
                            <span class="text-white">Início</span>
                        </a>
                    </li>

                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary active">
                        <a href="{{ route('cpa.minhas-pesquisas') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <i class="bi bi-journal-text"></i>
                            <span class="text-white">Minhas Pesquisas</span>
                        </a>
                    </li>

                        <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                            <a href="{{ route('cpa.modelos-de-formulario') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                                <i class="bi bi-border-all"></i>
                                <span class="text-white">Modelos de Formulários</span>
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
                    <h4>Minhas Pesquisas</h4>
                </div>

                <div class="container-fluid">
                    <div class="ms-2 align-items-center justify-content-center">
                        <div class="p-3 mb-3 bg-light border rounded d-flex row">
                            <h5>Filtros de Pesquisa</h5>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <form role="search">
                                        <div class="form-group mb-2">
                                            <label for="tituloPesquisa">Título da Pesquisa:</label>
                                            <input class="form-control" id="tituloPesquisa" type="search"
                                                placeholder="Pesquisar" aria-label="Search">
                                        </div>

                                        <div class="mt-3">
                                            <button class="btn btn-outline-success me-2" type="submit">
                                                <i class="bi bi-search"></i> Pesquisar
                                            </button>

                                            <button class="btn btn-outline-secondary" type="reset">
                                                <i class="bi bi-eraser"></i> Limpar
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="col-md-2">

                                <label>Situação:</label>
                                <select class="custom-select">
                                    <option value="">--- Selecione ---</option>
                                    <option value="1">Aberto</option>
                                    <option value="2">Fazendo</option>
                                    <option value="3">Pendente</option>
                                </select>

                            </div>


                            <div class="col-md-4">

                                <fieldset class="form-group">
                                    <legend class="col-form-label col-sm-2 pt-0">Exibir:</legend>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                            value="opcao1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Todos
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                            value="opcao2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Apenas pesquisas disponíveis
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                            value="opcao3">
                                        <label class="form-check-label" for="gridRadios3">
                                            Apenas pesquisas passadas
                                        </label>
                                    </div>
                                </fieldset>

                            </div>

                        </div>

                        <div class="d-grid gap-2 col-2 p-3">
                            <a href="{{ route('cpa.store') }}"> 
                            <button class="btn btn-success">Nova Pesquisa</button>
                            </a>
                        </div>

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
                                            <td>Em espera</td>
                                            <td class="text-warning fw-bold">Postar</td>
                                        </tr>

                                        <tr>
                                            <td>Pesquisa</td>
                                            <td>Data</td>
                                            <td>Data</td>
                                            <td>Grupo</td>
                                            <td>Fechado</td>
                                            <td class="text-success fw-bold">Finalizado</td>
                                        </tr>

                                        <tr>
                                            <td>Pesquisa</td>
                                            <td>Data</td>
                                            <td>Data</td>
                                            <td>Grupo</td>
                                            <td>Pendente</td>
                                            <td class="text-danger fw-bold">Pesquisa</td>
                                        </tr>

                                        <tr>
                                            <td>Pesquisa</td>
                                            <td>Data</td>
                                            <td>Data</td>
                                            <td>Grupo</td>
                                            <td>Pendente</td>
                                            <td class="text-danger fw-bold">Pesquisa</td>
                                        </tr>

                                        <tr>
                                            <td>Pesquisa</td>
                                            <td>Data</td>
                                            <td>Data</td>
                                            <td>Grupo</td>
                                            <td>Em espera</td>
                                            <td class="text-warning fw-bold">Postar</td>
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

</x-app-layout>