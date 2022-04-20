<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register() 
    {
        $validator = Validator::make(request()->all(), [
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }

        $user = User::create([
            'username' => request('username'), 
            'email' => request('email'),
            'password' =>  Hash::make(request('password'))
        ]);
        
        //generate token, auto login, atua hanya respon berhasil..
        return response()->json(['message' => 'Successfully register']);
    }
}
