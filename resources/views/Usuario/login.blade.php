<x-app-layout>
    <div class="nav flex-column">
        <nav class="navbar fixed-top navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="#">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Logo_oficial_da_UFPR_%28fundo_branco%29.svg/1200px-Logo_oficial_da_UFPR_%28fundo_branco%29.svg.png"
                        alt="Logo" width="60" height="50" class="d-inline-block align-items-center">
                    Formulários UFPR
                </a>
            </div>
        </nav>
    </div>

       
   
    <div class="cartao d-flex justify-content-center align-items-center vh-100 bg-light bg-gradient">
        <div class="card bg-white w-50 p-5 h-50">
            <div class="card-body">
                <x-input-error name='error' />
                <h1>Log in UFPRforms</h1>
                <form action="{{route('login.store')}}" method="post" class="form-group" autocomplete="off">
                    @csrf
                    <div class="form-group mb-3 mt-4">
                        <label for="login">Usuário:</label>
                        <input type="text" id="login" class="form-control" placeholder="Usuário" name="GRR"  required/>
                      
                            <x-input-error name="GRR" />
                      
                    </div>
                    <div class="form-group mb-3">
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" class="form-control" placeholder="Senha" name="password" required/>
                        <x-input-error name="password" />
                    </div>

                    <a href="" class="button d-grid gap-2 mt-5">
                        <button type="submit" class="btn btn-primary ">Login</button>
                    </a>
                    
                </form>
            </div>
        </div>
    </div>
    <a href="{{ route('login') }}" class="btn btn-link">Acesso Servidor</a>
</x-app-layout>

  