<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\Permission\Models\Role;

class UserRepository implements UserRepositoryInterface
{
    public function getAllUsersWithRoles(): LengthAwarePaginator
    {
        // Usamos with('roles') para cargar la relación y evitar el problema N+1.
        return User::with('roles')->paginate(10);
    }

    public function findUserById(int $id): ?User
    {
        return User::find($id);
    }

    public function createUser(array $data): User
    {
        return User::create($data);
    }

    public function updateUser(User $user, array $data): bool
    {
        return $user->update($data);
    }

    public function deleteUser(User $user): bool
    {
        return $user->delete();
    }

    public function getAllRoles()
    {
        // Obtenemos todos los roles. Podríamos excluir 'Admin' si no queremos que se pueda asignar.
        // Por ejemplo: Role::where('name', '!=', 'Admin')->get();
        return Role::all();
    }
}
