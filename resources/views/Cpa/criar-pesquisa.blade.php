<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Pesquisa - CPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="nav flex-column">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid align-items-center">
                <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                    </svg>
                    Nova Pesquisa
                </a>

                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>

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
    <body>

    
</body>

</html>