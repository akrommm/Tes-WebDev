<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    function loginProcess()
    {
        if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('admin/kursus')->with('success', 'Login Berhasil');
        } else {
            return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
