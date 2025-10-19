<?php

namespace App\Services;

use App\Interfaces\UserRepositoryInterface;
use App\Interfaces\UserServiceInterface;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    protected UserRepositoryInterface $userRepository;

    // Inyección de Dependencias: Inyectamos la interfaz, no la clase concreta.
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers(): LengthAwarePaginator
    {
        return $this->userRepository->getAllUsersWithRoles();
    }

    public function getUserById(int $id): ?User
    {
        return $this->userRepository->findUserById($id);
    }

    public function createNewUser(array $data): User
    {
        // Lógica de negocio: Hashear la contraseña antes de crear.
        $data['password'] = Hash::make($data['password']);

        $user = $this->userRepository->createUser($data);

        // Lógica de negocio: Asignar el rol después de crear el usuario.
        $user->assignRole($data['role']);

        return $user;
    }

    public function updateExistingUser(int $id, array $data): bool
    {
        $user = $this->getUserById($id);

        // Lógica de negocio: Si se provee una nueva contraseña, la hasheamos.
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']); // No actualizar la contraseña si viene vacía.
        }

        $user->syncRoles([$data['role']]);

        return $this->userRepository->updateUser($user, $data);
    }

    public function deleteUserById(int $id): bool
    {
        $user = $this->getUserById($id);
        return $this->userRepository->deleteUser($user);
    }

    public function getAvailableRoles()
    {
        return $this->userRepository->getAllRoles();
    }
}
