{{-- Sidebar para el rol de Administrador --}}
<div class="w-64 h-screen bg-gray-800 text-white p-4">
    <h3 class="text-lg font-bold mb-4">Menú Admin</h3>
    <nav>
        <ul>
            {{-- Usamos un componente reutilizable para los enlaces --}}
            <li>
                <x-layouts.sidebar-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                    {{ __('Dashboard') }}
                </x-layouts.sidebar-link>
            </li>
            <li>
                {{-- Aquí irían otros enlaces como "Gestión de Usuarios", "Configuración", etc. --}}
                {{-- <x-layouts.sidebar-link href="#">Gestión de Usuarios</x-layouts.sidebar-link> --}}
            </li>
        </ul>
    </nav>
</div>
