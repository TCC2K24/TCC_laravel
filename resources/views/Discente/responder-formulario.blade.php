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
                                <li>{{ $curso->nomeCurso }}</li> 
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
                            <input type="text" name="respostas[{{ $index }}]" class="form-control" placeholder="Digite sua resposta" required>
                        @elseif ($pergunta['tipo'] === 'texto-longo')
                            <textarea name="respostas[{{ $index }}]" class="form-control" rows="4" placeholder="Digite sua resposta" required></textarea>
                        @elseif ($pergunta['tipo'] === 'escolha-unica')
                            @foreach ($pergunta['opcoes'] as $opcao)
                                <div class="form-check">
                                    <input type="radio" name="respostas[{{ $index }}]" value="{{ $opcao }}" class="form-check-input" required>
                                    <label class="form-check-label">{{ $opcao }}</label>
                                </div>
                            @endforeach
                        @elseif ($pergunta['tipo'] === 'multipla-escolha')
                            @foreach ($pergunta['opcoes'] as $opcao)
                                <div class="form-check">
                                    <input type="checkbox" name="respostas[{{ $index }}][]" value="{{ $opcao }}" class="form-check-input" required>
                                    <label class="form-check-label">{{ $opcao }}</label>
                                </div>
                            @endforeach
                            @elseif ($pergunta['tipo'] === 'estrela')
                            <div class="form-group">
                                <div class="d-flex">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <div class="text-center mx-2">
                                            <label class="form-check">
                                                <input type="radio" name="respostas[{{ $index }}]" value="{{ $i }}" class="form-check-input" required>
                                                <div>{{ $i }}</div> <!-- Número abaixo do botão de rádio -->
                                            </label>
                                        </div>
                                    @endfor
                                </div>
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