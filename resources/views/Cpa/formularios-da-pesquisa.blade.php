<x-app-layout>

    <!-- Navbar fixa -->
    <div class="nav flex-column">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid align-items-center">
                <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="#">
                    <i class="bi bi-arrow-left-short"></i> Pesquisa de Qualidade
                </a>

                <i class="bi bi-person-fill" style="font-size: 30px;"></i>

            </div>
        </nav>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="fs-3 fw-bold text-secondary">
            <h3>Formulários</h3>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-3">
        <div class="card col-md-6">
            <h5 class="card-header">Nenhum Formulário Criado</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>

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
                    <a href="#" class="btn btn-outline-primary m-1">Editar</a>
                    <a href="#" class="btn btn-outline-danger m-1">Excluir</a>
                </div>
            </div>
        </div>
    </div>

    <!--Adicionar poppup de confirmação para Excluir o Formulário -->

    <div class="d-grid gap-2 col-2 position-fixed bottom-0 end-0 p-5">
        <button class="btn btn-success" type="submit">Novo Formulário</button>
    </div>

</x-app-layout>