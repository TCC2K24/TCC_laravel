<div class="container" style="margin-top: 80px;">
    <div class="card w-100 m-5 mx-auto">
        <h5 class="card-header">Nome do Formulário</h5>
        <div class="card-body">
            <p class="card-text">Informe o nome do Formulário</p>
            <div class="col-auto form-group">
                <input type="text" wire:model="nomeFormulario" class="form-control @error('nomeFormulario') is-invalid @enderror" required placeholder="Nome" />
                <div class="invalid-feedback">
                    @error('nomeFormulario') Por favor, preencha o nome do formulario! @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="card w-100 m-5 mx-auto">
        <h5 class="card-header">Disciplina</h5>
        <div class="card-body">
            <p class="card-text">Informe a Disciplina:</p>
            <div class="col-auto form-group">
                <select wire:model="disciplinaId" class="form-select @error('disciplinaId') is-invalid @enderror" required>
                    <option value="">--- Selecione ---</option>
                    @foreach($disciplinas as $disciplina)
                        <option value="{{ $disciplina->idDisciplina }}">{{ $disciplina->nomeDisciplina }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    @error('disciplinaId') Por favor, selecione uma disciplina! @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="card w-100 m-5 mx-auto">
        <h5 class="card-header">Tempo de Participação</h5>
        <div class="card-body">
            <p class="card-text">Informe o tempo de participação (Em minutos, minimo de 15):</p>
            <div class="col-auto form-group">
                <input type="number" wire:model="tempoDeParticipacao" class="form-control @error('tempoDeParticipacao') is-invalid @enderror" required min="15" step="1" placeholder="Tempo em minutos" />
                <div class="invalid-feedback">
                    @error('tempoDeParticipacao') Por favor, selecione no minimo 15 minutos @enderror
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
                <input type="text" id="pergunta-{{ $index }}" wire:model.defer="perguntas.{{ $index }}.pergunta" class="form-control @error('perguntas.'.$index.'.pergunta') is-invalid @enderror""/>
                @error('perguntas.'.$index.'.pergunta')
                    <div class="invalid-feedback">
                        Por favor, preencha o nome da pergunta
                    </div>
                @enderror
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
                        <div class="input-group mt-2">
                            <input 
                                type="text" 
                                wire:model="perguntas.{{ $index }}.opcoes.{{ $opcaoIndex }}" 
                                class="form-control @error('perguntas.'.$index.'.opcoes.'.$opcaoIndex) is-invalid @enderror" 
                                placeholder="Opção {{ $opcaoIndex + 1 }}" 
                            />
                            @error('perguntas.'.$index.'.opcoes.'.$opcaoIndex)
                                <div class="invalid-feedback">
                                    Por favor, preencha a opção
                                </div>
                            @enderror
                            <button 
                                wire:click="removerOpcao({{ $index }}, {{ $opcaoIndex }})" 
                                class="btn btn-outline-danger btn-sm"
                            >
                                Remover
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif


        <!-- Botão para remover pergunta -->
        <div class="mt-2 d-flex justify-content-end">
            <button wire:click="removerPergunta({{ $index }})" class="btn btn-sm btn-danger">
                <i class="bi bi-x-circle"></i> Remover Pergunta
            </button>
        </div>
    </div>
    @endforeach

    <!-- Botão para adicionar nova pergunta -->
    <div class="d-grid gap-2">
        <button wire:click="adicionarPergunta" class="btn btn-outline-dark w-25 mx-auto mt-3">
            <i class="bi bi-plus-circle"></i> Nova Pergunta
        </button>
    </div>

    <div class="position-fixed bottom-0 start-0 p-3 w-50">
        <a href="{{ route('cpa.formularios-da-pesquisa', ['id' => $pesquisaId]) }}" 
        class="btn btn-secondary w-25"
        onclick="return confirm('Tem certeza que deseja voltar? O formulário não será salvo.');">
        
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>

    <!-- Botão de Salvar -->
    <div class="position-fixed bottom-0 end-0 p-3">
        <button wire:click="salvarFormulario" class="btn btn-success w-75">
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
