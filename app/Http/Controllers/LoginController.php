<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function actionLogin(Request $request)
    {
        $credential = $request->only(['email', 'password']);
        if (Auth::attempt($credential)){
            return redirect()->intended('dashboard');
        }else{
            return back()->withError(['email'=>'mohon periksa kembali email dan password anda'])->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('login');
    }
}
