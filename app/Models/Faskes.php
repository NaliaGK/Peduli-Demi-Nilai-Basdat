<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faskes extends Model
{
    protected $table = 'fasilitas_kesehatan';
    protected $primaryKey = 'id_faskes';
    protected $fillable = ['nama_faskes', 'alamat_faskes', 'deskripsi_faskes', 'contact_faskes','nama_bank', 'no_rekening'];
}
