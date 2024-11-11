<x-app-layout>

    @auth('servidor')    
    <x-navigation></x-navigation>

    <!--TELA PARA CRIAR A PERGUNTA-->
    <div class="d-flex m-3" style="margin-top: 80px;">
        <div class="mt-5 w-50">
            <form method="#" class="form was-validated">

                <div class="card w-100 m-5">
                    <h5 class="card-header">Disciplina</h5>
                    <div class="card-body">
                        <p class="card-text">Informe a Disciplina:</p>

                        <div class="col-auto form-group">
                            <select class="form-select" required>
                                <option value="">--- Selecione ---</option>
                                <option value="1">Disciplina 1</option>
                                <option value="2">Disciplina 2</option>
                                <option value="3">Disciplina 3</option>
                            </select>
                            <div class="invalid-feedback">
                                Por Favor, selecione a Disciplina.
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card w-100 m-5">
                    <h5 class="card-header">Crie seu Formulário:</h5>
                    <div class="card-body">
                        <p class="card-text">Selecione o Tipo de Pergunta:</p>

                        <div class="d-grid gap-2 p-5">
                            <button type="button" class="btn btn-outline-dark">
                                <i class="bi bi-fonts"></i> Texto Longo
                            </button>

                            <button type="button" class="btn btn-outline-dark">
                                <i class="bi bi-fonts"></i> Texto Curto
                            </button>

                            <button type="button" class="btn btn-outline-dark">
                                <i class="bi bi-bullseye"></i> Escolha Única
                            </button>

                            <button type="button" class="btn btn-outline-dark">
                                <i class="bi bi-check-square"></i> Múltipla Escolha
                            </button>

                            <button type="button" class="btn btn-outline-dark">
                                <i class="bi bi-star"></i> Avaliação Estrela
                            </button>
                        </div>

                    </div>

                </div>

            </form>
        </div>

        <!--TELA PARA CUSTOMIZAR A PERGUNTA-->
        <div class="container" style="margin-top: 65px;">
            <div class="d-flex justify-content-end align-items-center mt-3">
                <div class="w-75">

                    <div class="d-flex justify-content-end align-items-center mb-4">
                        <button class="btn btn-outline-primary" type="submit">
                            <i class="bi bi-eye"></i> Visualizar Formulário
                        </button>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a href="#">
                                <i class="bi bi-gear"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-x-lg"></i>
                            </a>
                            <h5 class="card-title">Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta
                                Pergunta
                                Pergunta
                                Pergunta
                                Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta
                                Pergunta
                            </h5>
                        </div>

                        <div class="card-body">
                            <div class="mb-2 mt-2">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="d-flex justify-content-end align-items-center mt-3">
                <div class="card w-75">

                    <div class="card-header">
                        <a href="#">
                            <i class="bi bi-gear"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-x-lg"></i>
                        </a>
                        <h5 class="card-title">Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta
                            Pergunta
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

            <div class="d-flex justify-content-end align-items-center mt-3">
                <div class="w-75">
                    <div class="card">
                        <div class="card-header">
                            <a href="#">
                                <i class="bi bi-gear"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-x-lg"></i>
                            </a>
                            <h5 class="card-title">Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta
                                Pergunta
                                Pergunta
                                Pergunta
                                Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta Pergunta
                                Pergunta
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

                    <div class="d-grid gap-2 col-6 mx-auto p-5">
                        <button class="btn btn-success" type="submit">Salvar</button>
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