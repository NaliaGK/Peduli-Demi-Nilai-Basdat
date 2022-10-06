<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PCR extends Model
{
    protected $table = 'pcr';
    protected $primaryKey = 'id_pcr';
    protected $fillable = ['id_faskes', 'lokasi_pcr', 'harga_pcr','waktu'];
    public $timestamps = false;
}