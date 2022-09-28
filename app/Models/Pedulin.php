<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedulin extends Model
{
    protected $table = 'pedulins';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
}

