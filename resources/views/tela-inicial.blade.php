<x-app-layout>
    @if(auth('usuario')->check() || auth('servidor')->check())
    <x-navigation></x-navigation>

    <!--Autenticados -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            
            <!--Sidebar-->
            <x-sidebar></x-sidebar>

            <!-- Conteúdo -->
            <div class="col d-flex align-items-center justify-content-center">
                <div class="w-25 h-50 d-flex align-items-center justify-content-center">
                    <p class="text-dark text-center">
                        <mark class="bg-white fw-bold text-primary">Bem-vindo</mark> 
                        @auth('usuario')
                
                        ao Perfil do Aluno. Este sistema foi desenvolvido para proporcionar uma plataforma intuitiva e eficiente, 
                        onde você pode participar das pesquisas de avaliação institucional, responder aos formulários e acessar seus 
                        certificados de participação. Sua opinião é fundamental para a melhoria contínua das nossas disciplinas e do corpo 
                        docente. Utilize o menu ao lado para navegar pelas principais funcionalidades.
                        
                        @endauth

                        @auth('servidor')
                        
                        ao Painel da Comissão Própria de Avaliação (CPA) da Universidade Federal do Paraná. Este
                        sistema foi desenvolvido para facilitar a gestão e análise das pesquisas de avaliação 
                        institucional. Utilize o menu ao lado para acessar as principais funcionalidades, como 
                        a criação de novas pesquisas e visualização de resultados.
                        
                        @endauth
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

    @else
        <!-- Não autenticados -->
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth
</x-app-layout>
