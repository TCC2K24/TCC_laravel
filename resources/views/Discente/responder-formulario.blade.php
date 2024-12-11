<x-app-layout>
    @auth('usuario')
    <x-navigation></x-navigation>

    <a href="{{ route('discente.visualizar-pesquisas') }}">
    <button type="button" style="margin-left: 20px; margin-top: 100px">Voltar</button>
    </a>
    
    <div class="d-flex justify-content-center align-items-center mt-3">
        <div class="card w-75">
            <div class="card-header bg-danger p-2" style="--bs-bg-opacity: .5;">
                <h5>{{ $pesquisa->descricao }}</h5>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>Cursos:</p>
                    <ul>
                        @if($pesquisa->Curso->isNotEmpty())
                            @foreach($pesquisa->Curso as $curso)
                                <li>{{ $curso->nomeCurso }}</li> {{-- Substitua "nome" pelo atributo relevante do modelo Curso --}}
                            @endforeach
                        @else
                            <li>Não informado</li>
                        @endif
                    </ul>

                </blockquote>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('discente.responder-formulario', ['idPesquisa' => $pesquisa->idPesquisa, 'idFormulario' => $formulario->idFormulario]) }}">
    @csrf

        @foreach ($perguntas as $index => $pergunta)
            <div class="d-flex justify-content-center align-items-center mt-3">
                <div class="card w-75">
                    <div class="card-header">
                        <h5 class="card-title">{{ $pergunta['pergunta'] }}</h5>
                    </div>
                    <div class="card-body">
                        @if ($pergunta['tipo'] === 'texto-curto')
                            <input type="text" name="respostas[{{ $index }}]" class="form-control" placeholder="Digite sua resposta">
                        @elseif ($pergunta['tipo'] === 'texto-longo')
                            <textarea name="respostas[{{ $index }}]" class="form-control" rows="4" placeholder="Digite sua resposta"></textarea>
                        @elseif ($pergunta['tipo'] === 'escolha-unica')
                            @foreach ($pergunta['opcoes'] as $opcao)
                                <div class="form-check">
                                    <input type="radio" name="respostas[{{ $index }}]" value="{{ $opcao }}" class="form-check-input">
                                    <label class="form-check-label">{{ $opcao }}</label>
                                </div>
                            @endforeach
                        @elseif ($pergunta['tipo'] === 'multipla-escolha')
                            @foreach ($pergunta['opcoes'] as $opcao)
                                <div class="form-check">
                                    <input type="checkbox" name="respostas[{{ $index }}][]" value="{{ $opcao }}" class="form-check-input">
                                    <label class="form-check-label">{{ $opcao }}</label>
                                </div>
                            @endforeach
                        @elseif ($pergunta['tipo'] === 'estrela')
                            <div class="form-group">
                                <input type="number" name="respostas[{{ $index }}]" min="1" max="5" class="form-control" placeholder="Avalie de 1 a 5 estrelas">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach

        <div class="d-grid gap-2 col-3 mx-auto p-5">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </form>

    @else
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth
</x-app-layout>
