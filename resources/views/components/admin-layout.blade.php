<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de Administrador') }}
        </h2>
    </x-slot>

    <div class="flex">
        <x-layouts.sidebar-admin />

        <div class="flex-1 p-6">
            {{ $slot }}
        </div>
    </div>
</x-app-layout>
