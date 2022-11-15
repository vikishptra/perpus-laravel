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
use Illuminate\Support\Facades\Input;



class TransaksiAdminController extends Controller
{
  
    public function index()
    {
        $transaksi = Transaksi::where('status','=',0)->orWhere('status', '=', 2)->paginate(5);
        $kategori =Kategori::all();
        return view('admin.transaksi.index',compact('transaksi'), compact('kategori'));
    }

    public function konfirmasiBukuUser(Request $request, $id_transaksi){

        if($request->input('kembali_buku')) {
            $transaksi = Transaksi::find($id_transaksi);
            Transaksi::where('id_transaksi', $id_transaksi)
            ->update(['status' => 3]);
    
            $buku = Buku::find($transaksi->id_buku);
            Buku::where('ID_BUKU', $buku->ID_BUKU)
            ->update(['JUMLAH_BUKU' => $buku->JUMLAH_BUKU + 1]);
    
            $kategori = Kategori::find($buku->ID_KATEGORI);
            Kategori::where('ID_KATEGORI', $kategori->ID_KATEGORI)
            ->update(['STOCK' => $kategori->STOCK + 1]);
    
            return redirect()->route('get-admin-history-buku-user');

        }else if($request->input('pinjam_buku')){
            $transaksi = Transaksi::find($id_transaksi);
            Transaksi::where('id_transaksi', $id_transaksi)
            ->update(['status' => 1]);
            return redirect()->route('get-admin-history-buku-user');
        }

    }

}
