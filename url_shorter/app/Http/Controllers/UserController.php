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
        // this parts validate the user input data which need to fulfil all of those requirement
        $validated = $request->validate([
            'user_id' => 'required|string|max:50|unique:user_info,user_id',
            'email' => 'required|email|max:25|unique:user_info,email',
            'password' => 'required|string|min:8',
        ]);

        // after successfully validate input data this part will store into database
        // here into model folder there have UserInfo file where define the table name
        UserInfo::create([
            'user_id' => $validated['user_id'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // after storing data from signup page it will go to directly the login page
        return redirect()->route('login')->with('success', 'Account created successfully');
    }

    // this parts validate the user input data which need to fulfil all of those requirement
    public function StoreUrl(Request $request)
    {
        $validated = $request->validate([
            'url_id' => 'required|integer|unique:url_shorter,url_id',
            'user_id' => 'required|integer|exists:user_info,user_id',
            'original_url' => 'required|string|max:50|unique:url_shorter,original_url',
            'shorter_url' => 'required|string|max:50|unique:url_shorter,shorter_url',
        ]);
        
        // after successfully validate input data this part will store into database
        // here into model folder there have UrlShorter file where define the table name
        UrlShorter::create([
            'user_id' => $validated['user_id'],
            'url_id' => $validated['url_id'],
            'original_url' => $validated['original_url'],
            'shorter_url' => $validated['shorter_url']
        ]);

        // after storing data from store_url page it will go to directly the dashboard page
        return redirect()->route('dashboard');
    }

    // when user try to login then there checking those field are fillable or not
    public function LoginUser(Request $request)
    {
        $data = $request-> validate([
            'user_id' => 'required',
            'password' => 'required'
        ]);

        // this parts checking the login input data are matching the database or not
        // if matching it will go to the dashboard page otherwise ramaining the same page
        if(Auth::attempt($data))
        {
            return view('dashboard');
        }
    }
}
