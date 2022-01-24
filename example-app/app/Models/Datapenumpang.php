<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapenumpang extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jemput',
        'tujuan',
        'armada',
        'tanggalberangkat',
        'tanggalpulang'
    ];
}
