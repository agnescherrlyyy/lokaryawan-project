<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absenku extends Model
{
    use HasFactory;
    protected $fillable = [
        'hari',
        'tanggal',
        'kehadiran',
        'jam_kehadiran',
        'jam_pulang',
        'event',
        'keterangan',
    ];
}
