<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // baru


class AuthController extends Controller
{
    
    public function proses_login(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $user = Auth::user();
            if ($user->level == 'admin') {
                $request->session()->put('username',$user->username);
                $request->session()->put('nama',$user->nama_user);
                $request->session()->put('id',$user->id);
                return redirect()->intended('/admin');
            } elseif ($user->level == 'pembeli') {
                $request->session()->put('username',$user->username);
                $request->session()->put('id',$user->id);
                return redirect()->intended('/home');
            }
            return redirect()->intended('/form/login');
        }
        return redirect('/form/login');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/form/login');
    }
    
}