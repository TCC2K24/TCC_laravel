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
                             <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-house-door align-items-center justify-content-center" viewBox="0 0 16 16">
                                 <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                             </svg>
                             <span class="text-white">Início</span>
                         </a>
                     </li>
 
                     <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                         <a href="{{ route('cpa.minhas-pesquisas') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-journal-text" viewBox="0 0 16 16">
                                 <path
                                     d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                 <path
                                     d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                                 <path
                                     d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                             </svg>
                             <span class="text-white">Minhas Pesquisas</span>
                         </a>
                     </li>
 
                         <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                             <a href="{{ route('cpa.modelos-de-formulario') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-border-all" viewBox="0 0 16 16">
                                     <path
                                         d="M0 0h16v16H0zm1 1v6.5h6.5V1zm7.5 0v6.5H15V1zM15 8.5H8.5V15H15zM7.5 15V8.5H1V15z" />
                                 </svg>
                                 <span class="text-white">Modelos de Formulários</span>
                             </a>
                         </li>
 
                         <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                             <a href="{{ route('cpa.resultados') }}" class="nav-link align-items-center justify-content-center px-0 text-white">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                                     <path
                                         d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1zm1 12h2V2h-2zm-3 0V7H7v7zm-5 0v-3H2v3z" />
                                 </svg>
                                 <span class="text-white">Resultados</span>
                             </a>
                         </li>
 
                         <li class="nav-item list-group-item list-group-item-action list-group-item-primary">
                             <a href="#" class="nav-link align-items-center justify-content-center px-0 text-white">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-bank" viewBox="0 0 16 16">
                                     <path
                                         d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z" />
                                 </svg>
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

   
