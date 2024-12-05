<x-app-layout>
    @auth('servidor')
    <x-navigation></x-navigation>

    <!-- Conteúdo da página -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
           
            <!--Sidebar-->
            <x-sidebar></x-sidebar>

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
                            <a href="{{ route('cpa.store') }}" class="btn btn-success d-inline-flex align-items-center justify-content-center">
                                Nova Pesquisa
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
                                            <th scope="col" class="table-secondary">Setor</th>
                                            <th scope="col" class="table-secondary">Situação</th>
                                            <th scope="col" class="table-secondary">Acompanhamento</th>
                                        </tr>
                                    </thead>

                                    <tbody class="table-group-divider">
                                        @forelse($pesquisas as $pesquisa)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('cpa.show', ['id' => $pesquisa->idPesquisa]) }}">
                                                        {{ $pesquisa->descricao }}
                                                    </a>
                                                </td>
                                                <td>{{ $pesquisa->dataInicio }}</td>
                                                <td>{{ $pesquisa->dataFim }}</td>
                                                <td>{{ $pesquisa->setor_id }}</td>
                                                <td>{{ $pesquisa->status }}</td>
                                                <td class="text-{{ $pesquisa->status === 'em aberto' ? 'warning' : ($pesquisa->situacao === 'Fechado' ? 'success' : 'danger') }} fw-bold">
                                                    {{ $pesquisa->status === 'em aberto' ? 'Postar' : ($pesquisa->situacao === 'Fechado' ? 'Finalizado' : 'Pesquisa') }}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Nenhuma pesquisa encontrada</td>
                                            </tr>
                                        @endforelse
                                    </tbody>

                                </table>
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