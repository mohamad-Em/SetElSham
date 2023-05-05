<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.index');
    }
    public function store(LoginRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::guard('admin')->attempt($data))
        {
            return redirect()->intended('admin/home');
        }
    }
    public function home()
    {
        return view('admin.home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
