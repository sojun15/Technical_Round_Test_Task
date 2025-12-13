<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function SignUp(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|string|max:50|unique:user_info,user_id',
            'email' => 'required|email|max:25|unique:user_info,email',
            'password' => 'required|string|min:8',
        ]);

        UserInfo::create([
            'user_id' => $validated['user_id'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('success', 'Account created successfully');
    }
}
