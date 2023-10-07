<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lemburku extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal_lembur',
        'jam_lembur',
    ];
}
