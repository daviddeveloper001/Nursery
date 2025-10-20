<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function __construct(private UserRepository $userRepository) {}

    public function getAllUsers(int $perPage = 10)
    {
        return $this->userRepository->all($perPage);
    }


    public function getUserById(int $id): ?User
    {
        return $this->userRepository->findBy($id);
    }

    public function createNewUser(array $data): User
    {
        $data['password'] = Hash::make($data['password']);

        $user = $this->userRepository->create($data);

        $user->assignRole($data['role']);

        return $user;
    }

    public function updateExistingUser(int $id, array $data)
    {
        $user = $this->getUserById($id);

        // Lógica de negocio: Si se provee una nueva contraseña, la hasheamos.
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']); // No actualizar la contraseña si viene vacía.
        }

        $user->syncRoles([$data['role']]);

        return $this->userRepository->update($user, $data);
    }

    public function deleteUserById(int $id): bool
    {
        $user = $this->getUserById($id);
        return $this->userRepository->delete($user);
    }

    public function getAvailableRoles()
    {
        return $this->userRepository->getAllRoles();
    }
}
