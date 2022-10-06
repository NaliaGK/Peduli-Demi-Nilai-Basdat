<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booster extends Model
{
    protected $table = 'tempat_booster';
    protected $primaryKey = 'id_booster';
    protected $fillable = ['id_kota', 'id_faskes', 'nama_tempat','alamat', 'jam_operasional', 'contact', 'jenis_vaksin'];
    public $timestamps = false;
}
