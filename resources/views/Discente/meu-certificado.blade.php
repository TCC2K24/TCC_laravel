<x-app-layout>
    @auth('usuario')
    <x-navigation></x-navigation>

    <!-- Conteúdo da página -->
    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!--Sidebar-->
            <x-sidebar></x-sidebar>


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

    @else
        <!-- Não autenticados -->
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth
</x-app-layout>