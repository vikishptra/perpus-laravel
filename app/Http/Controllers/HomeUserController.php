<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Buku;
use Illuminate\Support\Facades\Hash;
class HomeUserController extends Controller
{
  
    public function index()
    {
        $buku = Buku::paginate(5);
        $kategori = Kategori::all();
        return view('user.index',compact('buku'), compact('kategori'));
    }
} 
