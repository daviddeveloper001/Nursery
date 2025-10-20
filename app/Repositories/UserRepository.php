<?php

namespace App\Repositories;

use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    const RELATIONS = [];

    public function __construct(User $user)
    {
        parent::__construct($user, self::RELATIONS);
    }

    public function getAllRoles()
    {
        return Role::all();
    }
}
