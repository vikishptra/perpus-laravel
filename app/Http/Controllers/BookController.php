<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;
use Intervention\Image\Facades\Image;

use File;


class BookController extends Controller
{
  
    public function index()
    {
        $data = Buku::all();
        return view('admin.buku.index', compact('data'));
    }

    
    public function create(Request $request)
    {
        $data = Kategori::all();
        return view('admin.buku.create',  compact('data'));
    }

    public function update($ID_BUKU)
    {
        $row = Buku::find($ID_BUKU);
        $data = Kategori::all();
        return view('admin.buku.update', compact('row'), compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_buku' => 'required',
            'nama_penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah_buku' => 'required',
            'deskripsi_buku' => 'required',
        ]);

        $user = new Buku();
        $user->ID_KATEGORI = $request->id_kategori;
        $user->DESKRIPSI_BUKU = $request->deskripsi_buku;
        $user->NAMA_BUKU = $request->nama_buku;
        $user->NAMA_PENERBIT = $request->nama_penerbit;
        $user->TAHUN_TERBIT = $request->tahun_terbit;
        $user->JUMLAH_BUKU = $request->jumlah_buku;
        $image = $request->file('file');
        $file_name = rand(1000, 9999) . $image->getClientOriginalName();

        $img = Image::make($image->path());
        $img->resize('180', '120')
            ->save(public_path('images_book') . $file_name);

        $image->move('images_book', $file_name);

        $user->files = $file_name;
        $kategori = Kategori::find($request->id_kategori);
        if($kategori->STOCK > 0){
            $result_stock = $kategori->STOCK + $request->jumlah_buku;
        }else{
            $result_stock = $request->jumlah_buku;
        }
        Kategori::where('ID_KATEGORI', $request->id_kategori)
        ->update(['STOCK' => $result_stock]);
        $user->save();
        return redirect('admin/buku')->with('success', 'Tambah Data Berhasil');
    }

    public function updateBuku(Request $request,$ID_BUKU)
    {
        
        $user = Buku::find($ID_BUKU);
        $kategori = Kategori::find($request->ID_KATEGORI);

        if($request->hasFile('files'))
        {
        $destination = 'images_book/' . $user->files;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $file = $request->file('files');
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.' . $extension;
        $file->move('images_book/', $filename);
        $user->files = $filename;
    }

        // DD($kategori);
            $result_stock2 =  $kategori->STOCK - $user->JUMLAH_BUKU;
            $result_stock = $result_stock2 + $request->JUMLAH_BUKU;
    
        Kategori::where('ID_KATEGORI', $request->ID_KATEGORI)
        ->update(['STOCK' => $result_stock]);
        $user->update($request->all());
        return redirect('admin/buku')->with('success', 'Ubah Data Berhasil');
    }

    public function destroy($ID_BUKU)
    {
        $user = Buku::find($ID_BUKU);
        $buku = Kategori::find($user->ID_KATEGORI);

        $result_stock = $buku->STOCK - $user->JUMLAH_BUKU;

        Kategori::where('ID_KATEGORI', $user->ID_KATEGORI)
        ->update(['STOCK' => $result_stock]);
        $user->delete();

        return redirect()->route('index-book')->with('succes','Siswa Berhasil di Hapus');
    }
}
