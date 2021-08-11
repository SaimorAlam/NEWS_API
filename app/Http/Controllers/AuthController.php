<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            'image' => 'required|mimes:jpg,png,jpej,gif|max:2048',
        ]);
        $newImageName =uniqid() . '-' . $fields['name'] . '.' . $fields['image']->extension();
        $fields['image']->move(public_path('images'), $newImageName);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
            'image_path' => $newImageName,
        ]);
    

        $token = $user->createToken('newsapitoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response ,201);
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        //Check Email
        $user = User::where('email',$fields['email'])->first();

        //Check Password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad Creds',
            ] , 401);
        }

        $token = $user->createToken('newsapitoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response ,201);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged Out',
        ];
    }

}
