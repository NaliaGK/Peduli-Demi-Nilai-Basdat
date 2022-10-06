<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat';
    protected $primaryKey = 'id_obat';
    protected $fillable = ['id_faskes', 'stok_obat', 'nama_obat','deskripsi_obat', 'harga_satuan'];
    public $timestamps = false;
}
