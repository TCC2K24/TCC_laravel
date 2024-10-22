<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários da Pesquisa - CPA</title>
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
                    Pesquisa de Qualidade
                </a>

                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>

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

</body>

</html>