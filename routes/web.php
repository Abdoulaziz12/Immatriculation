<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VoitureController;


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

Route::get('/welcome',function(){
    return view('welcome');
});
Route::get('/proprietaire',[ClientController::class,'liste']);
Route::post('/proprietaire',[ClientController::class,'store'])->name('addClient');
Route::put('/proprietaire/update/{id}',[ClientController::class,'update'])->name('ajour');
Route::delete('/proprietaire/destoy/{id}',[ClientController::class,'destroy'])->name('supp');

/*les routes pour la table voiture*/
Route::get('/wel',[VoitureController::class,'voire']
);

