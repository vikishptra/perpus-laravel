<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class MajorController extends Controller
{
  public function index()
  {
      $data = Jurusan::all();
      return view('admin.major.index', ['data' => $data]);
  }

  public function create(Request $request)
  {
      return view('admin.major.create');
  }
  public function store(Request $request)
    {
        $user = Jurusan::create([
            'NAMA_JURUSAN' => $request->nama_jurusan 
        ]);
        return redirect('admin/jurusan')->with('success', 'Tambah Data Berhasil');
    }
    public function update($ID_JURUSAN)
    {
        $row = Jurusan::find($ID_JURUSAN);
        return view('admin.major.update', compact('row'));
    }
    public function updatesMajor(Request $request,$ID_JURUSAN)
    {
        $user = Jurusan::find($ID_JURUSAN);
        $user->update($request->all());
        return redirect('admin/jurusan')->with('success', 'Ubah Data Berhasil');
    }
    public function destroy($ID_JURUSAN)
    {
        $user = Jurusan::find($ID_JURUSAN);
        $user->delete();

        return redirect()->route('index-major')->with('succes','Siswa Berhasil di Hapus');
    }
   
}
