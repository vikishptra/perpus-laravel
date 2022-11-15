<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_transaksi';
    protected $fillable = ['id_transaksi','id_user','tanggal_pinjam','tanggal_pengembalian', 'id_buku','status', 'jumlah'];

    public function getDataBuku(){
        return $this->belongsTo(Buku::class, 'id_buku', 'ID_BUKU');
    }
    public function getDataUser(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
