<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthUserTrait;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
        return auth()->shouldUse('api');
    }
    
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }
    
    public function me()
    {
        $user = $this->getAuthUser();

        return response()->json([
            'id' => auth()->user()['id'],
            'username' => auth()->user()['username'],
            'email' => auth()->user()['email'],
            'created_at' => auth()->user()['created_at'],
            'updated_at' => auth()->user()['updated_at'],
        ]);
    }
    
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
    
    public function refresh()
    {   
        $user = $this->getAuthUser();

        //Tymon\JWTAuth\Exceptions\JWTException
        //error no token send   
        return $this->respondWithToken(auth()->refresh(true, true));
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'token_type' => 'bearer',
            'access_token' => $token,
            'expires_in' => auth()->factory()->getTTL() * 60 * 60
        ]);
    }
}