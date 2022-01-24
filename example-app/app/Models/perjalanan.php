<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perjalanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'tittle',
        'deskripsi',
        'image',
    ];

}
