<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = 'tamu';
    protected $fillable = ['nama', 'nik', 'alamat', 'umur', 'jeniskelamin', 'status'];
}
