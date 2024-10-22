<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responder Formulário - Discente</title>
    <link rel="stylesheet" href="respoonder-formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

     <!-- Navbar fixa -->
     <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="{{ route('discente.participar-pesquisas') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                    </svg>
                    Matéria
                </a>

                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
        </div>
    </nav>

    <div class="d-flex justify-content-center align-items-center" style="margin-top: 80px;">
        <div class="card w-75">
            <div class="card-header bg-danger p-2" style="--bs-bg-opacity: .5;">
                Matéria/Disciplina
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>Professor: .</p>
                    <p>Curso: .</p>
                    <p>Horário: .</p>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-3">
        <div class="card w-75">

            <div class="card-header">
                <h5 class="card-title">Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta
                    Pergunta
                    Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta
                </h5>
            </div>

            <div class="card-body">
                <div class="mb-2 mt-2">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-3">
        <div class="card w-75">

            <div class="card-header">
                <h5 class="card-title">Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta
                    Pergunta
                    Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta
                </h5>
            </div>

            <div class="card-body">

                <div class="row mt-3">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input fs-5" type="radio" name="inlineRadioOptions"
                                id="inlineRadio1" value="option1">
                            <label class="form-check-label fs-5" for="inlineRadio1">Insatisfeito</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input fs-5" type="radio" name="inlineRadioOptions"
                                id="inlineRadio2" value="option2">
                            <label class="form-check-label fs-5" for="inlineRadio2">Ruim</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input fs-5" type="radio" name="inlineRadioOptions"
                                id="inlineRadio3" value="option3">
                            <label class="form-check-label fs-5" for="inlineRadio3">Ok</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input fs-5" type="radio" name="inlineRadioOptions"
                                id="inlineRadio4" value="option4">
                            <label class="form-check-label fs-5" for="inlineRadio4">Bom</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input fs-5" type="radio" name="inlineRadioOptions"
                                id="inlineRadio5" value="option5">
                            <label class="form-check-label fs-5" for="inlineRadio5">Satisfeito</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-3">
        <div class="card w-75">

            <div class="card-header">
                <h5 class="card-title">Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta
                    Pergunta
                    Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta
                </h5>
            </div>

            <div class="card-body">

                <div class="form-check">
                    <input class="form-check-input fs-5" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label fs-5" for="flexCheckDefault">
                        Texto 1
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input fs-5" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label fs-5" for="flexCheckChecked">
                        Texto 2
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input fs-5" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label fs-5" for="flexCheckDefault">
                        Texto 3
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input fs-5" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label fs-5" for="flexCheckChecked">
                        Texto 4
                    </label>
                </div>

            </div>
        </div>
    </div>

    <div class="d-grid gap-2 col-3 mx-auto p-5">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>

    <!--Adicionar poppup de conformação de envio-->
    
</body>

</html>