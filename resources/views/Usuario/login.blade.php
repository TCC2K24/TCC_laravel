<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
    <div class="nav flex-column">
        <nav class="navbar fixed-top navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="#">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Logo_oficial_da_UFPR_%28fundo_branco%29.svg/1200px-Logo_oficial_da_UFPR_%28fundo_branco%29.svg.png"
                        alt="Logo" width="60" height="50" class="d-inline-block align-items-center">
                    Formulários UFPR
                </a>
            </div>
    </div>

        </nav>

    <div class="cartao d-flex justify-content-center align-items-center vh-100 bg-light bg-gradient">
        <div class="card bg-white w-50 p-5 h-50">
            <div class="card-body">
                <h1>Log in UFPRforms</h1>
                <form action="//" method="post" class="form was-validated">
                    <div class="form-group mb-3 mt-4">
                        <label for="usuario">Usuário:</label>
                        <input type="email" id="usuario" class="form-control is-valid" placeholder="Usuário" required />
                        <div class="invalid-feedback">
                            Por Favor, insira seu e-mail @ufpr!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" class="form-control form-control is-valid" placeholder="Senha"
                            required />
                        <div class="invalid-feedback">
                            Por Favor, insira sua Senha!
                        </div>
                    </div>

                    <a href="" class="button d-grid gap-2 mt-5">
                        <button type="submit" class="btn btn-primary ">Login</button>
                    </a>

                </form>
            </div>
        </div>
    </div>

</body>

</html>