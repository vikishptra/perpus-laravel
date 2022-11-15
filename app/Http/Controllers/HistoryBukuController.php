<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Buku;
use App\Models\Transaksi;
use Session;
use Illuminate\Support\Facades\Hash;
use Auth;

class HistoryBukuController extends Controller
{
  
    public function index()
    {
        $transaksi = Transaksi::where([['id_user','=',Auth::user()->id]])->paginate(5);
        $kategori =Kategori::all();
        return view('user.history.buku',compact('transaksi'), compact('kategori'));
    }

    public function update($ID_BUKU)
    {
        $row = Buku::find($ID_BUKU);
        $data = Kategori::all();
        return view('user.buku.add', compact('row'), compact('data'));
    }

    public function pinjamBuku(Request $request){

        $user = Buku::find($request->ID_BUKU);
        $jumlah_buku = $user->JUMLAH_BUKU -1;
        $kategori = Kategori::find($request->ID_KATEGORI);
        $userRecord = $userRecord = Transaksi::where('id_user','=',$request->id_user)
        ->where('status','=', $request->status)->orWhere('status', '=', 2)->orWhere('status', '=', 1)->first();

      
        if($userRecord == null){
            $user = Transaksi::create([
                'id_user' => $request->id_user,
                'tanggal_pinjam' => $request->tanggal_pinjam,
                'tanggal_pengembalian' => $request->tanggal_pengembalian,
                'id_buku' => $request->ID_BUKU,
                'status' =>$request->status,
                'jumlah' => $request->jumlah
            ]);
    
            
            Buku::where('ID_BUKU', $request->ID_BUKU)
            ->update(['JUMLAH_BUKU' => $jumlah_buku]);
            Kategori::where('ID_KATEGORI', $request->ID_KATEGORI)
            ->update(['STOCK' => $kategori->STOCK - 1]);
            return redirect('user')->with('success', 'Tambah Data Berhasil');
        }else{
            Session::flash('error', 'Mohon maaff anda harus mengembalikkan buku anda terlebih dahulu sebelum anda meminjamkan buku lagi');
            return redirect()->route('get-add-buku-user', $request->ID_BUKU);
        }
    }
    public function kembaliBuku($id_transaksi){
        $transaksi = Transaksi::find($id_transaksi);
        Transaksi::where('id_transaksi', $id_transaksi)
        ->update(['status' => 2]);
        return redirect()->route('get-history-buku-user');
    }    

   
}
