<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\RdvController;
use App\Http\Controllers\HistoriqueController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\OrdonnanceController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* Route::get('/', function () {
    return view('acceuil');
}); */

Route::get('home', [PageController::class, 'home'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('contact', [PageController::class, 'contact'])->name('contact');


Route::get('patient', [PatientController::class, 'patient'])->name('list.patient');
Route::get('create_p', [PatientController::class, 'create'])->name('create.patient');
Route::post('store_p', [PatientController::class, 'store'])->name('store.patient');
Route::get('edit_p/{id}', [PatientController::class, 'edit'])->name('edit.patient');
Route::put('update_p/{id}', [PatientController::class, 'update'])->name('update.patient');
Route::delete('delete_p/{id}', [PatientController::class, 'destroy'])->name('delete.patient');

Route::get('consultation', [ConsultationController::class, 'consultation'])->name('list.consultation');
Route::get('create_c', [ConsultationController::class, 'create'])->name('create_c');
Route::post('store_c', [ConsultationController::class, 'store'])->name('store.consultation');
Route::get('edit_c/{id}', [ConsultationController::class, 'edit'])->name('edit_c');
Route::put('update_c/{id}', [ConsultationController::class, 'update'])->name('update_c');
Route::delete('delete_c/{id}', [ConsultationController::class, 'destroy'])->name('delete.consultation');


Route::get('medecin', [MedecinController::class, 'medecin'])->name('list.medecin');
Route::get('create_m', [MedecinController::class, 'create'])->name('create.medecin');
Route::post('store_m', [MedecinController::class, 'store'])->name('store.medecin');
Route::get('edit_m/{id}', [MedecinController::class, 'edit'])->name('edit.medecin');
Route::put('update_m/{id}', [MedecinController::class, 'update'])->name('update.medecin');
Route::delete('delete_m/{id}', [MedecinController::class, 'destroy'])->name('delete.medecin');

Route::get('rendezvous', [RdvController::class, 'rendezvous'])->name('list.rdv');
Route::get('create_r', [RdvController::class, 'create'])->name('create.rdv');
Route::post('store_r', [RdvController::class, 'store'])->name('store.rdv');
Route::get('edit_r/{id}', [RdvController::class, 'edit'])->name('edit.rdv');
Route::put('update_r/{id}', [RdvController::class, 'update'])->name('update.rdv');
Route::delete('delete_r/{id}', [RdvController::class, 'destroy'])->name('delete.rdv');


Route::get('employe', [EmployeController::class, 'employe'])->name('list.employe');
Route::get('create_e', [EmployeController::class, 'create'])->name('create.employe');
Route::post('store_e', [EmployeController::class, 'store'])->name('store.employe');
Route::get('edit_e/{id}', [EmployeController::class, 'edit'])->name('edit.employe');
Route::put('update_e/{id}', [EmployeController::class, 'update'])->name('update.employe');
Route::delete('delete_e/{id}', [EmployeController::class, 'destroy'])->name('delete.employe');

Route::get('ordonnance', [OrdonnanceController::class, 'ordonnance'])->name('list.ordonnance');
Route::get('create_o', [OrdonnanceController::class, 'create'])->name('create.ordonnance');
Route::post('store_o', [OrdonnanceController::class, 'store'])->name('store.ordonnance');
Route::get('edit_o/{id}', [OrdonnanceController::class, 'edit'])->name('edit.ordonnance');
Route::put('update_o/{id}', [OrdonnanceController::class, 'update'])->name('update.ordonnance');
Route::delete('delete_o/{id}', [OrdonnanceController::class, 'destroy'])->name('delete.ordonnance');

Route::get('historique', [HistoriqueController::class, 'historique'])->name('list.historique');
Route::get('create_h', [HistoriqueController::class, 'create'])->name('create.historique');
Route::post('store_h', [HistoriqueController::class, 'store'])->name('store.historique');
Route::get('edit_h/{id}', [HistoriqueController::class, 'edit'])->name('edit.historique');
Route::put('update_h/{id}', [HistoriqueController::class, 'update'])->name('update.historique');
Route::delete('delete_h/{id}', [HistoriqueController::class, 'destroy'])->name('delete.historique');

