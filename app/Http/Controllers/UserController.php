<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
  
    public function index()
    {
        $data_user = User::all();
        $data_jurusan = Jurusan::all();
        return view('admin.users.index', compact('data_user'), compact('data_jurusan'));
    }

    public function create()
    {
        $data_jurusan = Jurusan::all();
        return view('admin.users.create', compact('data_jurusan'));
    }

    public function createUser(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'id_jurusan' => $request->id_jurusan,
            'role' => $request->role,
            'status' =>$request->status,
            'nrp' => $request->nrp,
            'name' => $request->name,
            'password' => Hash::make($request->password)
            
        ]);

        return redirect('admin/users')->with('success', 'Tambah Data Berhasil');
    }

    public function update(Request $request, $id)
    {
            $row = User::find($id);
            $data_jurusan = Jurusan::all();
            return view('admin.users.update', compact('row'), compact('data_jurusan'));
    }

    public function updateUser(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'nrp' => 'required',
            'role' => 'required',
            'status'=>'required',
            'id_jurusan' => 'required',
            'email' => 'required',
        ]);
        $user = User::find($id);
        $user->update($request->all());
        return redirect('admin/users')->with('success', 'Ubah Data Berhasil');
    }
    public function destroy($ID_BUKU)
    {
        $user = User::find($ID_BUKU);
        $user->delete();
        return redirect()->route('index')->with('succes','Siswa Berhasil di Hapus');
    }


}
