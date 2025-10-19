<x-app-layout>
    {{-- El slot "header" es opcional, lo usamos si queremos un título en la barra de navegación superior --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de Administrador') }}
        </h2>
    </x-slot>

    <div class="flex">
        {{-- Componente de Sidebar para el Admin --}}
        <x-layouts.sidebar-admin />

        {{-- El contenido principal de la página se inyectará aquí --}}
        <div class="flex-1 p-6">
            {{ $slot }}
        </div>
    </div>
</x-app-layout>
