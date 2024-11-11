<div class="col-auto bg-light vh-100">
    <ul class="nav nav-pills flex-column list-group" style="margin-top: 95px;">
        <li class="nav-item list-group-item list-group-item-action list-group-item-primary {{ Route::is('tela-inicial-s', 'tela-inicial-d') ? 'active' : '' }}">
            <a href="{{ auth()->check() && auth()->user()->hasRole('servidor') ? 
                        route('tela-inicial-s') : 
                        route('tela-inicial-d') }}" 
                        class="nav-link align-items-center justify-content-center px-0 text-white">
                <i class="bi bi-house-door"></i>
                <span class="text-white">Início</span>
            </a>
        </li>

        <li class="nav-item list-group-item list-group-item-action list-group-item-primary {{ Route::is('discente.visualizar-pesquisas') ? 'active' : '' }}">
            <a href="{{ route('discente.visualizar-pesquisas') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                <i class="bi bi-journal-text"></i>
                <span class="text-white">Minhas Pesquisas</span>
            </a>
        </li>

        @auth('servidor')
        <li class="nav-item list-group-item list-group-item-action list-group-item-primary {{ Route::is('cpa.modelos-de-formulario') ? 'active' : '' }}">
            <a href="{{ route('cpa.modelos-de-formulario') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                <i class="bi bi-border-all"></i>
                <span class="text-white">Modelos de Formulários</span>
            </a>
        </li>

        <li class="nav-item list-group-item list-group-item-action list-group-item-primary {{ Route::is('cpa.resultados') ? 'active' : '' }}">
            <a href="{{ route('cpa.resultados') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                <i class="bi bi-bar-chart-line"></i>
                <span class="text-white">Resultados</span>
            </a>
        </li>
        @endauth

        @auth('usuario')
        <li class="nav-item list-group-item list-group-item-action list-group-item-primary {{ Route::is('discente.meus-certificados') ? 'active' : '' }}">
            <a href="{{ route('discente.meus-certificados') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                <i class="bi bi-clipboard2-check"></i>
                <span class="text-white">Meus Certificados</span>
            </a>
        </li>
        @endauth

        <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
            <a href="#" class="nav-link align-items-center justify-content-center px-0 text-white">
                <i class="bi bi-bank"></i>
                <span class="text-white">Unidades Responsáveis</span>
            </a>
        </li>
    </ul>
</div>
