<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public ?AuthService $authService = null;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function register(UserCreateRequest $request)
    {

        $result = $this->authService->createUser
        ([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return response()->json($result['responseData'], $result['status']);
    }

    public function login()
    {

    }




}
