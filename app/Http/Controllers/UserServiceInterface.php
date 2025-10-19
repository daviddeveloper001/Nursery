<?php

namespace App\Interfaces;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface UserServiceInterface
{
    public function getAllUsers(): LengthAwarePaginator;

    public function getUserById(int $id): ?User;

    public function createNewUser(array $data): User;

    public function updateExistingUser(int $id, array $data): bool;

    public function deleteUserById(int $id): bool;

    public function getAvailableRoles();
}
