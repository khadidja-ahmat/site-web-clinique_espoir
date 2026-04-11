<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientApiController;
use App\Http\Controllers\ConsultationApiController;
use App\Http\Controllers\MedecinApiController;

Route::get('patients', [PatientApiController::class, 'patient']);
Route::post('patient', [PatientApiController::class, 'store']);
Route::delete('patient/{id}', [PatientApiController::class, 'destroy']);
Route::put('patient/{id}', [PatientApiController::class, 'update']);

Route::get('consultations', [ConsultationApiController::class, 'consultations']);
Route::post('consultation', [ConsultationApiController::class, 'store']);
Route::delete('patient/{id}', [ConsultationApiController::class, 'destroy']);
Route::put('patient/{id}', [ConsultationApiController::class, 'update']);
 
/* 
 Route::get('medecins', [MedecinApiController::class, 'medecin']); */
