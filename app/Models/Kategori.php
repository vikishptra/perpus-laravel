<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID_KATEGORI';
    protected $fillable = ['ID_KATEGORI','KATEGORI', 'STOCK'];
    public $timestamps = false;
}
