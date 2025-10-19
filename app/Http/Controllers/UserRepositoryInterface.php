<?php

namespace App\Interfaces;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface UserRepositoryInterface
{
    public function getAllUsersWithRoles(): LengthAwarePaginator;

    public function findUserById(int $id): ?User;

    public function createUser(array $data): User;

    public function updateUser(User $user, array $data): bool;

    public function deleteUser(User $user): bool;

    public function getAllRoles();
}
