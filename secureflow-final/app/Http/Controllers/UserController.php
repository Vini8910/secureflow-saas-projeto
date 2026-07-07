<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of users.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $users = $this->userService->getAll();

        return response()->json([
            'data' => UserResource::collection($users),
            'meta' => [
                'current_page' => $users->currentPage(),
                'from' => $users->firstItem(),
                'last_page' => $users->lastPage(),
                'per_page' => $users->perPage(),
                'to' => $users->lastItem(),
                'total' => $users->total(),
            ],
        ]);
    }

    /**
     * Store a newly created user.
     *
     * @param StoreUserRequest $request
     * @return JsonResponse
     */
    public function store(StoreUserRequest $request): JsonResponse
    {
        $user = $this->userService->create($request->validated());

        return response()->json([
            'message' => 'Usuário criado com sucesso.',
            'user' => new UserResource($user),
        ], 201);
    }

    /**
     * Display the specified user.
     *
     * @param User $user
     * @return JsonResponse
     */
    public function show(User $user): JsonResponse
    {
        return response()->json([
            'user' => new UserResource($user),
        ]);
    }

    /**
     * Update the specified user.
     *
     * @param UpdateUserRequest $request
     * @param User $user
     * @return JsonResponse
     */
    public function update(UpdateUserRequest $request, User $user): JsonResponse
    {
        $user = $this->userService->update($user, $request->validated());

        return response()->json([
            'message' => 'Usuário atualizado com sucesso.',
            'user' => new UserResource($user),
        ]);
    }

    /**
     * Remove the specified user (soft delete).
     *
     * @param User $user
     * @return JsonResponse
     */
    public function destroy(User $user): JsonResponse
    {
        $this->userService->delete($user);

        return response()->json([
            'message' => 'Usuário desativado com sucesso.',
        ]);
    }

    /**
     * Get authenticated user profile.
     *
     * @return JsonResponse
     */
    public function me(): JsonResponse
    {
        $user = $this->userService->getAuthenticatedUser();

        return response()->json([
            'user' => new UserResource($user),
        ]);
    }

    /**
     * Update authenticated user profile.
     *
     * @param UpdateProfileRequest $request
     * @return JsonResponse
     */
    public function updateMe(UpdateProfileRequest $request): JsonResponse
    {
        $user = $this->userService->updateProfile($request->validated());

        return response()->json([
            'message' => 'Perfil atualizado com sucesso.',
            'user' => new UserResource($user),
        ]);
    }
}