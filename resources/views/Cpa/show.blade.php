<x-app-layout>
    @auth('servidor')
    <div class="nav flex-column">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid align-items-center">
                <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="{{ route('cpa.minhas-pesquisas') }}">
                    <i class="bi bi-arrow-left-short"></i> Detalhes da Pesquisa
                </a>
                <i class="bi bi-person-fill" style="font-size: 30px;"></i>
            </div>
        </nav>
    </div>

    <div class="container mt-3">
        <!-- Primeira seção: Tipo de Pesquisa e Nome -->
        <div class="row mb-5">  <!-- Aumentando a margem inferior para mais espaçamento -->
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Tipo de Pesquisa</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $pesquisa->tipo }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Nome</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $pesquisa->descricao }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Segunda seção: Período e Setor -->
        <div class="row mb-5">  <!-- Aumentando a margem inferior para mais espaçamento -->
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Período</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $pesquisa->periodo }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Setor</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $pesquisa->setor_id }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Terceira seção: Cursos e Data Limite -->
        <div class="row mb-5">  <!-- Aumentando a margem inferior para mais espaçamento -->
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Cursos</h5>
                    <div class="card-body">
                        @foreach($pesquisa->Curso as $curso)
                            <p class="card-text">{{ $curso->nomeCurso }}</p>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Data Limite</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $pesquisa->dataFim }}</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="d-flex justify-content-center mt-5 gap-3">
            <a href="{{ route('cpa.formularios-da-pesquisa', ['id' => $pesquisa->idPesquisa]) }}" class="btn btn-success border border-dark">
                <i class="bi bi-file-earmark-plus"></i> Formulários
            </a>
            @if ($pesquisa->status != 'postada')
            <a href="{{ route('cpa.editar-pesquisa', ['id' => $pesquisa->idPesquisa]) }}" class="btn btn-primary border border-dark">
                <i class="bi bi-pencil-square"></i> Editar
            </a>

            <form action="{{ route('cpa.remover-pesquisa', ['id' => $pesquisa->idPesquisa]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover esta pesquisa?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger border border-dark">
                    <i class="bi bi-trash"></i> Excluir
                </button>
            </form>
            @endif
            @if ($pesquisa->dataFim < now() && $pesquisa->status == 'postada')
            <a href="{{ route('cpa.finalizar', ['id' => $pesquisa->idPesquisa]) }}" class="btn btn-danger border border-dark">
                <i class="bi bi-check-circle"></i> Finalizar Pesquisa
            </a>
            @endif
        </div>

        
    </div>

    @else
        <!-- Não autenticado -->
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth
</x-app-layout>
