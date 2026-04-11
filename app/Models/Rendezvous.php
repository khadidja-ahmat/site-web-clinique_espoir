<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    use HasFactory; 
    protected $table='rendezvous';
    protected $fillable=[
        'dates',
        'patient_id',
        'medecin_id',
        'type',
        'statut',
    ];
    
}
