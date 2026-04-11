<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    use HasFactory;
    
    protected $table='ordonnance';
    protected $fillable=[
        'patient_id',
        'nom_medicament',
        'dosage', 
        'frequence_utilisation', 
        'date_prescription', 
        'duree_prescription', 
        'date_expiration',
    ];
}
