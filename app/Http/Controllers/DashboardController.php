<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class DashboardController extends Controller
{
    
    public function index(){
        $title         = 'Dashboard';
        $member        = collect(DB::SELECT("SELECT count(id) as jumlah from users"))->first();
        $label         = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
        for($bulan=1;$bulan < 13;$bulan++){
        $chartuser     = collect(DB::SELECT("SELECT count(id) AS jumlah from users where month(created_at)='$bulan'"))->first();
        $jumlah_user[] = $chartuser->jumlah;
        }
        return view('admin',compact('title','member','jumlah_user','label'));
    }
}
