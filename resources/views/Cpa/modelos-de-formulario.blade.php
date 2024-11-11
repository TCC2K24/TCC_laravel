<x-app-layout>
    @auth('servidor')
    <x-navigation></x-navigation>

    <!-- Conteúdo da página -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            
            <!--Sidebar-->
            <x-sidebar></x-sidebar>

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

    @else
        <!-- Não autenticados -->
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth

</x-app-layout>