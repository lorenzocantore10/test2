<?php

use App\Http\Controllers\GraficoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/grafici', function () {
    return view('grafici');
});

//rotta che mi porta al form del wallet
Route::get('/wallet', function () {
    return view('form.wallet');});
Route::get('/team', function () {
    return view('form.team');})->name('team');
   
    

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/form', [App\Http\Controllers\HomeController::class, 'form'])->name('form');

//Rotte grafici
Route::get('grafici',[App\Http\Controllers\GraficoController::class,'index']);
//Rotta secondo grafico
Route::get('grafici2',[App\Http\Controllers\ChartController::class,'index'])->name('popolazione');
//rotta per aggiornare il form calciatore
Route::post('/',[App\Http\Controllers\HomeController::class,'insert'])->name('soccer');

//rotta grafico calcio
Route::get('/marcatori',[App\Http\Controllers\HomeController::class,'marcatori'])->name('marcatori');

//rotta aggiorna form wallet
Route::post('/home',[App\Http\Controllers\HomeController::class,'insert2'])->name('wallet');
//rotta grafico wallet
 Route::get('/ral',[App\Http\Controllers\HomeController::class,'ral'])->name('ral');
 //rotta contatti
 Route::get('/contatti',[App\Http\Controllers\HomeController::class,'contatti'])->name('contatti');
 Route::post('/addTeam',[App\Http\Controllers\HomeController::class,'addTeam'])->name('addTeam');
 
