<x-app-layout>

    @auth('usuario')
    <x-navigation></x-navigation>

    <div class="d-flex justify-content-center align-items-center" style="margin-top: 80px;">
        <div class="fs-3 fw-bold text-secondary">
            <h3>Formulários</h3>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-3">
        <div class="card col-md-6">
            <h5 class="card-header">Matéria</h5>
            <div class="card-body">
                <h5 class="card-title">Informação</h5>
                <p class="card-text">Descrição.</p>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('discente.responder-formulario') }}" class="btn btn-outline-primary">Responder</a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-3">
        <div class="card col-md-6">
            <h5 class="card-header">Matéria</h5>
            <div class="card-body">
                <h5 class="card-title">Informação</h5>
                <p class="card-text">Descrição.</p>
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-outline-primary">Responder</a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-3">
        <div class="card col-md-6">
            <h5 class="card-header">Matéria</h5>
            <div class="card-body">
                <h5 class="card-title">Informação</h5>
                <p class="card-text">Descrição.</p>
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-outline-primary">Responder</a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-3">
        <div class="card col-md-6">
            <h5 class="card-header">Matéria</h5>
            <div class="card-body">
                <h5 class="card-title">Informação</h5>
                <p class="card-text">Descrição.</p>
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-outline-primary">Responder</a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-3">
        <div class="card col-md-6">
            <h5 class="card-header">Matéria</h5>
            <div class="card-body">
                <h5 class="card-title">Informação</h5>
                <p class="card-text">Descrição.</p>
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-outline-primary">Responder</a>
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