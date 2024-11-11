<x-app-layout>
    @auth('servidor')
    <x-navigation></x-navigation>

    <!-- Conteúdo da página -->
    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!--Sidebar-->
            <x-sidebar></x-sidebar>

            <div class="col">
                <div class="p-2 fw-bold text-secondary d-flex">
                    <a class="navbar-brand h4 fs-4 text-secondary" href="#">
                        <i class="bi bi-arrow-left-short"></i> Resultados
                    </a>
                </div>

                <div class="d-flex justify-content-center align-items-center mt-3">
                    <div class="card col-md-6">
                        <h5 class="card-header">Matéria</h5>
                        <div class="card-body">
                            <h5 class="card-title">Informação</h5>
                            <p class="card-text">Descrição.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @else
        <!-- Não autenticados -->
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth

</x-app-layout>