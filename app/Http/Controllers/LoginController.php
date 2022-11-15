<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {

        if (Auth::check() && Auth::user()->status == 'active') {
            return redirect('admin');
        }else{
            return view('login-user');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            if($request->user()->role == 'mahasiswa' && $request->user()->status == 'deactive'){
                Session::flash('error', 'Status Account Anda Belum Aktif Mohon Hubungi Admin!');
                return redirect('login-user');
            }else if($request->user()->role == 'admin' && $request->user()->status == 'active'){
                    return redirect('admin');
            }else if($request->user()->role == 'mahasiswa' && $request->user()->status == 'active'){
                    return redirect('user');
            }else{
                Session::flash('error', 'Email atau password anda salah');
                return redirect('login-user');
            }
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('login-user');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
