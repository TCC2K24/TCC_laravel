<x-app-layout>
     <!-- Navbar fixa -->
     <x-navigation></x-navigation>

     <!-- Conteúdo da página -->
     <div class="container-fluid">
         <div class="row flex-nowrap">
             <div class="col-auto bg-light vh-100">
                 <!-- Navbar lateral -->
                <ul class="nav nav-pills flex-column list-group" style="margin-top: 95px;">
                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary active">
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
 
                    <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
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
 
             <div class="col d-flex align-items-center justify-content-center">
                 <div class="w-25 h-50 d-flex align-items-center justify-content-center">
                     <p class="text-dark text-center">
                         <mark class="bg-white fw-bold text-primary">Bem-vindo</mark> ao Painel da
                         Comissão Própria de Avaliação (CPA) da Universidade Federal do Paraná. Este sistema foi
                         desenvolvido para facilitar a gestão e análise das pesquisas de avaliação institucional.
                         Utilize o menu ao lado para acessar as principais funcionalidades, como a criação de novas
                         pesquisas e visualização de resultados.
                     </p>
                 </div>
             </div>
         </div>
     </div>
     <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
        {{ __('Log Out') }}
        </a>

           
   
    </form>
    
    
    </x-app-layout>

   
