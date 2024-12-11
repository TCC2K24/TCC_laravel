<x-app-layout>
    @auth('servidor')
    <div class="nav flex-column">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid align-items-center">
                <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="{{ route('cpa.resultados') }}">
                    <i class="bi bi-arrow-left-short"></i> Pesquisa
                </a>

                <a href="{{ route('pesquisa.resultados', ['idPesquisa' => $pesquisa->idPesquisa]) }}">
                    <p class="text-danger h6 fw-bold">Clique <mark class="bg-white fw-bold text-primary">AQUI</mark> para ver o Resultado da Pesquisa</p>
                </a>

                <i class="bi bi-person-fill" style="font-size: 30px;"></i>

            </div>
        </nav>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="fs-3 fw-bold text-secondary">
            <h3>Formulários da Pesquisa: {{ $pesquisa->descricao }}</h3>
        </div>
    </div>

    @foreach($formularios as $index => $formulario)
    <div class="d-flex justify-content-center align-items-center mt-3"> 
        <div class="card col-md-6">
            <h5 class="card-header">{{ $formulario->nome_formulario }}</h5>
            <div class="card-body">
                <h5 class="card-title">{{$formulario->disciplina->nomeDisciplina}}</h5>
                <p class="card-text">Tempo de Participação: {{ $formulario->tempoDeParticipacao }} minutos</p>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('cpa.visualizar-resultados-formulario', ['idPesquisa' => $pesquisa->idPesquisa, 'position' => $index + 1]) }}" class="btn btn-outline-primary m-1">Ver Resultado</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @else
        <!-- Não autenticados -->
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth
</x-app-layout>
