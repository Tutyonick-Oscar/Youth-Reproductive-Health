<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function login (Request $request)
    {
        $credentials = $request->validate([
            'user_name'=>['required'],
            'password' =>['required','min:8','max:10','regex:/^youth@[a-z\d]+$/i']
        ]);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.welcome'));
        }
        return back()->withErrors(['user_name'=>'user name or password incorrect !']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
