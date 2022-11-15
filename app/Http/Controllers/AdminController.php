<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title         = 'Dashboard';
        $member        = collect(DB::SELECT("SELECT count(id) as jumlah from users"))->first();
        $label         = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
        for($bulan=1;$bulan < 13;$bulan++){
        $chartuser     = collect(DB::SELECT("SELECT count(id) AS jumlah from users where month(created_at)='$bulan'"))->first();
        $jumlah_user[] = $chartuser->jumlah;
        }

        for($bulan=1;$bulan < 13;$bulan++){
        $chartTransaksi = collect(DB::SELECT("SELECT count(id_user) AS transaksi from transaksis where month(created_at)='$bulan' AND status =1"))->first();
        $jumlah_transaksi_belom_kembalikan_buku[] = $chartTransaksi->transaksi;
        }

        for($bulan=1;$bulan < 13;$bulan++){
            $chartTransaksi = collect(DB::SELECT("SELECT count(id_user) AS transaksi from transaksis where month(created_at)='$bulan' AND status =3"))->first();
            $jumlah_transaksi_sudah_kembalikan_buku[] = $chartTransaksi->transaksi;
        }

        return view('admin', compact('jumlah_user','title','member','label','jumlah_transaksi_belom_kembalikan_buku','jumlah_transaksi_sudah_kembalikan_buku'));
    }
}
