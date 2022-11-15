<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID_BUKU';
    protected $fillable = ['ID_BUKU','ID_KATEGORI','DESKRIPSI_BUKU','NAMA_BUKU', 'NAMA_PENERBIT','TAHUN_TERBIT', 'JUMLAH_BUKU','FILE'];
    public $timestamps = false;


    public function getDataKategori(){
        return $this->belongsTo(Kategori::class, 'ID_KATEGORI', 'ID_KATEGORI');
    }
}
