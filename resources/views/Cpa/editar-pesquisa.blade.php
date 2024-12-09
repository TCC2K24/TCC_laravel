<x-app-layout>
    @auth('servidor')

    <div class="nav flex-column">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid align-items-center">
                <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="{{ route('cpa.minhas-pesquisas') }}">
                    <i class="bi bi-arrow-left-short"></i> Editar Pesquisa
                </a>
                <i class="bi bi-person-fill" style="font-size: 30px;"></i>
            </div>
        </nav>
    </div>

    <form method="POST" class="form was-validated" action="{{ route('cpa.salvar-edicao-pesquisa', $pesquisa->idPesquisa) }}">
        @csrf()
        @method('PUT')
        <div class="d-flex justify-content-center align-items-center mt-3">

            <div class="card w-25 m-3">
                <h5 class="card-header">Tipo de Pesquisa</h5>
                <div class="card-body">
                    <p class="card-text">Informe o Tipo:</p>
                    <div class="col-auto form-group">
                        <select class="form-select" name="tipo" required>
                            <option value="">--- Selecione ---</option>
                            <option value="Qualidade do Curso" {{ $pesquisa->tipo == 'Qualidade do Curso' ? 'selected' : '' }}>Qualidade do Curso</option>
                            <option value="Infraestrutura" {{ $pesquisa->tipo == 'Infraestrutura' ? 'selected' : '' }}>Infraestrutura</option>
                            <!-- Outras opções -->
                        </select>
                        <div class="invalid-feedback">Por Favor, selecione o Tipo de Pesquisa.</div>
                    </div>
                </div>
            </div>

            <div class="card w-25 m-3">
                <h5 class="card-header">Nome</h5>
                <div class="card-body">
                    <p class="card-text">Informe o Nome:</p>
                    <div class="form-group flex-nowrap">
                        <input type="text" name="descricao" class="form-control is-valid" placeholder="Nome da Pesquisa" value="{{ $pesquisa->descricao }}" required>
                        <div class="invalid-feedback">Por Favor, informe o Nome da Pesquisa.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center mt-3">

            <div class="card w-25 m-3">
                <h5 class="card-header">Período</h5>
                <div class="card-body">
                    <p class="card-text">Informe o Período:</p>
                    <div class="col-auto form-group">
                        <select name="periodo" class="form-control" required>
                            <option value="Período 1" {{ $pesquisa->periodo == 'Período 1' ? 'selected' : '' }}>Período 1</option>
                            <option value="Período 2" {{ $pesquisa->periodo == 'Período 2' ? 'selected' : '' }}>Período 2</option>
                            <!-- Outras opções -->
                        </select>
                        <div class="invalid-feedback">Por Favor, informe o Período da Pesquisa.</div>
                    </div>
                </div>
            </div>

            <div class="card w-25 m-3">
                <h5 class="card-header">Setor</h5>
                <div class="card-body">
                    <p class="card-text">Informe o Setor:</p>
                    <div class="col-auto form-group">
                        <select id="setor" name="setor_id" class="form-control" required>
                            <option value="">--- Selecione ---</option>
                            @foreach ($setores as $setor)
                                <option value="{{ $setor->idSetor }}" {{ $pesquisa->setor_id == $setor->idSetor ? 'selected' : '' }}>{{ $setor->nomeSetor }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Por Favor, informe o Setor da Pesquisa.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center mt-3">
            <div class="card w-25 m-3">
                <h5 class="card-header">Cursos</h5>
                <div class="card-body">
                    <p class="card-text">Informe o(os) Curso(os):</p>
                    <div class="col-auto form-group" id="cursos">
                        <!-- Cursos serão carregados aqui após selecionar o setor -->
                        @include('components.cursos', ['cursos' => $cursos, 'cursosSelecionados' => $pesquisa->Curso->pluck('idCurso')])
                    </div>
                </div>
            </div>

            <div class="card w-25 m-3">
                <h5 class="card-header">Data Limite</h5>
                <div class="card-body">
                    <p class="card-text">Informe a Data Limite:</p>
                    <div class="form-group flex-nowrap">
                        <input type="date" name="dataFim" class="form-control is-valid" value="{{ $pesquisa->dataFim }}" required>
                        <div class="invalid-feedback">Por Favor, informe a Data Limite da Pesquisa.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 col-3 mx-auto p-5">
            <button class="btn btn-success" type="submit">Salvar Alterações</button>
        </div>
    </form>

    @else
        <!-- Não autenticados -->
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    // Ao mudar o setor
    $('#setor').change(function() {
        var setorId = $(this).val();  // Obtém o ID do setor selecionado
        
        // Verifica se um setor foi selecionado
        if (setorId) {
            $.ajax({
                url: '/servidor/cursos/' + setorId, // URL correta para buscar os cursos
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log('Dados JSON recebidos:', data);

                    // Limpa a lista de cursos antes de preencher
                    $('#cursos').html('');

                    // Adiciona os cursos à lista de checkboxes
                    if (data.length > 0) {
                        data.forEach(function(curso) {
                            var isChecked = {{ json_encode($cursosSelecionados) }}.includes(curso.idCurso);
                            var cursoHtml = `
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="curso_id[]" value="${curso.idCurso}" id="curso_${curso.idCurso}" ${isChecked ? 'checked' : ''}>
                                    <label class="form-check-label" for="curso_${curso.idCurso}">
                                        ${curso.nomeCurso}
                                    </label>
                                </div>
                            `;
                            $('#cursos').append(cursoHtml);
                        });
                    } else {
                        $('#cursos').html('<p>Nenhum curso disponível para este setor.</p>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Erro ao carregar cursos:', error);
                    alert('Erro ao carregar cursos.');
                }
            });
        } else {
            // Se nenhum setor for selecionado, limpe a lista de cursos
            $('#cursos').html('');
        }
    });
});

</script>
