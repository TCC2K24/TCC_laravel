<x-app-layout>

     <!-- Navbar fixa -->
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="{{ route('discente.participar-pesquisas') }}">
                <i class="bi bi-arrow-left-short"></i> Matéria
            </a>

            <i class="bi bi-person-fill" style="font-size: 30px;"></i>

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
    
</x-app-layout>