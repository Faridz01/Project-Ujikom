<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $fillable = ['nama_barang', 'merk', 'stok_barang', 'harga_barang'];
    public $timestamps = true;

    public function service(){
        return $this->hasMany(Barang::class,'id_barang');
    }
}
