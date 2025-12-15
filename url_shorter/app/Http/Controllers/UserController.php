<?php

namespace App\Http\Controllers;

use App\Models\UrlShorter;
use Illuminate\Http\Request;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Auth;
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

        return redirect()->route('login')->with('success', 'Account created successfully');
    }
    public function StoreUrl(Request $request)
    {
        $validated = $request->validate([
            'url_id' => 'required|integer|unique:url_shorter,url_id',
            'user_id' => 'required|integer|exists:user_info,user_id',
            'original_url' => 'required|string|max:50|unique:url_shorter,original_url',
            'shorter_url' => 'required|string|max:50|unique:url_shorter,shorter_url',
        ]);
        
        UrlShorter::create([
            'user_id' => $validated['user_id'],
            'url_id' => $validated['url_id'],
            'original_url' => $validated['original_url'],
            'shorter_url' => $validated['shorter_url']
        ]);
        return redirect()->route('dashboard');
    }

    public function LoginUser(Request $request)
    {
        $data = $request-> validate([
            'user_id' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($data))
        {
            return view('dashboard');
        }
    }
}
