<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function __construct(private UserService $userService) {}
    public function index(): View
    {
        $users = $this->userService->getAllUsers(15); // 15 por página
        return view('admin.users.index', compact('users'));
    }


    /**
     * Muestra el formulario para crear un nuevo usuario.
     */
    public function create(): View
    {
        $roles = $this->userService->getAvailableRoles();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Almacena un nuevo usuario en la base de datos.
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        $this->userService->createNewUser($request->validated());

        return redirect()->route('admin.users.index')->with('success', 'Usuario creado exitosamente.');
    }

    /**
     * Muestra los detalles de un usuario específico.
     */
    public function show(User $user): View
    {
        // Laravel hace el find() automáticamente gracias al Route Model Binding.
        return view('admin.users.show', compact('user'));
    }

    /**
     * Muestra el formulario para editar un usuario existente.
     */
    public function edit(User $user): View
    {
        $roles = $this->userService->getAvailableRoles();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Actualiza un usuario existente en la base de datos.
     */
    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $this->userService->updateExistingUser($user->id, $request->validated());

        return redirect()->route('admin.users.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    /**
     * Elimina un usuario de la base de datos.
     */
    public function destroy(User $user): RedirectResponse
    {
        $this->userService->deleteUserById($user->id);

        return redirect()->route('admin.users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
