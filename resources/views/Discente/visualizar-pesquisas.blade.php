<x-app-layout>
    
    @if(auth('usuario')->check() || auth('servidor')->check())
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

                        <div class="mt-3">
                            <div class="table-responsive">

                                <table class="table table-bordered align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="table-secondary">Pesquisa</th>
                                            <th scope="col" class="table-secondary">Disponível de</th>
                                            <th scope="col" class="table-secondary">Disponível até</th>
                                        </tr>
                                    </thead>

                                    <tbody class="table-group-divider">
                                        @forelse($pesquisas as $pesquisa)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('discente.participar-pesquisas', ['id' => $pesquisa->idPesquisa]) }}">
                                                        {{ $pesquisa->descricao }}
                                                    </a>
                                                </td>
                                                <td>{{ $pesquisa->dataInicio }}</td>
                                                <td>{{ $pesquisa->dataFim }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Nenhuma pesquisa aberta no momento</td>
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