<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DftrPCR extends Model
{
    protected $table = 'user_daftar_pcr';
    protected $primaryKey = 'id_daftarpcr';
    protected $fillable = ['id_pcr', 'id_user', 'tgl_booking', 'status pembayaran'];
    public $timestamps = false;
}