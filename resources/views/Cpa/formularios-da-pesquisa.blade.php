<x-app-layout>
    @auth('servidor')
    <!-- Navbar fixa -->
    <div class="nav flex-column">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid align-items-center">
                <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="#">
                    <i class="bi bi-arrow-left-short"></i> Pesquisa de Qualidade
                </a>
                <i class="bi bi-person-fill" style="font-size: 30px;"></i>
            </div>
        </nav>
    </div>

    <!-- Título -->
    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="fs-3 fw-bold text-secondary">
            <h3>Formulários</h3>
        </div>
    </div>

    <!-- Verifica se há formulários -->
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
                            <a href="{{ route('tela-inicial-s', ['id' => $formulario->idFormulario]) }}" 
                               class="btn btn-outline-primary m-1">Editar</a>
                            <form action="{{ route('cpa.excluir-formulario', ['idPesquisa' => $pesquisa->idPesquisa, 'idFormulario' => $formulario->idFormulario]) }}" 
                                  method="POST" class="m-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem certeza que deseja excluir este formulário?')">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

    <!-- Botão para Novo Formulário -->
    <div class="d-flex justify-content-center mt-5">
        <a href="{{ route('cpa.criar-formulario', ['idPesquisa' => $pesquisa->idPesquisa]) }}" 
           class="btn btn-success border border-dark">
            <i class="bi bi-file-earmark-plus"></i> Novo Formulário
        </a>
    </div>
    @else
        <!-- Não autenticados -->
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth
</x-app-layout>
