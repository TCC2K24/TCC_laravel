<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Certificados - Discente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

     <!-- Navbar fixa -->
     <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Logo_oficial_da_UFPR_%28fundo_branco%29.svg/1200px-Logo_oficial_da_UFPR_%28fundo_branco%29.svg.png"
                    alt="Logo" width="60" height="50" class="d-inline-block align-items-center">
                Formulários UFPR
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
            </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-house-door align-items-center justify-content-center" viewBox="0 0 16 16">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                            </svg>
                            <span class="text-white">Início</span>
                        </a>
                    </li>

                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                        <a href="{{ route('discente.visualizar-pesquisas') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-journal-text" viewBox="0 0 16 16">
                                <path
                                    d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                <path
                                    d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                                <path
                                    d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                            </svg>
                            <span class="text-white">Minhas Pesquisas</span>
                        </a>
                    </li>

                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary active">
                        <a href="{{ route('discente.meus-certificados') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-building-fill-check" viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514" />
                                <path
                                    d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7.256A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-3.59 1.787A.5.5 0 0 0 9 9.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .39-.187A4.5 4.5 0 0 0 8.027 12H6.5a.5.5 0 0 0-.5.5V16H3a1 1 0 0 1-1-1zm2 1.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3 0v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                            </svg>
                            <span class="text-white">Meus Certificados</span>
                        </a>
                    </li>

                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                        <a href="#" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bank" viewBox="0 0 16 16">
                                <path
                                    d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z" />
                            </svg>
                            <span class="text-white">Unidades Responsáveis</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col" style="margin-top: 80px;">
                <div class="p-2 fw-bold text-secondary d-flex">
                    <h4>Meus Certificados</h4>
                </div>

                <div class="container-fluid">
                    <div class="ms-2 align-items-center justify-content-center">
                        <div class="p-3 mb-3 bg-light border rounded">
                            <h5>Filtros de Pesquisa</h5>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <form role="search">
                                        <div class="form-group mb-2">
                                            <label for="tituloPesquisa">Título da Pesquisa:</label>
                                            <input class="form-control" id="tituloPesquisa" type="search" placeholder="Pesquisar" aria-label="Search">
                                        </div>

                                        <div class="mt-3">
                                            <button class="btn btn-outline-success me-2" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                                  </svg> Pesquisar
                                            </button>
                                            
                                            <button class="btn btn-outline-secondary" type="reset">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
                                                    <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293z"/>
                                                  </svg> Limpar
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            
                        </div>
                        

                        <div class="mt-3">
                            <div class="table-responsive">

                                <table class="table table-bordered align-middle">
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
                                            <td>
                                                <a href="{{ route('discente.meu-certificado') }}" class="text-success fw-bold text-decoration-none">Finalizado</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>dd/mm/aaaa</td>
                                            <td>Pesquisa</td>
                                            <td>Data</td>
                                            <td>Data</td>
                                            <td>Grupo</td>
                                            <td>Fechado</td>
                                            <td class="text-success fw-bold">Finalizado</td>
                                        </tr>

                                        <tr>
                                            <td>dd/mm/aaaa</td>
                                            <td>Pesquisa</td>
                                            <td>Data</td>
                                            <td>Data</td>
                                            <td>Grupo</td>
                                            <td>Fechado</td>
                                            <td class="text-success fw-bold">Finalizado</td>
                                        </tr>

                                        <tr>
                                            <td>dd/mm/aaaa</td>
                                            <td>Pesquisa</td>
                                            <td>Data</td>
                                            <td>Data</td>
                                            <td>Grupo</td>
                                            <td>Fechado</td>
                                            <td class="text-success fw-bold">Finalizado</td>
                                        </tr>

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

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>


</body>

</html>