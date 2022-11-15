<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID_JURUSAN';
    protected $fillable = ['ID_JURUSAN','NAMA_JURUSAN'];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class, 'id_jurusan', 'ID_JURUSAN');
    }
}
