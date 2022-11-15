<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Jurusan;

use Session;

class RegisterController extends Controller
{
    public function register()
    {
        $data = Jurusan::all();
        return view('register-user', ['data' => $data]);
    }

    public function actionregister(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'id_jurusan' => $request->id_jurusan,
            'role' => "mahasiswa",
            'status'=> "deactive",
            'nrp' => $request->nrp,
            'name' => $request->name,
            'password' => Hash::make($request->password)
            
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        return redirect('register-user');
    }
}
