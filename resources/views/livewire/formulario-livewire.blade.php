<div class="container" style="margin-top: 80px;">
    <div class="card w-100 m-5 mx-auto">
        <h5 class="card-header">Nome do Formulário</h5>
        <div class="card-body">
            <p class="card-text">Informe o nome do Formulário</p>
            <div class="col-auto form-group">
                <input type="text" wire:model="nomeFormulario" class="form-control" required placeholder="Nome" />
                <div class="invalid-feedback">
                    Por favor, insira o nome do formulário
                </div>
            </div>
        </div>
    </div>

    <div class="card w-100 m-5 mx-auto">
        <h5 class="card-header">Disciplina</h5>
        <div class="card-body">
            <p class="card-text">Informe a Disciplina:</p>
            <div class="col-auto form-group">
                <select wire:model="disciplinaId" class="form-select" required>
                    <option value="">--- Selecione ---</option>
                    @foreach($disciplinas as $disciplina)
                        <option value="{{ $disciplina->idDisciplina }}">{{ $disciplina->nomeDisciplina }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Por favor, selecione a Disciplina.
                </div>
            </div>
        </div>
    </div>

    <div class="card w-100 m-5 mx-auto">
        <h5 class="card-header">Tempo de Participação</h5>
        <div class="card-body">
            <p class="card-text">Informe o tempo de participação (Em minutos, minimo de 15):</p>
            <div class="col-auto form-group">
                <input type="number" wire:model="tempoDeParticipacao" class="form-control" required min="1" step="1" placeholder="Tempo em minutos" />
                <div class="invalid-feedback">
                    Por favor, insira o tempo de participação.
                </div>
            </div>
        </div>
    </div>

    <!-- Exibição das Perguntas -->
    @foreach($perguntas as $index => $pergunta)
    <div class="card mb-3 p-3" wire:key="pergunta-{{ $index }}">
        <div class="d-flex align-items-center">
            <div class="flex-grow-1">
                <label for="pergunta-{{ $index }}" class="form-label">Pergunta:</label>
                <input type="text" id="pergunta-{{ $index }}" wire:model.defer="perguntas.{{ $index }}.pergunta" class="form-control" />
            </div>
            <div class="ms-3">
                <label for="tipo-{{ $index }}" class="form-label">Tipo:</label>
                <select wire:model="perguntas.{{ $index }}.tipo" class="form-select" id="tipo-{{ $index }}" wire:change="$refresh">
                    <option value="texto-curto">Texto Curto</option>
                    <option value="texto-longo">Texto Longo</option>
                    <option value="escolha-unica">Escolha Única</option>
                    <option value="multipla-escolha">Múltipla Escolha</option>
                    <option value="estrela">Avaliação Estrela</option>
                </select>
            </div>
        </div>

        <!-- Exibir opções quando for "Escolha Única" ou "Múltipla Escolha" -->
        @if($pergunta['tipo'] == 'escolha-unica' || $pergunta['tipo'] == 'multipla-escolha')
            <div class="mt-3">
                <button wire:click="adicionarOpcao({{ $index }})" class="btn btn-outline-primary btn-sm">
                    Adicionar Opção
                </button>
                <div class="mt-2">
                    @foreach($pergunta['opcoes'] as $opcaoIndex => $opcao)
                        <input type="text" wire:model="perguntas.{{ $index }}.opcoes.{{ $opcaoIndex }}" class="form-control mt-1" placeholder="Opção {{ $opcaoIndex + 1 }}" />
                        <button wire:click="removerOpcao({{ $index }}, {{ $opcaoIndex }})" class="btn btn-outline-danger btn-sm mt-1">
                            Remover Opção
                        </button>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Botão para remover pergunta -->
        <div class="mt-2">
            <button wire:click="removerPergunta({{ $index }})" class="btn btn-sm btn-danger">
                <i class="bi bi-x-circle"></i> Remover Pergunta
            </button>
        </div>
    </div>
    @endforeach

    <!-- Botão para adicionar nova pergunta -->
    <div class="d-grid gap-2">
        <button wire:click="adicionarPergunta" class="btn btn-outline-dark mt-3">
            <i class="bi bi-plus-circle"></i> Nova Pergunta
        </button>
    </div>

    <!-- Botão de Salvar -->
    <div class="d-grid gap-2 col-6 mx-auto">
        <button wire:click="salvarFormulario" class="btn btn-success">
            <i class="bi bi-save"></i> Salvar Formulário
        </button>
    </div>

    <!-- Mensagem de Sucesso -->
    @if (session()->has('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</div>
