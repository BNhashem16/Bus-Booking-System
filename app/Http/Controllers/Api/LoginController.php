<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginRequest;
use App\Http\Resources\User\UserResource;
use App\Services\ApiResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            $user = new UserResource(Auth::user());

            return ApiResponse::success($user, 'You are logged in successfully');
        }

        return ApiResponse::UnAuthorized('Please Check data!');
    }
}
