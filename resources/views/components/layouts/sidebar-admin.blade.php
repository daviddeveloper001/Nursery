<!-- {{-- Sidebar para el rol de Administrador --}}
<div class="w-64 h-screen bg-gray-800 text-white p-4">
    <h3 class="text-lg font-bold mb-4">Menú Admin</h3>
    <nav> 
        <ul>
            {{-- Usamos un componente reutilizable para los enlaces --}}
            <li>
                <x-layouts.sidebar-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                    Dashboard
                </x-layouts.sidebar-link>
            </li>
            <li>
                <x-layouts.sidebar-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.*')">
                    Gestión de Usuarios
                </x-layouts.sidebar-link>
            </li>
        </ul>
    </nav>
</div> -->
