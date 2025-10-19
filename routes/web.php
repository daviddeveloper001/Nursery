<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Student\DashboardController as StudentDashboardController;
use App\Http\Controllers\Teacher\DashboardController as TeacherDashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Las rutas de autenticación generadas por Breeze
require __DIR__.'/auth.php';

// Todas las rutas que requieren autenticación
Route::middleware('auth')->group(function () {
    // Ruta de perfil común para todos los roles
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Controlador de redirección principal.
    // Después del login, el usuario es enviado aquí y redirigido según su rol.
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // --- GRUPO DE RUTAS PARA ADMINISTRADORES ---
    Route::middleware(['role:Admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        // Aquí irán el resto de rutas de administración (gestión de usuarios, etc.)
    });

    // --- GRUPO DE RUTAS PARA PROFESORES ---
    Route::middleware(['role:Profesor'])->prefix('teacher')->name('teacher.')->group(function () {
        Route::get('/dashboard', [TeacherDashboardController::class, 'index'])->name('dashboard');
        // Aquí irán el resto de rutas de profesores (mis clases, calificaciones, etc.)
    });

    // --- GRUPO DE RUTAS PARA ESTUDIANTES ---
    Route::middleware(['role:Estudiante'])->prefix('student')->name('student.')->group(function () {
        Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('dashboard');
        // Aquí irán el resto de rutas de estudiantes (mis cursos, notas, etc.)
    });
});

