<?php

use App\Http\Controllers\ConsultationApiController;
use App\Http\Controllers\PatientApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API (réservée : jeton Sanctum obligatoire)
|--------------------------------------------------------------------------
| Exemple de création d'un jeton : voir la section « API » du README.
*/

Route::middleware('auth:sanctum')->group(function () {

    Route::get('patients', [PatientApiController::class, 'patient']);
    Route::post('patient', [PatientApiController::class, 'store']);
    Route::put('patient/{id}', [PatientApiController::class, 'update']);
    Route::delete('patient/{id}', [PatientApiController::class, 'destroy']);

    Route::get('consultations', [ConsultationApiController::class, 'consultations']);
    Route::post('consultation', [ConsultationApiController::class, 'store']);
    Route::put('consultation/{id}', [ConsultationApiController::class, 'update']);
    Route::delete('consultation/{id}', [ConsultationApiController::class, 'destroy']);
});
