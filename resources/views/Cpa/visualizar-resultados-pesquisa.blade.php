    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col">
                <div class="p-2 fw-bold text-secondary d-flex">
                    <a class="navbar-brand h4 fs-4 text-secondary" href="#">
                        <i class="bi bi-arrow-left-short"></i> Resultados
                    </a>
                </div>

                <div class="d-flex justify-content-center align-items-center mt-5">
                    <div class="card col-md-6">
                        <h5 class="card-header">Formulário: {{ $pesquisa->titulo }}</h5>
                        <div class="card-body">
                            <h5 class="card-title">Informações do Formulário</h5>
                            <p class="card-text">{{ $pesquisa->descricao }}</p>

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
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@0.4.1/dist/html2canvas.min.js"></script>

    <!-- Script para gráficos e captura da imagem -->
    <script>
        @foreach ($resultado_total as $index => $resultado)
            @if (in_array($resultado['tipo'], ['escolha-unica', 'multipla-escolha', 'estrela']))
                var ctx{{ $index }} = document.getElementById('chart-{{ $index }}').getContext('2d');
                var chart{{ $index }} = new Chart(ctx{{ $index }}, {
                    type: 'bar',
                    data: {
                        labels: @json(array_keys($resultado['dados'])),
                        datasets: [{
                            label: 'Respostas',
                            data: @json(array_values($resultado['dados'])),
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

                // Captura do gráfico como imagem e envio para o backend
                html2canvas(document.getElementById('chart-{{ $index }}')).then(function(canvas) {
                    var base64Image = canvas.toDataURL('image/png');

                    // Enviar a imagem para o servidor para ser salva
                    fetch('/gerar-grafico', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ grafico: base64Image })
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Imagem salva no servidor: ', data.imagePath);
                    });
                });
            @endif
        @endforeach
    </script>

    @else
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth
