<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de Estudiante') }}
        </h2>
    </x-slot>

    <div class="flex">
        {{-- Componente de Sidebar para el Profesor --}}
        <x-layouts.sidebar-teacher />

        {{-- El contenido principal de la página se inyectará aquí --}}
        <div class="flex-1 p-6">
            {{ $slot }}
        </div>
    </div>
</x-app-layout>
