<nav class="navbar navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand mb-0 h1 fs-3 fw-bold text-secondary" href="#">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Logo_oficial_da_UFPR_%28fundo_branco%29.svg/1200px-Logo_oficial_da_UFPR_%28fundo_branco%29.svg.png"
                alt="Logo" width="60" height="50" class="d-inline-block align-items-center">
            Formulários UFPR
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();" class="btn btn-sucess">
            {{ __('Sair') }}
            </a>
        </form>
</nav>