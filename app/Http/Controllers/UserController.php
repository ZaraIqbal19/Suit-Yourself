<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    // RegisterUser

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

          User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
    }

    // LoginUser



public function login(Request $request)
{
    // login code

    if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ])) {

        if (Auth::user()->role == 'Admin') {
            return redirect('/admin/Admindashboard');
        }

        return redirect('/');
    }

    return back()->with('error', 'Invalid credentials');
}



public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
}
}

