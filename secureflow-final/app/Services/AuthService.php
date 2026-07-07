<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class AuthService
{
    /**
     * Register a new user.
     *
     * @param array $data
     * @return User
     */
    public function register(array $data): User
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        event(new Registered($user));

        return $user;
    }

    /**
     * Authenticate user and create token.
     *
     * @param array $credentials
     * @param bool $remember
     * @return string|null
     */
    public function login(array $credentials, bool $remember = false): ?string
    {
        if (!Auth::attempt($credentials, $remember)) {
            return null;
        }

        $user = Auth::user();
        $user->tokens()->delete();

        return $user->createToken('auth-token')->plainTextToken;
    }

    /**
     * Logout user by revoking token.
     *
     * @return void
     */
    public function logout(): void
    {
        Auth::user()->currentAccessToken()->delete();
    }

    /**
     * Send password reset link.
     *
     * @param string $email
     * @return string
     */
    public function forgotPassword(string $email): string
    {
        return Password::sendResetLink(['email' => $email]);
    }

    /**
     * Reset user password.
     *
     * @param array $data
     * @return string
     */
    public function resetPassword(array $data): string
    {
        return Password::reset(
            $data,
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->save();
            }
        );
    }
}