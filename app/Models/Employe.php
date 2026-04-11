<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $table='employe';
    protected $fillable=[
        'noms',
        'genre',
        'poste',
        'adresse',
        'tel',
        'email',
        'image',
    ];
}
