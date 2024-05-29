<?php

namespace App\Services;
use App\Repositories\UserRepository;

class UserService
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * MasterService constructor.
     */
    public function __construct(
        UserRepository $userRepository,
    ) {
        $this->userRepository = $userRepository;
    }

    /**
     * Get all masters from DB
     *
     * @param  array  $request
     */
    public function findAll()
    {
        return $this->userRepository->all();
    }

    /**
     * Get specified master from DB
     *
     * @param  number  $id
     */
    public function find($id)
    {
        return $this->userRepository->find($id);
    }

    /**
     * Store master data to DB
     *
     * @param  array  $request
     */
    public function store($request)
    {
        return $this->userRepository->create($request);
    }

    /**
     * Update specified master data to DB
     *
     * @param  int  $id
     * @param  array  $request
     */
    public function update($id, $request)
    {
        $result = $this->userRepository->update($id, $request);
        if (! $result) {
            abort(404);
        }

        return true;
    }

    /**
     * Delete specified master from DB
     *
     * @param  int  $id
     */
    public function delete($id)
    {
        $result = $this->userRepository->delete($id);
        if (! $result) {
            abort(404);
        }

        return true;
    }
}
