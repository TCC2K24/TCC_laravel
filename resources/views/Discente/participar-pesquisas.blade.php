<x-app-layout>
    @auth('usuario')
    <x-navigation></x-navigation>

    <div class="d-flex justify-content-center align-items-center" style="margin-top: 80px;">
        <div class="fs-3 fw-bold text-secondary">
            <h3>Formulários</h3>
        </div>
    </div>

    @if ($formularios->isEmpty())
        <div class="d-flex justify-content-center align-items-center mt-3">
            <div class="card col-md-6">
                <h5 class="card-header">Nenhum Formulário Criado</h5>
                <div class="card-body">
                    <p class="card-text">Ainda não há formulários cadastrados para esta pesquisa.</p>
                </div>
            </div>
        </div>
    @else
        <!-- Lista de Formulários -->
        @foreach ($formularios as $formulario)
            <div class="d-flex justify-content-center align-items-center mt-3">
                <div class="card col-md-6">
                    <h5 class="card-header">Formulário {{ $formulario->nome_formulario }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">Disciplina: {{ $formulario->disciplina->nomeDisciplina }}</h5>
                        <p class="card-text">Tempo de Participação: {{ $formulario->tempoDeParticipacao }} minutos</p>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('discente.responder-formulario', ['idPesquisa' => $formulario->pesquisa->idPesquisa, 'idFormulario' => $formulario->idFormulario]) }}" class="btn btn-outline-primary">Responder</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

    @else
        <!-- Não autenticados -->
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth

</x-app-layout>
