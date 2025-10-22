<x-admin-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6 mt-16">
        
        {{-- Card 1: Administrar Usuarios --}}
        <a href="/admin/users" class="group">
            <div class="bg-pink-50 rounded-2xl p-8 hover:bg-pink-100 transition-all duration-300 shadow-sm hover:shadow-md">
                <div class="flex items-center gap-6">
                    {{-- Icono de usuario --}}
                    <div class="flex-shrink-0">
                        <svg class="w-20 h-20 text-pink-400" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4"/>
                            <path d="M12 14c-6 0-8 3-8 5v2h16v-2c0-2-2-5-8-5z"/>
                        </svg>
                    </div>
                    {{-- Texto --}}
                    <div>
                        <h3 class="text-xl font-light text-pink-400 leading-tight">Administrar</h3>
                        <h3 class="text-xl font-light text-pink-400 leading-tight">Usuarios</h3>
                    </div>
                </div>
            </div>
        </a>

        {{-- Card 2: Gestión de Estudiantes --}}
        <div class="group cursor-pointer">
            <div class="bg-pink-50 rounded-2xl p-8 hover:bg-pink-100 transition-all duration-300 shadow-sm hover:shadow-md">
                <div class="flex items-center gap-6">
                    {{-- Icono de estudiantes (dos personas) --}}
                    <div class="flex-shrink-0 relative">
                        <svg class="w-20 h-20 text-pink-400" fill="currentColor" viewBox="0 0 24 24">
                            {{-- Persona de atrás --}}
                            <circle cx="9" cy="7" r="3"/>
                            <path d="M9 12c-3 0-5 1.5-5 3v2h10v-2c0-1.5-2-3-5-3z"/>
                            {{-- Persona de adelante --}}
                            <circle cx="16" cy="7" r="3" opacity="0.8"/>
                            <path d="M16 12c-3 0-5 1.5-5 3v2h10v-2c0-1.5-2-3-5-3z" opacity="0.8"/>
                        </svg>
                    </div>
                    {{-- Texto --}}
                    <div>
                        <h3 class="text-xl font-light text-pink-400 leading-tight">Gestión de</h3>
                        <h3 class="text-xl font-light text-pink-400 leading-tight">Estudiantes</h3>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 3: Asistencias Grupos --}}
        <div class="group cursor-pointer">
            <div class="bg-pink-50 rounded-2xl p-8 hover:bg-pink-100 transition-all duration-300 shadow-sm hover:shadow-md">
                <div class="flex items-center gap-6">
                    {{-- Icono de lista/checklist --}}
                    <div class="flex-shrink-0">
                        <svg class="w-20 h-20 text-pink-400" fill="currentColor" viewBox="0 0 24 24">
                            {{-- Primera línea --}}
                            <circle cx="5" cy="6" r="2"/>
                            <rect x="9" y="5" width="12" height="2" rx="1"/>
                            {{-- Segunda línea --}}
                            <circle cx="5" cy="12" r="2"/>
                            <rect x="9" y="11" width="12" height="2" rx="1"/>
                            {{-- Tercera línea --}}
                            <circle cx="5" cy="18" r="2"/>
                            <rect x="9" y="17" width="12" height="2" rx="1"/>
                        </svg>
                    </div>
                    {{-- Texto --}}
                    <div>
                        <h3 class="text-xl font-light text-pink-400 leading-tight">Asistencias</h3>
                        <h3 class="text-xl font-light text-pink-400 leading-tight">Grupos</h3>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 4: Pagos --}}
        <div class="group cursor-pointer">
            <div class="bg-pink-50 rounded-2xl p-8 hover:bg-pink-100 transition-all duration-300 shadow-sm hover:shadow-md">
                <div class="flex items-center gap-6">
                    {{-- Icono de billetera --}}
                    <div class="flex-shrink-0">
                        <svg class="w-20 h-20 text-pink-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            {{-- Billetera --}}
                            <rect x="3" y="6" width="18" height="14" rx="2" ry="2"/>
                            <path d="M3 10h18"/>
                            <circle cx="7" cy="15" r="1.5" fill="currentColor"/>
                        </svg>
                    </div>
                    {{-- Texto --}}
                    <div>
                        <h3 class="text-2xl font-light text-pink-400">Pagos</h3>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 5: Informes --}}
        <div class="group cursor-pointer">
            <div class="bg-pink-50 rounded-2xl p-8 hover:bg-pink-100 transition-all duration-300 shadow-sm hover:shadow-md">
                <div class="flex items-center gap-6">
                    {{-- Icono de gráfico de barras --}}
                    <div class="flex-shrink-0">
                        <svg class="w-20 h-20 text-pink-400" fill="currentColor" viewBox="0 0 24 24">
                            {{-- Línea base --}}
                            <rect x="3" y="20" width="18" height="2"/>
                            {{-- Barra 1 (pequeña) --}}
                            <rect x="5" y="12" width="3" height="8" rx="1"/>
                            {{-- Barra 2 (mediana) --}}
                            <rect x="10" y="8" width="3" height="12" rx="1"/>
                            {{-- Barra 3 (grande) --}}
                            <rect x="15" y="4" width="3" height="16" rx="1"/>
                        </svg>
                    </div>
                    {{-- Texto --}}
                    <div>
                        <h3 class="text-2xl font-light text-pink-400">Informes</h3>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 6: Ajustes --}}
        <div class="group cursor-pointer">
            <div class="bg-pink-50 rounded-2xl p-8 hover:bg-pink-100 transition-all duration-300 shadow-sm hover:shadow-md">
                <div class="flex items-center gap-6">
                    {{-- Icono de engranaje --}}
                    <div class="flex-shrink-0">
                        <svg class="w-20 h-20 text-pink-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94L14.4 2.81c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/>
                        </svg>
                    </div>
                    {{-- Texto --}}
                    <div>
                        <h3 class="text-2xl font-light text-pink-400">Ajustes</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>

