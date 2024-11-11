<x-app-layout>
    @auth('servidor')

    <div class="nav flex-column">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid align-items-center">
                <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="{{ route('cpa.minhas-pesquisas') }}">
                    <i class="bi bi-arrow-left-short"></i> Nova Pesquisa
                </a>

                <i class="bi bi-person-fill" style="font-size: 30px;"></i>

            </div>
        </nav>
    </div>

    <form method="POST" class="form was-validated" action="{{ route('cpa.store') }}">
        @csrf()
        <div class="d-flex justify-content-center align-items-center mt-3">

            <div class="card w-25 m-3">
                <h5 class="card-header">Tipo de Pesquisa</h5>
                <div class="card-body">
                    <p class="card-text">Informe o Tipo:</p>

                    <div class="col-auto form-group">
                        <select class="form-select" name="tipo" required>
                            <option value="">--- Selecione ---</option>
                            <option value="Tipo 1">Tipo 1</option>
                            <option value="Tipo 2">Tipo 2</option>
                            <option value="Tipo 3">Tipo 3</option>
                        </select>
                        <div class="invalid-feedback">
                            Por Favor, selecione o Tipo de Pesquisa.
                        </div>
                    </div>

                </div>
            </div>

            <div class="card w-25 m-3">
                <h5 class="card-header">Nome</h5>
                <div class="card-body">
                    <p class="card-text">Informe o Nome:</p>

                    <div class="form-group flex-nowrap">
                        <input type="text" name="descricao" class="form-control is-valid" placeholder="Nome da Pesquisa"
                            aria-label="Username" aria-describedby="addon-wrapping" required>

                        <div class="invalid-feedback">
                            Por Favor, informe o Nome da Pesquisa.
                        </div>
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
                        <select id="inputState" name="periodo" class="form-control" required>
                            <option value="">--- Selecione ---</option>
                            <option value="Período 1">Período 1</option>
                            <option value="Período 2">Período 2</option>
                            <option value="Período 3">Período 3</option>
                        </select>

                        <div class="invalid-feedback">
                            Por Favor, informe o Período da Pesquisa.
                        </div>

                    </div>

                </div>
            </div>

            <div class="card w-25 m-3">
                <h5 class="card-header">Setor</h5>
                <div class="card-body">
                    <p class="card-text">Informe o Setor:</p>

                    <div class="col-auto form-group">
                        <select id="inputState"  class="form-control" required>
                            <option value="">--- Selecione ---</option>
                            <option value="Setor 1">Setor 1</option>
                            <option value="Setor 2">Setor 2</option>
                            <option value="Setor 3">Setor 3</option>
                        </select>

                        <div class="invalid-feedback">
                            Por Favor, informe o Setor da Pesquisa.
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <div class="d-flex justify-content-center align-items-center mt-3">

            <div class="card w-25 m-3">
                <h5 class="card-header">Cursos</h5>
                <div class="card-body">
                    <p class="card-text">Informe o(os) Curso(os):</p>

                    <div class="col-auto form-group">
                        <select id="inputState"  class="form-control" required>
                            <option value="">--- Selecione ---</option>
                            <option value="Curso 1">Curso 1</option>
                            <option value="Curso 2">Cursp 2</option>
                            <option value="Curso 3">Curso 3</option>
                        </select>

                        <div class="invalid-feedback">
                            Por Favor, informe o(os) Curso(os) da Pesquisa.
                        </div>

                    </div>

                </div>
            </div>

            <div class="card w-25 m-3">
                <h5 class="card-header">Data Limite</h5>
                <div class="card-body">
                    <p class="card-text">Informe a Data Limite:</p>

                    <div class="form-group flex-nowrap">
                        <input type="date" name="dataFim" class="form-control is-valid" required>

                        <div class="invalid-feedback">
                            Por Favor, informe a Data Limite da Pesquisa.
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <div class="d-grid gap-2 col-3 mx-auto p-5">
            <button class="btn btn-success" type="submit">Salvar</button>
        </div>

        <!--Adicionar poppup de confirmação de Pesquisa Criada-->
        
    </form>

    @else
        <!-- Não autenticados -->
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth

</x-app-layout>