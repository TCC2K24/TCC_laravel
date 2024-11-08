<x-app-layout>

    <!-- Navbar fixa -->
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Logo_oficial_da_UFPR_%28fundo_branco%29.svg/1200px-Logo_oficial_da_UFPR_%28fundo_branco%29.svg.png"
                    alt="Logo" width="60" height="50" class="d-inline-block align-items-center">
                Formulários UFPR
            </a>

            <i class="bi bi-person-fill" style="font-size: 30px;"></i>

        </div>
    </nav>

    <!-- Conteúdo da página -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto bg-light vh-100">
                <!-- Navbar lateral -->
                <ul class="nav nav-pills flex-column list-group" style="margin-top: 95px;">
                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                        <a href="{{ route('cpa.tela-inicial') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <i class="bi bi-house-door"></i>
                            <span class="text-white">Início</span>
                        </a>
                    </li>

                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                        <a href="{{ route('cpa.minhas-pesquisas') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                            <i class="bi bi-journal-text"></i>
                            <span class="text-white">Minhas Pesquisas</span>
                        </a>
                    </li>

                        <li class="nav-item list-group-item list-group-item-action list-group-item-primary active">
                            <a href="{{ route('cpa.modelos-de-formulario') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                                <i class="bi bi-border-all"></i>
                                <span class="text-white">Modelos de Formulários</span>
                            </a>
                        </li>

                        <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                            <a href="{{ route('cpa.resultados') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                                <i class="bi bi-bar-chart-line"></i>
                                <span class="text-white">Resultados</span>
                            </a>
                        </li>

                        <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                            <a href="#" class="nav-link align-items-center justify-content-center px-0 text-white">
                                <i class="bi bi-bank"></i>
                                <span class="text-white">Unidades Responsáveis</span>
                            </a>
                        </li>
                        </ul>
            </div>

            <div class="col" style="margin-top: 80px;">
                <div class="p-2 fw-bold text-secondary d-flex">
                    <h4>Modelos de Formulários</h4>
                </div>
            
                <div class="row container">
        
                    <div class="col">
                        <div class="card text-center m-2 align-items-center justify-content-center border-primary text-primary" style="width: 12rem; height: 12rem;">
                            <a href="{{ route('cpa.criar-formulario') }}"> 
                                <i class="bi bi-plus-square"></i>
                            </a>
                        </div>
                    </div>
            
                    <div class="col">
                        <div class="card text-center m-2 border-primary" style="width: 12rem; height: 12rem;">
                            <img src="#" class="card-img-top" alt="//imagem" style="height: 9rem;">
                            <div class="card-body">
                                <p class="card-text text-primary">Modelo 1</p>
                            </div>
                        </div>
                    </div>
            
                    <div class="col">
                        <div class="card text-center m-2 border-primary" style="width: 12rem; height: 12rem;">
                            <img src="#" class="card-img-top" alt="//imagem" style="height: 9rem;">
                            <div class="card-body">
                                <p class="card-text text-primary">Modelo 2</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card text-center m-2 border-primary" style="width: 12rem; height: 12rem;">
                            <img src="#" class="card-img-top" alt="//imagem" style="height: 9rem;">
                            <div class="card-body">
                                <p class="card-text text-primary">Modelo 3</p>
                            </div>
                        </div>
                    </div>
            
                    <div class="col">
                        <div class="card text-center m-2 border-primary" style="width: 12rem; height: 12rem;">
                            <img src="#" class="card-img-top" alt="//imagem" style="height: 9rem;">
                            <div class="card-body">
                                <p class="card-text text-primary">Modelo 4</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card text-center m-2 border-primary" style="width: 12rem; height: 12rem;">
                            <img src="#" class="card-img-top" alt="//imagem" style="height: 9rem;">
                            <div class="card-body">
                                <p class="card-text text-primary">Modelo 5</p>
                            </div>
                        </div>
                    </div>
            
                    <div class="col">
                        <div class="card text-center m-2 border-primary" style="width: 12rem; height: 12rem;">
                            <img src="#" class="card-img-top" alt="//imagem" style="height: 9rem;">
                            <div class="card-body">
                                <p class="card-text text-primary">Modelo 6</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card text-center m-2 border-primary" style="width: 12rem; height: 12rem;">
                            <img src="#" class="card-img-top" alt="//imagem" style="height: 9rem;">
                            <div class="card-body">
                                <p class="card-text text-primary">Modelo 7</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card text-center m-2 border-primary" style="width: 12rem; height: 12rem;">
                            <img src="#" class="card-img-top" alt="//imagem" style="height: 9rem;">
                            <div class="card-body">
                                <p class="card-text text-primary">Modelo 8</p>
                            </div>
                        </div>
                    </div>
            
                    <div class="col">
                        <div class="card text-center m-2 border-primary" style="width: 12rem; height: 12rem;">
                            <img src="#" class="card-img-top" alt="//imagem" style="height: 9rem;">
                            <div class="card-body">
                                <p class="card-text text-primary">Modelo 9</p>
                            </div>
                        </div>
                    </div>

                    
                </div>

            </div>


        </div>
    </div>

</x-app-layout>