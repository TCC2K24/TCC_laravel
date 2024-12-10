<x-app-layout>
    @auth('servidor')    
    <x-navigation></x-navigation>

    <div class="container mt-5">
        <livewire:formulario-livewire 
            :pesquisa-id="$pesquisa->idPesquisa"
            :formulario="$formulario ?? null"   
            :dados-formulario="$dadosFormulario ?? []"  
            :edita="isset($formulario) ? true : false" 
        />
    </div>

    @else
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <p class="text-center text-danger fw-bold">Usuário não autenticado.</p>
        </div>
    @endauth
</x-app-layout>
