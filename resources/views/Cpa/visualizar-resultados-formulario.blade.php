<x-app-layout>
    @auth('servidor')
    <x-navigation></x-navigation>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <x-sidebar></x-sidebar>
            <div class="col">
                <div class="p-2 fw-bold text-secondary d-flex">
                    <a class="navbar-brand h4 fs-4 text-secondary" href="#">
                        <i class="bi bi-arrow-left-short"></i> Resultados
                    </a>
                </div>

                <div class="d-flex justify-content-center align-items-center mt-5">
                    <div class="card col-md-6">
                        <h5 class="card-header">Formulário: {{ $formulario->titulo }}</h5>
                        <div class="card-body">
                            <h5 class="card-title">Informações do Formulário</h5>
                            <p class="card-text">{{ $formulario->descricao }}</p>

                            <h6>Resultados:</h6>
                            @foreach ($resultado_total as $index => $resultado)
                                <h6 class="mt-5">{{ $resultado['pergunta'] }}</h6>

                                @if (in_array($resultado['tipo'], ['escolha-unica', 'multipla-escolha', 'estrela']))
                                    <!-- Gráfico -->
                                    <canvas id="chart-{{ $index }}"></canvas>
                                @elseif (in_array($resultado['tipo'], ['texto-curto', 'texto-longo']))
                                    <!-- Lista de respostas -->
                                    <ul class="list-group mt-3">
                                        @foreach (array_slice($resultado['respostas'], 0, 10) as $resposta)
                                            <li class="list-group-item">
                                                @if (strlen($resposta) > 100 && $resultado['tipo'] === 'texto-longo')
                                                    {{ Str::limit($resposta, 100, '...') }}
                                                @else
                                                    {{ $resposta }}
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>   
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Adicionando o CDN do Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Script para gráficos -->
    <script>
        @foreach ($resultado_total as $index => $resultado)
            @if (in_array($resultado['tipo'], ['escolha-unica', 'multipla-escolha', 'estrela']))
                var ctx{{ $index }} = document.getElementById('chart-{{ $index }}').getContext('2d');
                var chart{{ $index }} = new Chart(ctx{{ $index }}, {
                    type: 'bar', // Tipo do gráfico
                    data: {
                        labels: @json(array_keys($resultado['dados'])), // Opções da pergunta
                        datasets: [{
                            label: 'Respostas',
                            data: @json(array_values($resultado['dados'])), // Contagem das respostas
                            backgroundColor: 'rgba(0, 123, 255, 0.5)',
                            borderColor: 'rgba(0, 123, 255, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            @endif
        @endforeach
    </script>

    @else
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth
</x-app-layout>
