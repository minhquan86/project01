<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
    * Initialize the repository model
    *
    * @return string
    */
    public function model()
    {
        return User::class;
    }
}
