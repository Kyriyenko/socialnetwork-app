<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService
{

    public function createUser(array $user): array
    {
        $user = User::create($user);

        if (!$user) {
            return [
                'status' => 500,
                'responseData' => [
                    'success' => false,
                    'message' => 'Registration failed'
                ]
            ];
        }

        return [
            'status' => 200,
            'responseData' => [
                'success' => true,
                'message' => 'Registration succeeded'
            ]
        ];
    }


}
