<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    /**
     * Get all users.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAll()
    {
        return User::paginate(15);
    }

    /**
     * Get user by ID.
     *
     * @param int $id
     * @return User|null
     */
    public function getById(int $id): ?User
    {
        return User::find($id);
    }

    /**
     * Create a new user.
     *
     * @param array $data
     * @return User
     */
    public function create(array $data): User
    {
        $data['password'] = Hash::make($data['password']);

        return User::create($data);
    }

    /**
     * Update user.
     *
     * @param User $user
     * @param array $data
     * @return User
     */
    public function update(User $user, array $data): User
    {
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);

        return $user;
    }

    /**
     * Delete user (soft delete).
     *
     * @param User $user
     * @return void
     */
    public function delete(User $user): void
    {
        $user->delete();
    }

    /**
     * Get authenticated user.
     *
     * @return User|null
     */
    public function getAuthenticatedUser(): ?User
    {
        return auth()->user();
    }

    /**
     * Update authenticated user profile.
     *
     * @param array $data
     * @return User
     */
    public function updateProfile(array $data): User
    {
        $user = auth()->user();

        if (isset($data['password_new'])) {
            $user->password = Hash::make($data['password_new']);
        }

        if (isset($data['name'])) {
            $user->name = $data['name'];
        }

        if (isset($data['email'])) {
            $user->email = $data['email'];
        }

        $user->save();

        return $user;
    }
}