{{-- Sidebar para el rol de Profesor --}}
<div class="w-64 h-screen bg-gray-800 text-white p-4">
    <h3 class="text-lg font-bold mb-4">Menú Profesor</h3>
    <nav>
        <ul>
            <li>
                <x-layouts.sidebar-link :href="route('teacher.dashboard')" :active="request()->routeIs('teacher.dashboard')">
                    {{ __('Dashboard') }}
                </x-layouts.sidebar-link>
            </li>
            <li>
                {{-- Aquí irían otros enlaces como "Mis Clases", "Calificaciones", etc. --}}
                {{-- <x-layouts.sidebar-link href="#">Mis Clases</x-layouts.sidebar-link> --}}
            </li>
        </ul>
    </nav>
</div>
