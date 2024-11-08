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

            <div class="col" style="margin-top: 80px;">
                <div class="p-2 fw-bold text-secondary d-flex">
                    <a class="navbar-brand mb-0 h4 fs-4 text-secondary" href="{{ route('discente.meus-certificados') }}">
                        <i class="bi bi-arrow-left-short"></i> Meu Certificado
                    </a>   
                </div>

                        <div class="p-2">
                            <div class="table-responsive">

                                <table class="table table-bordered align-middle w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="table-secondary">Emissão</th>
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
                                            <td>dd/mm/aaaa</td>
                                            <td>Pesquisa</td>
                                            <td>Data</td>
                                            <td>Data</td>
                                            <td>Grupo</td>
                                            <td>Fechado</td>
                                            <td class="text-success fw-bold">Finalizado</td>
                                        </tr>

                                    </tbody>
                                </table>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-success" type="submit">
                                        <i class="bi bi-download"></i> Baixar
                                    </button>
                                </div>

                                <div class="bg-light mt-4">
                                    <div class="card text-center">
                                        <div class="card-header">
                                          Certificado
                                        </div>
                                        <div class="card-body">
                                         <p>certicado x</p>
                                        </div>
                                        <div class="card-footer text-muted">
                                          dd/mm/aaaa
                                        </div>
                                      </div>
                                </div>

                                <!-- // Popup para informar que o certificado será baixado, Falta implementar
                                <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                      <div class="toast-body">
                                        Seu Certificado será Baixado!.
                                      </div>
                                      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                  </div>
                                -->

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

</x-app-layout>